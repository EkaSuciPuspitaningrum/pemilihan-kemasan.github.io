<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\JenisKemasan;

class PustakaKemasan extends Controller
{
    public function show()
    {
        $data = ["jenis_kemasan"=>JenisKemasan::all()];
        return view('pakar.pustaka_kemasan', $data, [
            'type_menu' => 'pustaka_kemasan',
        ]);
    }

    public function store(Request $request)
    {

       $generator = Helper::IDGenerator(new JenisKemasan(), 'id_kemasan', 3, 'KMS');
       $kemasan = new JenisKemasan();
       $kemasan->id_kemasan = $generator;
       $kemasan->jenis_kemasan = $request->jenis_kemasan;
       $kemasan->bahan_kemasan = $request->bahan_kemasan;
       $kemasan->keterangan_kemasan = $request->keterangan_kemasan;
       $kemasan->save();
       
       return redirect("/pustaka_kemasan");
    }
}
