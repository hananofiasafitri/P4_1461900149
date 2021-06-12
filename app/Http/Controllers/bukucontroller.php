<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BukuExport;
use App\Models\buku;
use App\Models\jenis_buku;
use App\Models\rak_buku;


class bukucontroller extends Controller
{
    public function view(){
        $bukucontroller=rak_buku::join('buku','rak_buku.id_buku', '=', 'buku.id')->join('jenis_buku','rak_buku.id_jenis_buku', '=', 'jenis_buku.id')->get();
        // dd($bukucontroller);
        return view('prak0149', [
            'bukucontroller' => $bukucontroller,
        ]);

    }
    public function export(){
		return Excel::download(new bukucontroller, 'Data_1461900149.xlsx');
	}


}