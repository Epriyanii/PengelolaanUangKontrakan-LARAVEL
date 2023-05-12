<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $penghunis = Penghuni::orderBy('id','asc')->paginate();

        //render view with posts
        return view('penghunis.index', compact('penghunis'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('penghunis.create');
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
            'KTP'     => 'required|min:1',
            'nama_lengkap'   => 'required|min:3',
            'tanggal_masuk'     => 'required|min:5',
            'status_penghuni'   => 'required|min:3',
            'no_telp'   => 'required|min:3',
            'no_kontrakan'   => 'required|min:1'
        ]);

        //create post
        Penghuni::create([
            'id'     => $request->id,
            'KTP'   => $request->KTP,
            'nama_lengkap'   => $request->nama_lengkap,
            'tanggal_masuk'   => $request->tanggal_masuk,
            'status_penghuni'   => $request->status_penghuni,
            'no_telp'   => $request->no_telp,
            'no_kontrakan'   => $request->no_kontrakan
        ]);

        //redirect to index
        return redirect()->route('penghunis.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Penghuni $penghuni)
    {
        return view('penghunis.edit', compact('penghuni'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Penghuni $penghuni)
    {
        //validate form
        $this->validate($request, [
            'KTP'   => 'required|min:3',
            'nama_lengkap'   => 'required|min:3',
            'tanggal_masuk'   => 'required|min:2',
            'status_penghuni'   => 'required|min:2',
            'no_telp'   => 'required|min:2',
            'no_kontrakan'   => 'required'
        ]);

        $penghuni->update([
            'KTP'   => $request->KTP,
            'nama_lengkap'   => $request->nama_lengkap,
            'tanggal_masuk'   => $request->tanggal_masuk,
            'status_penghuni'   => $request->status_penghuni,
            'no_telp'   => $request->no_telp,
            'no_kontrakan'   => $request->no_kontrakan
        ]);

        //redirect to index
        return redirect()->route('penghunis.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy(Penghuni $penghuni)
    {

        //delete post
        $penghuni->delete();

        //redirect to index
        return redirect()->route('penghunis.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
