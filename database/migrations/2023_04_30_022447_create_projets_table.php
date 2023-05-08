<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('site_id')->constrained('sites');
            //***** */
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('utilisatuers');
            // //***** */
            // $table->unsignedBigInteger('site_id');
            // $table->foreign('site_id')->references('id')->on('sites');
            //***** */
            $table->date('proj_start')->nullable();
            $table->date('proj_end')->nullable();
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
        Schema::dropIfExists('projets');
    }
}
