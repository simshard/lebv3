<?php

namespace Tests\Feature;


use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_project()
    {
        // $this->withoutExceptionHandling();

      $attributes =factory('App\Project')->raw();

        $this->post('/projects', $attributes);
        $this->assertDatabaseHas('projects', $attributes);
         //  dd($attributes);
        $this->get('/projects')->assertSee($attributes['projectName']);
    }

     /** @test */
    public function a_user_can_view_a_project()
    {
        // $this->withoutExceptionHandling();
        $project =factory('App\Project')->create();
        $this->get($project->path())
            ->assertSee($project->projectName)
            ->assertSee($project->shortDescription);
    }

    /** @test */

    public function a_project_requires_a_title()
    {
        $attributes=factory('App\Project')->raw(['projectName'=>'']);
        $this->post('/projects', $attributes)->assertSessionHasErrors('projectName');
    }

    /** @test */

    public function a_project_requires_a_description()
    {
         $attributes=factory('App\Project')->raw(['shortDescription'=>'']);

         $this->post('/projects', $attributes)->assertSessionHasErrors('shortDescription');
    }
}
