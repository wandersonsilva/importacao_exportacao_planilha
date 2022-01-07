<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulks', function (Blueprint $table) {
            $table->id();
            //$table->integer('numero');
            $table->integer('entidade')->nullable();            
            $table->integer('empenho')->nullable();            
            $table->integer('ano_empenho')->nullable();            
            $table->integer('modalidade_empenho')->nullable();            
            $table->integer('uo')->nullable();            
            $table->integer('ua')->nullable();            
            $table->string('dt_lancamento', 13)->nullable();            
            $table->integer('transferencia')->nullable();            
            $table->string('instrumento_juridico')->nullable();            
            $table->string('tipo_cota')->nullable();            
            $table->integer('periodo')->nullable();            
            $table->integer('pessoa')->nullable();            
            $table->integer('natureza_despesa')->nullable();
            $table->integer('item_despesa')->nullable();
            $table->string('vl_empenhado')->nullable();            
            $table->string('vl_anulado')->nullable();            
            $table->string('valor_liquidado')->nullable();            
            $table->string('valor_pago')->nullable();            
            $table->string('vl_anul_pagamento')->nullable();            
            $table->string('nome_uo')->nullable();            
            $table->string('nome_ua')->nullable();            
            $table->integer('funcao')->nullable();           
            $table->integer('subfuncao')->nullable();            
            $table->integer('programa')->nullable();            
            $table->integer('subprograma')->nullable();            
            $table->integer('projativ')->nullable();                      
            $table->integer('fonte')->nullable();            
            $table->integer('fonte_detalhe')->nullable();            
            $table->string('classificacao')->nullable();            
            $table->string('tipo_periodo')->nullable();            
            $table->string('saldo_emp_liquidar')->nullable();
            $table->string('saldo_emp_pagar')->nullable();
            $table->string('codigo_pessoa')->nullable();            
            $table->string('nome_pessoa')->nullable();            
            $table->string('tipo_credor')->nullable();            
            $table->string('sf11_credor')->nullable();            
            $table->string('sucaf_fornecedor')->nullable();            
            $table->string('rh_codigo_contrato')->nullable();                                   
            $table->integer('ficha')->nullable();            
            $table->string('processo')->nullable();            
            $table->integer('sub_acao')->nullable();            
            $table->string('nome_sub_acao')->nullable();            
            $table->integer('tipo_documento_credor')->nullable();            
            $table->string('numero_documento_credor')->nullable();            
            $table->integer('grupo_pbh')->nullable();            
            $table->integer('especificacao_pbh')->nullable();            
            $table->integer('grupo_sicom')->nullable();            
            $table->integer('especificacao_sicom')->nullable();
            $table->string('natureza_despesa_sicom')->nullable();
            $table->integer('item_despesa_sicom')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulks');
    }
}
