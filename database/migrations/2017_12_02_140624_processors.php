<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Processors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rang')->comment('Ранг');
            $table->string('model')->unique()->comment('Модель');
            $table->string('kodovoe_imya')->comment('Кодовое имя');
            $table->string('seriya')->comment('Серия');
            $table->string('l2_cache_l3_cache')->comment('L2 Cache + L3 Cache');
            $table->string('shina_fsb_qpi')->comment('шина FSB / QPI');
            $table->string('tdp')->comment('TDP (Вт)');
            $table->string('mgc')->comment('МГц (норм.-Turbo)');
            $table->string('yadra_potoki')->comment('Ядра / потоки');
            $table->string('texprocess')->comment('Техпроцесс(нм)');
            $table->string('arxitektura')->comment('Архитектура');
            $table->string('64_razryadnost')->comment('64-разрядность');
            $table->string('vprodazhe')->comment('В продаже(дней)');
            $table->string('graficheskij_chip')->comment('Графический чип');
            $table->string('potencial')->comment('Потенциал, %');
            $table->string('3dmark06_cpu')->comment('3DMark06 CPU');
            $table->string('cb_r10_32bit_single')->comment('CB R10 32Bit Single');
            $table->string('cb_r10_32bit_multi')->comment('CB R10 32Bit Multi');
            $table->string('cinebench_r11_5_cpu_single_64bit')->comment('Cinebench R11.5 CPU Single 64Bit');
            $table->string('cb_r115_64bit')->comment('CB R11.5 64Bit');
            $table->string('cinebench_r15_cpu_single_64bit')->comment('Cinebench R15 CPU Single 64Bit');
            $table->string('cinebench_r15_cpu_multi_64bit')->comment('Cinebench R15 CPU Multi 64Bit');
            $table->string('wprime_32')->comment('wPrime 32(-)');
            $table->string('x264_pass_1')->comment('x264 Pass 1');
            $table->string('x264_pass_2')->comment('x264 Pass 2');
            $table->timestamps();
        });

        Schema::table('file_files', function (Blueprint $table) {        
            $table->foreign('processor_id')->references('id')->on('processors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('file_files', function (Blueprint $table) {        
            $table->dropForeign(['processor_id']);
        });
        Schema::dropIfExists('processors');
    }
}
