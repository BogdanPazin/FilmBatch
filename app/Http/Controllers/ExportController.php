<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Export;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function export(){
        $data = Export::sql();
                    
        $pdf = PDF::loadView('admin.pdfdownload', compact('data'));
    
        return $pdf->download('people.pdf');
    }
}
