<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\organizationController;

class organizationController extends Controller
{

    function __construct(){
        $this->_tipe = 'organization';
    }
    
    public function index()
    {
        $data = riwayat::where('tipe', $this->_tipe)->orderBy('tgl_akhir')->get();
        return view('dashboard.organization.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.organization.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('info1', $request->info1);
        Session::flash('tgl_mulai', $request->tgl_mulai);
        Session::flash('tgl_akhir', $request->tgl_akhir);
        Session::flash('isi', $request->isi);
        $request->validate(
            [
                'judul' => 'required',
                'info1' => 'required',
                'tgl_mulai' => 'required',
                'isi' => 'required',
            ],
            [
                'judul.required' => 'Judul wajib diisi',
                'info1.required' => 'Nama perusahaan wajib diisi',
                'tgl_mulai.required' => 'Tanggal mulai wajib diisi',
                'isi.required' => 'Isian tulisan wajib diisi',
            ]
            );
            $data = [
                'judul' => $request->judul,
                'info1' => $request->info1,
                'tipe' => $this->_tipe,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_akhir' => $request->tgl_akhir,
                'isi' => $request->isi
            ];
            riwayat::create($data);
            return redirect()->route('organization.index')->with('success', 'Berhasil menambahkan organization data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = riwayat::where('id', $id)->where('tipe', $this->_tipe)->first();
        return view ('dashboard.organization.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'judul' => 'required',
                'info1' => 'required',
                'tgl_mulai' => 'required',
                'isi' => 'required',
            ],
            [
                'judul.required' => 'Judul wajib diisi',
                'info1.required' => 'Nama perusahaan wajib diisi',
                'tgl_mulai.required' => 'Tanggal mulai wajib diisi',
                'isi.required' => 'Isian tulisan wajib diisi',
            ]
            );
            $data = [
                'judul' => $request->judul,
                'info1' => $request->info1,
                'tipe' => $this->_tipe,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_akhir' => $request->tgl_akhir,
                'isi' => $request->isi
            ];
            riwayat::where('id', $id)->where('tipe', $this->_tipe)->update($data);
            return redirect()->route('organization.index')->with('success', 'Berhasil update organization data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        riwayat::where('id', $id)->where('tipe', $this->_tipe)->delete();
        return redirect()->route('organization.index')->with('success', 'Berhasil melakukan delete data');
    }
}
