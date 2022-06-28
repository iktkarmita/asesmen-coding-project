<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Post\Models\Produks;
use Illuminate\Routing\Controller;
use App\Repositories\ProduksRepository;

use Symfony\Component\HttpFoundation\Response;


class HomeController extends Controller
{

    public function home()
    {
        $Produk = $this->ProduksRepository->getAll();
        return $Produk;
    }
}
