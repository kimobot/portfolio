<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTagsAmendSortOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->dropColumn('order_column');
            $table->dropColumn('sort_order');
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->integer('sort_order')->after('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->integer('order_column')->nullable();
            $table->dropColumn('sort_order');
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->integer('sort_order')->nullable();
        });
    }
}
