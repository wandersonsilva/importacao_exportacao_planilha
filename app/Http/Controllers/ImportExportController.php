<?php

namespace App\Http\Controllers;

use App\Bulks;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exports\BulkExport;
use App\Imports\BulkImport;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\ToModel;
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
        
        //Deleta no Banco de dados todos os dados gravados da Planilha anterior
        DB::delete('DELETE FROM BULKS');

        try {
            //Prepara a importação da Nova Planilha para o Banco de Dados
            $file = $request->file('file')->store('import');

            //Importa a Nova Planilha para o Banco de Dados
            Excel::import(new BulkImport,request()->file('file'));
            
            //(new BulkImport)->import($file);
           return back(); 

        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
             $file = $e->failures();
             
             foreach ($failures as $failure) {
                 $failure->row(); // row that went wrong
                 $failure->attribute(); // either heading key (if using heading row concern) or column index
                 $failure->errors(); // Actual error messages from Laravel validator
                 $failure->values(); // The values of the row that has failed.
             }
        }

        if($file){
            $msg = 'Importação realizada';
        }
       
        return redirect('importexport', ['msg' => $msg]);

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
