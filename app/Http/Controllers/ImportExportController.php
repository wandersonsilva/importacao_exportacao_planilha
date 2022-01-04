<?php

namespace App\Http\Controllers;

use App\Bulk;
use Illuminate\Http\Request;
use App\Exports\BulkExport;
use App\Imports\BulkImport;
use Maatwebsite\Excel\Facades\Excel;


class ImportExportController extends Controller
{
    /**
    * 
    */
    
    public function index()
    {
        //$bulks = Bulk::paginate(10);  
        return view('importexport');           
    }

    public function import() 
    {
        Excel::import(new BulkImport, request()->file('file'));                                               
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
