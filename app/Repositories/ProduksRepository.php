<?php

namespace App\Repositories;

use App\Models\Produks;
use Symfony\Component\HttpFoundation\Response;

class ProduksRepository
{
    public function getAll()
    {
        $Produk = Produks::all();
        $response = [
            'message' => 'List PRODUK All',
            'data' => $Produk
        ];

        return response()->json($response, Response::HTTP_OK); //200 OK
    }

    public function findById($id)
    {
        $Produk = produks::where('id', $id)->firstOrFail();

        $response = [
            'message' => 'List PRODUK order by id',
            'data' => $Produk
        ];

        return response()->json($response, Response::HTTP_OK); //200 OK
    }

    public function delete($id)
    {
        $Produk = Produks::where('id', $id)->delete();
        $response = [
            'message' => 'Produk telah di hapus',
            'data' => $Produk
        ];

        return response()->json($response, Response::HTTP_OK); //200 OK
    }

    public function format($Produk)
    {
        return [
            'produk_id' => $Produk->id,
            'description' => $Produk->keterangan,
            'name' => $Produk->nama,
            'price' => $Produk->harga,
            'image' => $Produk->image,
            'persediaan' => $Produk->persediaan,
            'updated_at' => $Produk->updated_at
        ];
    }
}
