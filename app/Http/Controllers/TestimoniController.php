<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testimoni;
use Illuminate\Support\Facades\DB;
use Session;


class TestimoniController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testimonis = testimoni::where('status',"ya")->get();
        return view('testii',['testim'=> $testimonis]);
    }

    public function ktAlumni(Request $request){
        $tambah = new testimoni([
            'idUser' => $request->input('idUser'),
            'testimoni' => $request->input('testimoni')
        ]);
        $tambah->save();
  
        return redirect('/formAlumni');
    }

    public function show(){
        $testimonis = testimoni::select('*')->get();
        return view('listTesti', ['testim' => $testimonis]);
    }

    public function destroy(Request $request)
    {
        $testimonis = testimoni::where('id_testimoni', $request->id_testimoni);
        $testimonis->delete();
   
        return redirect('/listTestii');
    }

    public function update(Request $request)
    {
        $testimonis = testimoni::where('status' ,$request->status)->update(['status'=> 'ya']);

        return redirect('/listTestii');
    }

    public function sukses(Request $request){
        $testimonis = testimoni::where('status' ,$request->status)->update(['status'=> 'ya']);
		Session::flash('sukses', 'Pesan Anda berhasil di tampilkan pada dashboard');
		return redirect('/formAlumni');
	}

    public function readmore(Request $request){
        return view('readmore', compact('request'));
    }
}

?>