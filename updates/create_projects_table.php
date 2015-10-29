<?php namespace Seven9\Project\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{

    public function up()
    {
        Schema::create('seven9_project_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('website');
            $table->string('developed_by');
            $table->string('links');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seven9_project_projects');
    }

}
