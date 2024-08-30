<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;


class UserImportController extends Controller
{
    public function list()  {
        
    }
    public function import( Request $request)  {
        $request->validate([
            'file' => 'required|mimes:csv',
        ]);
        try {
            //code...
            Excel::import(new UsersImport, $request->file);
            return redirect()->back()->with('success', 'Imported Successfully');
        } catch (\Exception $e) {
            // throw $th;
            if (str_contains($e->getMessage(), 'Duplicate entry')) { 
                $mail =explode("'",$e->getMessage());
                return redirect()->back()->with('error', "please remove duplicate mail ".$mail[1]);
            }
            return redirect()->back()->with('error', $e->getMessage());
        }
        

    }
}
