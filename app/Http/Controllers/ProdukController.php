<?php

namespace App\Http\Controllers;

use App\Models\Produks;
use Illuminate\Http\Request;
use App\Repositories\ProduksRepository;
use Symfony\Component\HttpFoundation\Response;

class ProdukController extends Controller
{

    public function index() //READ
    {
        $Produk = Produks::all();
        $response = [
            'message' => 'List PRODUK order by id',
            'data' => $Produk
        ];

        return response()->json($response, Response::HTTP_OK); //200 OK
    }

    public function show($id) //SHOW
    {
        $Produk = Produks::findOrFail($id);  //Melanjutkan jika ada data id, jika tidak maka tidak di lanjutkan

        $response = [
            'message' => 'PRODUK Detail ',
            'data' => $Produk
        ];
        return response()->json($response, Response::HTTP_OK); //200 OK
    }
}
