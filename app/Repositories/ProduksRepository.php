<?php

namespace App\Repositories;

use App\Models\Produks;

class ProduksRepository
{
    public function getAll()
    {
        $Produk = produks::orderBy('nama')
            ->where('harga', 4000)
            ->where('persediaan', 30)
            ->get()
            ->map(function ($Produk) {
                return [
                    'produk_id' => $Produk->id,
                    'description' => $Produk->keterangan,
                    'name' => $Produk->nama,
                    'price' => $Produk->harga,
                    'image' => $Produk->image,
                    'persediaan' => $Produk->persediaan,
                    'updated_at' => $Produk->updated_at
                ];
            });
        return $Produk;
    }

    public function findById($id)
    {
        $Produk = produks::where('id', $id)->firstOrFail();
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
