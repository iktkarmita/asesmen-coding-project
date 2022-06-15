<?php

namespace App\Repositories;

use App\Models\Produks;

class ProduksRepository
{
    public function getAll()
    {
        return Produks::all();
    }

    public function findById($id)
    {
        $Produk = produks::where('id', $id)->firstOrFail();
        return $this->format($Produk);
    }

    public function delete($id)
    {
        $Produk = Produks::where('id', $id)->delete();
        return $this->format($Produk);
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
