<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Modules\Post\Models\Produks;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ProdukController;
use function PHPUnit\Framework\assertTrue;



use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Database\QueryException;
use Modules\Post\Repositories\PostRepository;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{

    public function index_Produk() //READ
    {

        $Produk = Produks::all();
        $response = [
            'message' => 'List PRODUK order by id',
            'data' => $Produk
        ];

        return response()->json($response, Response::HTTP_OK); //200 OK
    }
    public function store(Request $request) //CREATE
    {
        $validatedData = Validator::make($request->all(), [
            'nama' => 'required|max:11',
            'keterangan' => 'required',
            'harga' => ['required', 'numeric'],
            'persediaan' => ['required', 'numeric'],
            'image' => 'min:5'
        ]);

        if ($validatedData->fails()) {
            return response()->json($validatedData->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }


        $Produk = Produks::create($request->all());

        $response = [
            'message' => 'PRODUK berhasil di tambah!!',
            'data' => $Produk
        ];
        return response()->json($response, Response::HTTP_CREATED); //201 OK
        //
        //dd($request->except(['_token', 'submit']));
        //Produks::create($validatedData);
        //session()->flash('success', 'Produks has been added !!');
        // redirect('/edit');
    }
    public function update(Request $request, $id) //UPDATE
    {
        $Produk = Produks::findOrFail($id); //Melanjutkan jika ada data id, jika tidak maka tidak di lanjutkan

        $validatedData = Validator::make($request->all(), [
            'nama' => 'required|max:11',
            'keterangan' => 'required',
            'harga' => ['required', 'numeric'],
            'persediaan' => ['required', 'numeric'],
            'image' => 'min:5'
        ]);

        if ($validatedData->fails()) {
            return response()->json($validatedData->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $Produk->update($request->all());

        $response = [
            'message' => 'PRODUK berhasil di Perbarui!!',
            'data' => $Produk
        ];
        return response()->json($response, Response::HTTP_OK); //200 OK
    }
    public function ProdukEdit($id) //READ ATAU MENAMPILKAN DATA BERDASARLAN  ID
    {
        $Produk = Produks::findOrFail($id);  //Melanjutkan jika ada data id, jika tidak maka tidak di lanjutkan

        $response = [
            'message' => 'PRODUK Detail ',
            'data' => $Produk
        ];
        return response()->json($response, Response::HTTP_OK); //200 OK
    }
    public function destroy($id) //DELETE DATA
    {
        $Produk = Produks::findOrFail($id);  //Melanjutkan jika ada data id, jika tidak maka tidak di lanjutkan

        $Produk->delete();

        $response = [
            'message' => 'PRODUK di Hapus Berhasil !! '
        ];
        return response()->json($response, Response::HTTP_OK); //200 OK
    }
}
