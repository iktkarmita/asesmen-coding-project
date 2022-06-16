<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Modules\Post\Models\Produks;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ProdukController;
use Illuminate\Contracts\Support\Renderable;
use Modules\Post\Repositories\PostRepository;
use Symfony\Component\HttpFoundation\Response;


class PostController extends Controller
{
    /**
    
     * @return void
     */
    private $ProduksRepository;
    public function __construct(PostRepository $PostRepository)
    {

        $this->PostRepository = $PostRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index_Produk()
    {

        $Produk = $this->PostRepository->getAll();
        return $Produk;
    }


    /** 
     * Show the form for creating a new resource.
     * @return Renderable 
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'nama' => 'required|max:11',
            'keterangan' => 'required',
            'harga' => ['required', 'numeric'],
            'persediaan' => ['required', 'numeric'],
            'image' => 'min:5'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        //
        //dd($request->except(['_token', 'submit']));
        Produks::create($request->all());

        return redirect('/edit'); //200 OK
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('post::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function ProdukEdit($id)
    {
        $Produk = $this->PostRepository->findById($id);
        return $Produk;
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $Produk = Produks::findOrFail($id); //Melanjutkan jika ada data id, jika tidak maka tidak di lanjutkan

        $validatedData = Validator::make($request->all(), [
            'nama' => 'required|max:11',
            'keterangan' => 'required',
            'harga' => ['required', 'numeric'],
            'persediaan' => ['required', 'numeric'],
            'image' => 'min:5'
        ]);


        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $Produk->update($request->all());
        return redirect('/edit'); //200 OK
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $id = $this->PostRepository->delete($id);
        return $id;
    }
}
