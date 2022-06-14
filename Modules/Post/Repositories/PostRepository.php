<?php

namespace Modules\Post\Repositories;

use Illuminate\Support\Str;
use Modules\Post\Models\Produks;

class PostRepository
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
        Produks::where('id', $id)->delete();
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
