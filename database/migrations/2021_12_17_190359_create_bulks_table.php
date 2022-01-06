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
            $table->integer('entidade');            
            $table->integer('empenho');            
            $table->integer('ano_empenho');            
            $table->integer('modalidade_empenho');            
            $table->integer('uo');            
            $table->integer('ua');            
            $table->string('dt_lancamento', 13);            
            $table->integer('transferencia')->nullable();            
            $table->string('instrumento_juridico')->nullable();            
            $table->string('tipo_cota');            
            $table->integer('periodo');            
            $table->integer('pessoa');            
            $table->integer('natureza_despesa');
            $table->integer('item_despesa');
            $table->string('vl_empenhado');            
            $table->string('vl_anulado');            
            $table->string('valor_liquidado');            
            $table->string('valor_pago');            
            $table->string('vl_anul_pagamento');            
            $table->string('nome_uo');            
            $table->string('nome_ua');            
            $table->integer('funcao');           
            $table->integer('subfuncao');            
            $table->integer('programa');            
            $table->integer('subprograma')->nullable();            
            $table->integer('projativ');                      
            $table->integer('fonte');            
            $table->integer('fonte_detalhe');            
            $table->string('classificacao');            
            $table->string('tipo_periodo');            
            $table->string('saldo_emp_liquidar');
            $table->string('saldo_emp_pagar');
            $table->string('codigo_pessoa');            
            $table->string('nome_pessoa');            
            $table->string('tipo_credor');            
            $table->string('sf11_credor')->nullable();            
            $table->string('sucaf_fornecedor')->nullable();            
            $table->string('rh_codigo_contrato')->nullable();                                   
            $table->integer('ficha');            
            $table->string('processo')->nullable();            
            $table->integer('sub_acao');            
            $table->string('nome_sub_acao');            
            $table->integer('tipo_documento_credor');            
            $table->string('numero_documento_credor');            
            $table->integer('grupo_pbh');            
            $table->integer('especificacao_pbh');            
            $table->integer('grupo_sicom');            
            $table->integer('especificacao_sicom');
            $table->string('natureza_despesa_sicom');
            $table->integer('item_despesa_sicom');
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
