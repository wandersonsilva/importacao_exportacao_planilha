<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    //
    public function viewImportUsers(){
        return view('import_user');
    }

    public function import(Request $request){
        Excel::import(new UserImport(), $request->file('file'));

        return 'Success';
    }

}
