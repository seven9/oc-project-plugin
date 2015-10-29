<?php namespace Seven9\Project\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('seven9_projects_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });
        Schema::create('projects_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('project_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['project_id', 'category_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('seven9_project_categories');
        Schema::dropIfExists('projects_categories');
    }

}
