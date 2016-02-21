<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attendees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->integer('age');
            $table->string('gender');
            $table->string('ethnicity');
            $table->string('origin');
            $table->string('school');
            $table->string('year');
            $table->string('major');
            $table->string('hackathons');
            $table->text('heard_source');
            $table->string('shirt_size');
            $table->string('linkedin_url');
            $table->string('github_url');
            $table->string('website_url');
            $table->text('resume_url');
            $table->string('alergies');
            $table->string('food_special');
            $table->text('gif');
            $table->boolean('rsvp');
            $table->boolean('checked_in');
            $table->integer('confirmations_sent');
            $table->dateTime('registration_date');
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
        Schema::drop('attendees');
    }
}
