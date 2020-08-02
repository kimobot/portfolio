<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateArtworksAddDefaultsNullables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('artworks', function (Blueprint $table) {
          $table->boolean('publish_social')->default(1)->change();
          $table->string('social_tags', 255)->nullable()->change();
          $table->dateTime('publish_on', 0)->nullable()->change();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('artworks', function (Blueprint $table) {
          $table->boolean('publish_social')->default(null)->change();
          $table->string('social_tags', 255)->nullable(false)->change();
          $table->dateTime('publish_on', 0)->nullable(false)->change();
      });
    }
}
