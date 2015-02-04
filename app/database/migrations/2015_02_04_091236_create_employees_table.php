<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::dropIfExists('employees');
        Schema::create('employees', function(Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('designation');
            $table->integer('allowed');
            $table->integer('used');
            $table->integer('remaining');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
