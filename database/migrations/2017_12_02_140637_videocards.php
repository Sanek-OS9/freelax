<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Videocards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videocards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rang')->comment('Ранг');
            $table->string('model')->unique()->comment('Модель');
            $table->string('kodovoe_imya')->comment('Кодовое имя')->nullable();
            $table->string('arxitektura')->comment('Архитектура')->nullable();
            $table->string('piks_shejdery')->comment('Пикс.шейдеры')->nullable();
            $table->string('vershin_shejdery')->comment('Вершин.шейдеры')->nullable();
            $table->string('shtatnayachastota')->comment('Штатная частота')->nullable();
            $table->string('chastotashejderov')->comment('Частота шейдеров')->nullable();
            $table->string('turbo')->comment('Turbo')->nullable();
            $table->string('chastotapamyati')->comment('Частота памяти')->nullable();
            $table->string('shinapamyati')->comment('Шина памяти')->nullable();
            $table->string('tip')->comment('Тип')->nullable();
            $table->string('versiyadirectx')->comment('Версия DirectX')->nullable();
            $table->string('opengl')->comment('OpenGL')->nullable();
            $table->string('texprocess')->comment('Техпроцесс(нм)')->nullable();
            $table->string('vprodazhe')->comment('В продаже(дней)')->nullable();
            $table->string('potencial')->comment('Потенциал, %')->nullable();
            $table->string('3dmark_ice_storm_gpu')->comment('3DMark Ice Storm GPU')->nullable();
            $table->string('3dmark_cloud_gate_standard_score')->comment('3DMark Cloud Gate Standard Score')->nullable();
            $table->string('3dmark_cloud_gate_gpu')->comment('3DMark Cloud Gate Standard Score')->nullable();
            $table->string('3dmark_fire_strike_score')->comment('3DMark Cloud Gate GPU')->nullable();
            $table->string('3dmark_fire_strike_graphics')->comment('')->nullable();
            $table->string('3dmark_time_spy_score')->comment('3DMark Time Spy Score')->nullable();
            $table->string('3dmark11_p')->comment('3DMark11 P')->nullable();
            $table->string('3dmark11_p_gpu')->comment('3DMark11 P GPU')->nullable();
            $table->string('3dmark_vantage_p')->comment('3DMark Vantage P')->nullable();
            $table->string('3dmark_vantage_p_gpu')->comment('3DMark Vantage P GPU')->nullable();
            $table->string('3dmark06')->comment('3DMark06')->nullable();
            $table->string('gfxbench')->comment('GFXBench')->nullable();
            $table->string('gfxbench_3_0_manhattan_offscreen_ogl')->comment('GFXBench 3.0 Manhattan Offscreen OGL')->nullable();
            $table->string('gfxbench_3_1_manhattan_es_3_1_offscreen')->comment('GFXBench 3.1 Manhattan ES 3.1 Offscreen')->nullable();
            $table->string('basemark_x_1_1_medium_quality')->comment('Basemark X 1.1 Medium Quality')->nullable();
            $table->string('basemark_x_1_1_high_quality')->comment('Basemark X 1.1 High Quality')->nullable();
            $table->string('unigine_heaven_3_0_dx_11')->comment('nigine Heaven 3.0 DX 11, Normal Tessellation, High Shaders')->nullable();
            $table->string('unigine_valley_1_0_extreme_hd_directx')->comment('Unigine Valley 1.0 Extreme HD DirectX')->nullable();
            $table->string('cinebench_r15_opengl_64bit')->comment('Cinebench R15 OpenGL 64Bit')->nullable();
            $table->string('cb_r10_32bit_opengl')->comment('CB R10 32Bit OpenGL')->nullable();
            $table->string('computemark_v2_1_normal')->comment('ComputeMark v2.1 Normal, Score')->nullable();
            $table->string('luxmark_v2_0_64bit_sala_gpus_only')->comment('LuxMark v2.0 64Bit Sala GPUs-only')->nullable();
            $table->text('rang_description')->comment('Описание ранга')->nullable();
            $table->timestamps();
        });

        Schema::table('file_files', function (Blueprint $table) {        
            $table->foreign('videocard_id')->references('id')->on('videocards');
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
            $table->dropForeign(['videocard_id']);
        });
        Schema::dropIfExists('videocards');
    }
}
