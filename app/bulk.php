<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bulk extends Model
{
    //
    //protected $table = 'bulk';
    protected $fillable = [
        //'numero',
        'entidade',
        'empenho',
        'ano_empenho',
        'modalidade_empenho',
        'uo',
        'ua',
        'dt_lancamento',
        'transferencia',
        'instrumento_juridico',
        'tipo_cota',
        'periodo',
        'pessoa',
        'natureza_despesa',
        'item_despesa',
        'vl_empenhado',
        'vl_anulado',
        'valor_liquidado',
        'valor_pago',
        'vl_anul_pagamento',
        'nome_uo',
        'nome_ua',
        'funcao',
        'subfuncao',
        'programa',
        'subprograma',
        'projativ',
        'fonte',
        'fonte_detalhe',
        'classificacao',
        'tipo_periodo',
        'saldo_emp_liquidar',
        'saldo_emp_pagar',
        'codigo_pessoa',
        'nome_pessoa',
        'tipo_credor',
        'sf11_credor',
        'sucaf_fornecedor',
        'rh_codigo_contrato',
        'ficha',
        'processo',
        'sub_acao',
        'nome_sub_acao',
        'tipo_documento_credor',
        'numero_documento_credor',
        'grupo_pbh',
        'especificacao_pbh',
        'grupo_sicom',
        'especificacao_sicom',
        'natureza_despesa_sicom',
        'item_despesa_sicom'
    ];
}
