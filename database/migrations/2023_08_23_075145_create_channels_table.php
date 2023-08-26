<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {

            $table->id()->unsigned();
            $table->string('server',100)->default('')->comment('имя хоста');
            $table->string('output',100)->default('')->comment('канал, используется первый элемент списка output');
            $table->string('name',100)->default('')->comment('название канала');
            $table->string('stream',100)->default('');
            $table->tinyInteger('ready')->default(0)->unsigned()->comment('устанавливается в true если получена вся необходимая информация из потока');

            $table->integer('cc_error')->default(0)->unsigned()->comment('счётчик CC-ошибок');
            $table->integer('pes_error')->default(0)->unsigned()->comment('счётчик ошибок PES');
            $table->integer('bitrate')->default(0)->unsigned()->comment('скорость потока');
            $table->tinyInteger('scrambled')->default(0)->unsigned()->comment('зашифрован или нет канал');

            $table->tinyInteger('send_sms')->default(1)->unsigned()->comment('Отправка sms при изменении статуса');
            $table->tinyInteger('send_xmpp')->default(1)->unsigned()->comment('Отправка xmpp при изменении статуса');
            $table->tinyInteger('send_email')->default(1)->unsigned()->comment('Отправка email при изменении статуса');

            $table->string('reset_name',255)->default('.stream')->comment('.stream');
            $table->string('reser_host',255)->default('192.168.1.118')->comment('192.168.118');
            $table->tinyInteger('wowsa_alive')->default(0)->unsigned()->comment('жива ли вовза');
            $table->string('wowsa_error',255)->default('');
            $table->string('screenshot_name',45)->default('');

            $table->string('load_image',145)->default('');
            $table->string('getaway',45)->default('192.168.1.253');
            $table->string('astra_name',45)->default('start_');
            $table->timestamps();
            $table->unique(['server', 'output'],'output_server');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channels');
    }
}
