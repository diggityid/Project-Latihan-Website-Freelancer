<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order', function (Blueprint $table) {
            $table->foreign('buyer_id', 'fk_order_buyer_to_users')->references('id')->on('users')->onupdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('freelancer_id', 'fk_order_freelancer_to_users')->references('id')->on('users')->onupdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('service_id', 'fk_order_to_service')->references('id')->on('service')->onupdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('order_status_id', 'fk_order_to_order_status')->references('id')->on('order_status')->onupdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order', function (Blueprint $table) {
            $table->dropForeign('fk_order_buyer_to_users');
            $table->dropForeign('fk_order_freelancer_to_users');
            $table->dropForeign('fk_order_to_service');
            $table->dropForeign('fk_order_to_order_status');
        });
    }
}
