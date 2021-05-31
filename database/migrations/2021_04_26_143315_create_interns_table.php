<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('Nationality');
            $table->string('livingIn');
            $table->string('fieldOfStudies');
            $table->string('graduated');
            $table->string('currentlyStudying');
            $table->string('nativeLanguages');
            $table->string('secondsLanguages');
            $table->string('seekingInternship');
            $table->string('openForEmployment');
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
        Schema::dropIfExists('interns');
    }
}
