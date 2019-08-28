<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'projects',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('owner_id')->default(0);
                $table->string('projectThumb', 255)->nullable();
                $table->string('projectName', 255)->nullable();
                $table->text('shortDescription')->nullable();
                $table->string('projectLocation', 128)->nullable();
                $table->string('projectCounty', 64)->nullable();
                $table->string('projectCountry', 64)->nullable();
                $table->decimal('loc_lat', 10, 6)->nullable();
                $table->decimal('loc_lon', 10, 6)->nullable();
                $table->string('energyStandard', 128)->default('');
                $table->string('alt_energyStandard', 128)->nullable();


                //    $table->enum('buildType', ['New build','Refurbishment','Mixed']);
                //    $table->enum('buildingSector', ['Private Residential','Public Residential','Public','Commercial','Mixed-use','Industrial']);
                //    $table->enum('propertyType', ['Detached','Semi-Detached','End Terrace','Mid Terrace']);
                //    $table->enum('constructionType', ['Stone','Solid Brick','Masonry Cavity','Oak frame','Softwood frame','Steel frame', 'Concrete frame','Other']);
                //    $table->string('alt_constructionType', 255)->nullable();
                //    $table->double('floorArea', 10, 2)->default('1');
                //    $table->enum('floorAreaCalcMethod', ['phpp','sap','approx']);

                //flags
                $table->tinyInteger('active_flag')->default('1');
                $table->tinyInteger('passivhauscertificate')->default(0);
                $table->tinyInteger('aecb-certificate')->default(0);
                $table->tinyInteger('featuredproject')->default('0');

                $table->timestamps();

                $table->index('projectLocation');
                $table->index('projectCounty');
                $table->index('projectCountry');
                $table->index('energyStandard');
                //   $table->index('buildType');
                //   $table->index('buildingSector');
                //   $table->index('propertyType');
                //   $table->index('constructionType');

                $table->foreign('owner_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
