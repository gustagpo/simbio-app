<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_projeto_rouanet_teste', function (Blueprint $table) {
            $table->id('id_projeto');
            $table->string('pronac');
            $table->string('ano_projeto');
            $table->string('nome');
            $table->string('segmento');
            $table->string('area');
            $table->string('uf');
            $table->string('municipio');
            $table->string('data_inicio');
            $table->string('data_termino');
            $table->string('situacao');
            $table->string('mecanismo');
            $table->string('enquadramento');
            $table->string('valor_captado');
            $table->string('valor_aprovado');
            $table->text('acessibilidade');
            $table->text('objetivos')->nullable();
            $table->text('justificativa')->nullable();
            $table->text('etapa')->nullable();
            $table->text('ficha_tecnica');
            $table->text('impacto_ambiental');
            $table->text('especificacao_tecnica');
            $table->text('providencia');
            $table->text('democratizacao');
            $table->text('sinopse');
            $table->text('resumo');
            $table->string('valor_projeto');
            $table->string('outras_fontes');
            $table->string('valor_proposta');
            $table->string('valor_solicitado');
            $table->longText('objetivo');
            $table->longText('estrategia_execucao');
            $table->string('link_incentivadores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projeto_rouanets');
    }
};
