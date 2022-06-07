<?php

namespace Modules\Edit\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Edit\Repositories\EditRepository;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Edit\Models\Produks;

class EditController extends Controller
{
    /**
    
     * @return void
     */
    private $EditRepository;
    public function __construct(EditRepository $EditRepository)
    {
        $this->middleware('auth');
        $this->EditRepository = $EditRepository;
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
            $Produk = produks::all();
            return view('edit::indexx', compact(['Produk']));
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
        return view('edit::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('edit::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            $Produk = $this->EditRepository->findById($id);

            return view('edit::editt', compact(['Produk']));
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
        session()->flash('success', 'Produks has been updated !!');
        return redirect('/edit');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
