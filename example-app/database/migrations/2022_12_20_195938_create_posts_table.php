<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable(); 
            $table->string('image')->nullable(); //بنحط nullable عشان الصورة ما تضل فاضية 
            $table->timestamps();   //اضافة تحديث 
            $table->softDeletes();  //حدف واخفاء الخبر ويمكن ارجاعة
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
