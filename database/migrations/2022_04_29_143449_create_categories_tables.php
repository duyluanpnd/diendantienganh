<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->nullable()->index();
            $table->char('icon')->nullable();
            $table->string('avatar')->nullable();
            $table->tinyInteger('active')->nullable()->default(1)->index();
            $table->tinyInteger('hot')->nullable()->default(0)->index();
            $table->string('title_seo')->nullable();
            $table->string('description_seo')->nullable();
            $table->string('keyword_seo')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('categories')->nullOnDelete();
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
        Schema::table('categories', function (Blueprint $table)
        {
            $table->dropForeign('categories_parent_id_foreign');
        });
        Schema::dropIfExists('categories');
    }
}
