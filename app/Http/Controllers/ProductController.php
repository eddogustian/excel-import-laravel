<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use Excel;
use App\Jobs\ImportJob;

class ProductController extends Controller
{
    public function storeData(Request $request)
    {
        // print_r('masuk');die();
        //VALIDASI
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            //Upload file
            $file = $request->file('file'); //GET FILE
            $filename = time(). '.'. $file->getClientOriginalExtension();
            $file->storeAs(
                'public', $filename
            );
            
             //MEMBUAT JOBS DENGAN MENGIRIMKAN PARAMETER FILENAME
            ImportJob::dispatch($filename);
            return redirect()->back()->with(['success' => 'Upload success']);
        }  
        return redirect()->back()->with(['error' => 'Please choose file before']);
    }
}
