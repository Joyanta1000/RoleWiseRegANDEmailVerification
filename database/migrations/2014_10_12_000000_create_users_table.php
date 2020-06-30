<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('tbl_user_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('tbl_user_types_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable();
            $table->string('nid')->nullable();
            $table->string('nid_front_image')->nullable();
            $table->string('nid_back_image')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('bid')->nullable();
            $table->string('bid_image')->nullable();
            $table->string('card_no')->nullable();
            $table->string('family_members')->nullable();
            $table->string('earners')->nullable();
            $table->string('address')->nullable();
            
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('email_verified')->nullable();
            $table->string('confirmation_code')->nullable();
            $table->tinyInteger('is_delete')->default(0);
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
