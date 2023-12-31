<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_post_id'); // Reference to the post
            $table->string('name'); // Name of the commenter
            $table->text('body'); // Comment content
            $table->boolean('is_approved')->default(false); // For moderation
            $table->timestamps();

            $table->foreign('blog_post_id')->references('id')->on('blog_posts')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
