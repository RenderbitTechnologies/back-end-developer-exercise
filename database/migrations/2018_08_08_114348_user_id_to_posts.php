<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('posts', function($table) {
            $table->integer('user_id')->unsigned();
        });
        Schema::table('posts',function($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
         Schema::table('posts', function($table) {
        $table->dropColumn('user_id');
        });
        
    }
}
