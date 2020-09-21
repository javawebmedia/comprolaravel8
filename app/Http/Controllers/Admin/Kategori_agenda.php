<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Kategori_agenda extends Controller
{
    // Index
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
		$kategori_agenda 	= DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

		$data = array(  'title'             => 'Kategori Agenda',
						'kategori_agenda'	=> $kategori_agenda,
                        'content'           => 'admin/kategori_agenda/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah(Request $request)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	request()->validate([
					        'nama_kategori_agenda' => 'required|unique:kategori_agenda',
					        'urutan' 		       => 'required',
					        ]);
    	$slug_kategori_agenda = Str::slug($request->nama_kategori_agenda, '-');
        DB::table('kategori_agenda')->insert([
            'nama_kategori_agenda'   => $request->nama_kategori_agenda,
            'slug_kategori_agenda'	=> $slug_kategori_agenda,
            'keterangan'            => $request->keterangan,
            'urutan'   		        => $request->urutan
        ]);
        return redirect('admin/kategori_agenda')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit(Request $request)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	request()->validate([
					        'nama_kategori_agenda' => 'required',
					        'urutan'               => 'required',
					        ]);
    	$slug_kategori_agenda = Str::slug($request->nama_kategori_agenda, '-');
        DB::table('kategori_agenda')->where('id_kategori_agenda',$request->id_kategori_agenda)->update([
            'nama_kategori_agenda'   => $request->nama_kategori_agenda,
            'slug_kategori_agenda'	=> $slug_kategori_agenda,
            'keterangan'            => $request->keterangan,
            'urutan'                => $request->urutan
        ]);
        return redirect('admin/kategori_agenda')->with(['sukses' => 'Data telah diupdate']);
    }

    // Delete
    public function delete($id_kategori_agenda)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	DB::table('kategori_agenda')->where('id_kategori_agenda',$id_kategori_agenda)->delete();
    	return redirect('admin/kategori_agenda')->with(['sukses' => 'Data telah dihapus']);
    }
}
