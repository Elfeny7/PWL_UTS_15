<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buku = Buku::where([
            ['judul', '!=', Null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('judul', 'LIKE', '%' . $search . '%')
                    ->orWhere('kode_buku', 'LIKE', '%' . $search . '%')
                    ->orWhere('jenis_buku', 'LIKE', '%' . $search . '%')
                    ->get();
                }
            }]
        ])->paginate(5);
        $posts = Buku::orderBy('kode_buku', 'desc');
        return view('dashboard.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        Buku::create($request->all());

        return redirect()->route('dashboard.index')
            ->with('success', 'Buku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_buku)
    {
        $buku = Buku::find($kode_buku);
        return view('dashboard.detail', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_buku)
    {
        $buku = Buku::find($kode_buku);
        return view('dashboard.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_buku)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);
        Buku::find($kode_buku)->update($request->all());
        return redirect()->route('dashboard.index')
            ->with('success', 'Buku Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_buku)
    {
        Buku::find($kode_buku)->delete();
        return redirect()->route('dashboard.index')
            ->with('success', 'Buku Berhasil Dihapus');
    }
}
