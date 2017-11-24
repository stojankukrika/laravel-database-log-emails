<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmailLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('to')->nullable()->default(null);
            $table->string('subject');
            $table->longText('body');
            $table->string('from')->nullable()->default(null);
            $table->string('cc')->nullable()->default(null);
            $table->string('bcc')->nullable()->default(null);
            $table->text('headers')->nullable()->default(null);
            $table->longText('attachments')->nullable()->default(null);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('email_logs');
    }
}
