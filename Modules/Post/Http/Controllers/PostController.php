<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\ProdukController;
use Modules\Post\Models\Produks;
use Modules\Post\Repositories\PostRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


use function PHPUnit\Framework\assertTrue;

class PostController extends Controller
{
    /**
    
     * @return void
     */
    private $ProduksRepository;
    public function __construct(PostRepository $PostRepository)
    {
        $this->middleware('auth');
        $this->PostRepository = $PostRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $role = Auth::user()->role;

        if ($role == '1') {
            return view('post::index');
        } else {
            return redirect('/home');
        }
    }
    public function index_Produk()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            $Produk = $this->PostRepository->getAll();
            return view('post::Update', compact(['Produk']));
        } else {
            return redirect('/home');
        }
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
        $validatedData = $request->validate([
            'nama' => 'required|max:11',
            'keterangan' => 'required',
            'harga' => 'required',
            'persediaan' => 'required',
            'image' => 'image|file|min:5'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        //
        //dd($request->except(['_token', 'submit']));
        Produks::create($validatedData);
        session()->flash('success', 'Produks has been added !!');
        return redirect('/edit');
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

        $role = Auth::user()->role;

        if ($role == '1') {
            $Produk = $this->PostRepository->findById($id);
            return view('post::editt', compact(['Produk']));
        } else {
            return redirect('/home');
        }
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = [
            'nama' => 'required|max:344',
            'keterangan' => 'required',
            'harga' => 'required',
            'persediaan' => 'required',
            'image' => 'image|file|min:5'
        ];

        $validatedData = $request->validate($data);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        produks::where('id', $id)->update($validatedData);
        return redirect('/edit');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $id = $this->PostRepository->delete($id);
        return redirect('/edit');
    }
}
