<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutregisters', function (Blueprint $table) {
            $table->id();
            $table->string('categories');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('other_skill');
            $table->string('class_type');
            $table->text('title_ads');
            $table->text('background');
            $table->text('teaching_mathod');
            // $table->string('cv');
            $table->string('address');
            $table->string('meeting_point');
            $table->string('language');
            $table->string('parhrs');
            $table->string('parfivehrs');
            $table->string('morefivehrs');
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
        Schema::dropIfExists('tutregisters');
    }
}
