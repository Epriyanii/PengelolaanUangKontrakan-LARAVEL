<?php

namespace App\Http\Controllers;

use App\Models\Kontrakan;
use Illuminate\Http\Request;

class KontrakanController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $kontrakans = Kontrakan::orderBy('no_kn','asc')->paginate();

        //render view with posts
        return view('kontrakans.index', compact('kontrakans'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('kontrakans.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'id'     => 'required',
            'no_kn'     => 'required|min:1',
            'status_kn'   => 'required|min:3',
            'harga_kn'     => 'required|min:5',
            'id_penghuni'   => 'required|min:5'
        ]);

        //create post
        Kontrakan::create([
            'id'     => $request->id,
            'no_kn'     => $request->no_kn,
            'status_kn'   => $request->status_kn,
            'harga_kn'     => $request->harga_kn,
            'id_penghuni'   => $request->id_penghuni
        ]);

        //redirect to index
        return redirect()->route('kontrakans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Kontrakan $kontrakan)
    {
        return view('kontrakans.edit', compact('kontrakan'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Kontrakan $kontrakan)
    {
        //validate form
        $this->validate($request, [
            'no_kn'     => 'required|min:1',
            'status_kn'   => 'required|min:3',
            'harga_kn'   => 'required|min:3',
            'id_penghuni'   => 'required'
        ]);

        $kontrakan->update([
            'no_kn'     => $request->no_kn,
            'status_kn'   => $request->status_kn,
            'harga_kn'   => $request->harga_kn,
            'id_penghuni'   => $request->id_penghuni
        ]);

        //redirect to index
        return redirect()->route('kontrakans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy(Kontrakan $kontrakan)
    {

        //delete post
        $kontrakan->delete();

        //redirect to index
        return redirect()->route('kontrakans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
