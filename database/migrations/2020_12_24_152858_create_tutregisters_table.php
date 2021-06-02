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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('subject');
            $table->string('title_ads');
            $table->string('categories');
            $table->string('class_type');
            $table->text('address');
            $table->string('meeting_point');
            $table->string('class_location');
            $table->string('language');
            $table->text('method');
            $table->text('about_tutor');
            $table->string('week');
            $table->string('month');
            $table->string('year');
            $table->string('status');
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
