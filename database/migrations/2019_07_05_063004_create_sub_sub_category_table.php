<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubSubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sub_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name','400')->nullable();
            $table->integer('sub_category_id');
            $table->string('slug','400');
            $table->text('description');
            $table->integer('status')->default('1');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('sub_sub_category');
    }
}
