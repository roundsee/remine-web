<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_slots', function (Blueprint $table) {
            $table->id();
            $table->date('dateslot')->index();
            $table->int('slot_id')->index();
            $table->timestamps();
        });
    }
    `id` int NOT NULL AUTO_INCREMENT,
    `dateslot` date DEFAULT NULL,
    `slot_id` int DEFAULT NULL,
    `status` int DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `dtslot` (`dateslot`),
    KEY `idslot` (`slot_id`),
    KEY `status` (`status`)
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}