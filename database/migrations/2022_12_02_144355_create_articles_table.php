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
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); //文章No
            $table->bigInteger('user_id'); //作者ID
            $table->string('author', 20)->nullable(); //作者
            $table->string('subject', 100)->nullable(); //標題
            $table->text('content'); //內文
            $table->string('tegs', 50)->nullable(); //文章屬性
            $table->boolean('enabled')->default(true);
            $table->string('pic', 255); //附加圖檔
            $table->foreignId('cgy_id')->constrained(); //cgy_id外鍵
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
        //刪除cgy_id外鍵
        Schema::table('articles', function (Blueprint $table) {
            //$table->dropForeign('posts_user_id_foreign');
            $table->dropForeign(['cgy_id']);
        });

        Schema::dropIfExists('articles');
    }
};