<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{


    use WithFaker, RefreshDatabase;

     /** @test */

    public function guests_cannot_create_a_project()
    {
        //$this->withoutExceptionHandling();

        $attributes=factory('App\Project')->raw();

        $this->post('/projects', $attributes)->assertRedirect('/login');
    }

    /** @test */

    public function guests_cannot_view_projects()
    {
        //$this->withoutExceptionHandling();

        $attributes=factory('App\Project')->raw();

        $this->get('/projects', $attributes)->assertRedirect('/login');
    }

    /** @test */
    public function guests_cannot_view_a_single_projects()
    {
        $project=factory('App\Project')->create();
        $this->get($project->path())->assertRedirect('/login');
    }

    /** @test */
    public function a_user_can_create_a_project()
    {
         $this->withoutExceptionHandling();

        $this->actingAs(factory('App\User')->create());

        $attributes =factory('App\Project')->raw(
            [ 'owner_id'=>auth()->id()]
        );


        $this->post('/projects', $attributes);
        $this->assertDatabaseHas('projects', $attributes);
       //   dd($attributes);
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
        $this->actingAs(factory('App\User')->create());

        $attributes=factory('App\Project')->raw(['projectName'=>'']);
        $this->post('/projects', $attributes)->assertSessionHasErrors('projectName');
    }

    /** @test */

    public function a_project_requires_a_description()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes=factory('App\Project')->raw(['shortDescription'=>'']);

        $this->post('/projects', $attributes)->assertSessionHasErrors('shortDescription');
    }

}
