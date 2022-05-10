<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->unique();
            $table->string('slug')->nullable()->index();
            $table->longText('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('active')->nullable()->default(1);
            $table->string('author_id')->nullable()->default(0);
            $table->string('description_seo')->nullable();
            $table->string('title_seo')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('view')->default(0);
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
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
        Schema::table('posts', function (Blueprint $table)
        {
            $table->dropForeign('posts_user_id_foreign');
            $table->dropForeign('posts_category_id_foreign');
        });
        Schema::dropIfExists('posts');
    }
}
