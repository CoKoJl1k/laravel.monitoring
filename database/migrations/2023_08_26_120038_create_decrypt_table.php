<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecryptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decrypt', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('server', 100)->default('')->comment('имя хоста');
            $table->string('output', 100)->default('')->comment('канал, используется первый элемент списка output');
            $table->string('channel', 100)->default('');
            $table->string('stream', 100)->default('');
            $table->tinyInteger('keys')->default(0)->unsigned()->comment('ошибка обработки ECM пакета (нет подписки)');
            $table->tinyInteger('cam')->default(0)->unsigned()->comment('ошибка соединения с CAM-сервером');
            $table->timestamps();
            $table->unique(['server', 'output'], 'cr_server_output');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('decrypt');
    }
}
