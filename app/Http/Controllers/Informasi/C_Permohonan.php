<?php

namespace App\Http\Controllers\Informasi;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class C_Permohonan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formajuan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required|in:1,2,3',
            'nama' => 'required|string|max:255',
            'no_nik' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'informasitujuan' => 'required|string|max:255',
            'informasirincian' => 'required|string|max:255',
            'informasibentuk' => 'required|in:sc,hc',
            'informasicara' => 'required|in:1,2,3',
            'no_wa' => 'required|string|max:15',
            'email' => 'required|email|unique:rts,email',
        ] );

        $data = $request->all();
        Pengajuan::create($data);
        return redirect('/form-ajuan')->with('success', "Data berhasil disimpan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $props = [
            'informasi' => Pengajuan::find($id)
        ];
      return view('detailinformasi',$props);
    }

     public function all()
    {
     $alldata = Pengajuan::all();
     return view('permohonaninformasi',['informasi'=>$alldata]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
