<?php

namespace App\Http\Controllers;

use App\Bulks;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exports\BulkExport;
use App\Imports\BulkImport;
use Maatwebsite\Excel\Validators\Failure;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;


class ImportExportController extends Controller
{
    /**
    * 
    */
    
    public function index()
    {
             
    }

    public function import(Request $request) 
    {
        //Excel::import(new BulkImport, request()->file('file')); 
        
        //Deleta no Banco de dados todos os dados gravados da Planilha anterior
        DB::delete('DELETE FROM BULKS');

        //Prepara a importação da Nova Planilha para o Banco de Dados
        $file = $request->file('file')->store('import');
        
        //Importa a Nova Planilha para o Banco de Dados
        (new BulkImport)->import($file);

        return redirect('importexport')->with('status','Arquivo importado com Sucesso');

    }

    public function importExportView()
    {
        return view('importexport');
    }

    public function export()
    {
        return view('export');
    }
}
