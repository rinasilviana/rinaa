<?php

namespace App\Http\Controllers;
use App\Models\Pelanggaran;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    public function index(): View
    {
        //get data db
        $pelanggarans = Pelanggaran::latest()->paginate(10);
        if (request('cari')){
            $pelanggarans = $this->search(request('cari'));
        }
        return view('admin.pelanggaran.index', compact('pelanggarans'));
    }
    public function create()
    {
        return view('admin.pelanggaran.create');
        
    }
    public function store(Request $request) 
    {
        $request->validate([
            'jenis' => 'required|string|max:250',
            'konsekuensi' => 'required|string|max:250',
            'poin' => 'required|integer',
        ]);

        Pelanggaran::create([
            'jenis' => $request->jenis,
            'konsekuensi' => $request->konsekuensi,
            'poin' => $request->poin,
        ]);

        return redirect()->route('pelanggaran.index')->with('success', 'Pelanggaran created successfully.');
    }
    public function search(string $cari)
    {
        $pelanggarans = DB::table('pelanggarans')->where(DB::raw('lower(jenis)'), 'like', '%' .strtolower($cari) .'%')->paginate(10);
        return $pelanggarans;
    }
    public function edit(string $id): View{
        //get data db
        $pelanggaran = Pelanggaran::where('id', $id)
        ->first();
        return view('admin.pelanggaran.edit', compact('pelanggaran'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
      //validate form
      $validate = $request->validate([
        'jenis' => 'required|string|max:250',
        'konsekuensi' => 'required|string|max:250',
        'poin' => 'required'
      ]);
      //get post  by db
      $datas = Pelanggaran::findOrFail($id);
      //edit akun
        $datas->update([
            'jenis' => $request->jenis,
            'konsekuensi' => $request->konsekuensi,
            'poin' => $request->poin,
        ]);
        //redirect
        return redirect()->route('pelanggaran.edit', $id)->with('success', 'Pelanggaran updated successfully.');
    }
    public function destroy($id): RedirectResponse
    {
        //get post by id
        $post = Pelanggaran::findOrFail($id);
        //delete pelanggaran
        $post->delete();
        //redirect
        return redirect()->route('pelanggaran.index')->with('success', 'Pelanggaran deleted successfully.');
    }
}
