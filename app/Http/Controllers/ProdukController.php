<?php

namespace App\Http\Controllers;

use App\Models\Produks;
use Illuminate\Http\Request;
use App\Repositories\ProduksRepository;

class ProdukController extends Controller
{
    private $ProduksRepository;
    public function __construct(ProduksRepository $ProduksRepository)
    {
        $this->ProduksRepository = $ProduksRepository;
    }
    public function index()
    {
        $Produk = $this->ProduksRepository->getAll();
        return $Produk;
    }

    public function show($id)
    {
        $Produk = $this->ProduksRepository->findById($id);
        return $Produk;
    }
}
