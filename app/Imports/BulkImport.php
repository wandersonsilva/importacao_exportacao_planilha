<?php

namespace App\Imports;
use App\Bulk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BulkImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, ShouldQueue, SkipsOnFailure
{
	/**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */    

    use Importable, SkipsErrors;

    public function model(array $row)
    {
        return new Bulk([
            //'numero'                    => $row['numero'],
            'entidade'                  => $row['entidade'],            
            'empenho'                   => $row['empenho'],            
            'ano_empenho'               => $row['ano_empenho'],            
            'modalidade_empenho'        => $row['modalidade_empenho'],            
            'uo'                        => $row['uo'],            
            'ua'                        => $row['ua'],            
            'dt_lancamento'             => $row['dt_lancamento'],            
            'transferencia'             => $row['transferencia'],            
            'instrumento_juridico'      => $row['instrumento_juridico'],            
            'tipo_cota'                 => $row['tipo_cota'],            
            'periodo'                   => $row['periodo'],            
            'pessoa'                    => $row['pessoa'],            
            'natureza_despesa'          => $row['natureza_despesa'],            
            'item_despesa'              => $row['item_despesa'],            
            'vl_empenhado'              => $row['vl_empenhado'],            
            'vl_anulado'                => $row['vl_anulado'],            
            'valor_liquidado'           => $row['valor_liquidado'],            
            'valor_pago'                => $row['valor_pago'],            
            'vl_anul_pagamento'         => $row['vl_anul_pagamento'],            
            'nome_uo'                   => $row['nome_uo'],            
            'nome_ua'                   => $row['nome_ua'],            
            'funcao'                    => $row['funcao'],            
            'subfuncao'                 => $row['subfuncao'],            
            'programa'                  => $row['programa'],            
            'subprograma'               => $row['subprograma'],            
            'projativ'                  => $row['projativ'],                        
            'fonte'                     => $row['fonte'],            
            'fonte_detalhe'             => $row['fonte_detalhe'],            
            'classificacao'             => $row['classificacao'],            
            'tipo_periodo'              => $row['tipo_periodo'],            
            'saldo_emp_liquidar'        => $row['saldo_emp_liquidar'],            
            'saldo_emp_pagar'           => $row['saldo_emp_pagar'],            
            'codigo_pessoa'             => $row['codigo_pessoa'],            
            'nome_pessoa'               => $row['nome_pessoa'],            
            'tipo_credor'               => $row['tipo_credor'],            
            'sf11_credor'               => $row['sf11_credor'],            
            'sucaf_fornecedor'          => $row['sucaf_fornecedor'],            
            'rh_codigo_contrato'        => $row['rh_codigo_contrato'],                                
            'ficha'                     => $row['ficha'],            
            'processo'                  => $row['processo'],            
            'sub_acao'                  => $row['sub_acao'],            
            'nome_sub_acao'             => $row['nome_sub_acao'],            
            'tipo_documento_credor'     => $row['tipo_documento_credor'],            
            'numero_documento_credor'   => $row['numero_documento_credor'],            
            'grupo_pbh'                 => $row['grupo_pbh'],            
            'especificacao_pbh'         => $row['especificacao_pbh'],            
            'grupo_sicom'               => $row['grupo_sicom'],            
            'especificacao_sicom'       => $row['especificacao_sicom'],            
            'natureza_despesa_sicom'    => $row['natureza_despesa_sicom'],            
            'item_despesa_sicom'        => $row['item_despesa_sicom']
            
        ]);
    }

    
    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    public function onFailure(Failure ...$failures)
    {
        // Handle the failures how you'd like.
    }

}

