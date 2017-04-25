<?php namespace Digitalfox\Researchpublication\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateResearchBriefsTable extends Migration
{

    public function up()
    {
        Schema::create('digitalfox_researchpublication_research_briefs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->longText('description');
            $table->integer('order');
            $table->string('icon');
            $table->string('file');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('digitalfox_researchpublication_research_briefs');
    }

}
