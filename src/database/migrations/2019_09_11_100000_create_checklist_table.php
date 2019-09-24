<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists_checklist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('scaffolding_id')->unsigned()->nullable();
            $table->foreign('scaffolding_id')->references('id')->on('checklists_scaffolding');
            $table->string('type');
            $table->string('line');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklists_checklist');
    }
}
