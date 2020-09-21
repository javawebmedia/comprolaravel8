<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Image;
use App\Models\Agenda_model;

class Agenda extends Controller
{
    // Main page
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
    	$myagenda 	= new Agenda_model();
		$agenda 	= $myagenda->semua();
		$kategori_agenda 	= DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

		$data = array(  'title'       => 'Data Agenda',
						'agenda'      => $agenda,
						'kategori_agenda'    => $kategori_agenda,
                        'content'     => 'admin/agenda/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Add
    public function add()
    {
        $data = array(  'title'       => 'Data Agenda'
                    );
        return view('admin/agenda/add',$data);
    }

    // Cari
    public function cari(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myagenda           = new Agenda_model();
        $keywords           = $request->keywords;
        $agenda             = $myagenda->cari($keywords);
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data Agenda',
                        'agenda'            => $agenda,
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/agenda/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Proses
    public function proses(Request $request)
    {
        $site           = DB::table('konfigurasi')->first();
        $pengalihan     = $request->pengalihan;
        // PROSES HAPUS MULTIPLE
        if(isset($_POST['hapus'])) {
            $id_agendanya       = $request->id_agenda;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('agenda')->where('id_agenda',$id_agendanya[$i])->delete();
            }
            return redirect($pengalihan)->with(['sukses' => 'Data telah dihapus']);
        // PROSES SETTING DRAFT
        }elseif(isset($_POST['draft'])) {
            $id_agendanya       = $request->id_agenda;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('agenda')->where('id_agenda',$id_agendanya[$i])->update([
                        'id_user'       => Session()->get('id_user'),
                        'status_agenda' => 'Draft'
                    ]);
            }
            return redirect($pengalihan)->with(['sukses' => 'Data telah diubah menjadi Draft']);
        // PROSES SETTING PUBLISH
        }elseif(isset($_POST['publish'])) {
            $id_agendanya       = $request->id_agenda;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('agenda')->where('id_agenda',$id_agendanya[$i])->update([
                        'id_user'       => Session()->get('id_user'),
                        'status_agenda' => 'Publish'
                    ]);
            }
            return redirect($pengalihan)->with(['sukses' => 'Data telah diubah menjadi Publish']);
        }elseif(isset($_POST['update'])) {
            $id_agendanya       = $request->id_agenda;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('agenda')->where('id_agenda',$id_agendanya[$i])->update([
                        'id_user'        => Session()->get('id_user'),
                        'id_kategori_agenda'    => $request->id_kategori_agenda
                    ]);
            }
            return redirect($pengalihan)->with(['sukses' => 'Data kategori_agenda telah diubah']);
        }
    }

    //Status
    public function status_agenda($status_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
        $myagenda    = new Agenda_model();
        $agenda      = $myagenda->status_agenda($status_agenda);
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Status Agenda: '.$status_agenda,
                        'agenda'            => $agenda,
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/agenda/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    //Status
    public function jenis_agenda($jenis_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
        $myagenda    = new Agenda_model();
        $agenda      = $myagenda->jenis_agenda($jenis_agenda);
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Jenis Agenda: '.$jenis_agenda,
                        'agenda'            => $agenda,
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/agenda/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    //Status
    public function author($id_user)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
        $myagenda           = new Agenda_model();
        $agenda             = $myagenda->author($id_user);
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();
        $author    = DB::table('users')->where('id_user',$id_user)->orderBy('id_user','ASC')->first();

        $data = array(  'title'             => 'Data Agenda dengan Penulis: '.$author->nama,
                        'agenda'            => $agenda,
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/agenda/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    //Kategori
    public function kategori_agenda($id_kategori_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
        $myagenda    = new Agenda_model();
        $agenda      = $myagenda->all_kategori_agenda($id_kategori_agenda);
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();
        $detail      = DB::table('kategori_agenda')->where('id_kategori_agenda',$id_kategori_agenda)->first();
        $data = array(  'title'             => 'Kategori: '.$detail->nama_kategori_agenda,
                        'agenda'            => $agenda,
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/agenda/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Tambah
    public function tambah()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Tambah Agenda',
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/agenda/tambah'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // edit
    public function edit($id_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myagenda           = new Agenda_model();
        $agenda             = $myagenda->detail($id_agenda);
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Edit Agenda',
                        'agenda'            => $agenda,
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/agenda/edit'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'judul_agenda'  => 'required|unique:agenda',
                            'isi'           => 'required',
                            'gambar'        => 'file|image|mimes:jpeg,png,jpg|max:8024',
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = './assets/upload/image/thumbs/';
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = './assets/upload/image/';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_agenda = Str::slug($request->judul_agenda, '-');
            DB::table('agenda')->insert([
                'id_kategori_agenda'       => $request->id_kategori_agenda,
                'id_user'           => Session()->get('id_user'),
                'slug_agenda'       => $slug_agenda,
                'judul_agenda'      => $request->judul_agenda,
                'isi'               => $request->isi,
                'jenis_agenda'      => $request->jenis_agenda,
                'status_agenda'     => $request->status_agenda,
                'icon'              => $request->icon,
                'tanggal_mulai'     => tanggal('tanggal_input',$request->tanggal_mulai),
                'tanggal_selesai'   => tanggal('tanggal_input',$request->tanggal_selesai),
                'jam_mulai'         => $request->jam_mulai,
                'jam_selesai'       => $request->jam_selesai,
                'keywords'          => $request->keywords,
                'tempat'            => $request->tempat,
                'google_map'        => $request->google_map,
                'tanggal_publish'   => date('Y-m-d',strtotime($request->tanggal_publish)).' '.$request->jam_publish,
                'tanggal_post'      => date('Y-m-d H:i:s')
            ]);
        }else{
            $slug_agenda = Str::slug($request->judul_agenda, '-');
            DB::table('agenda')->insert([
                'id_kategori_agenda'       => $request->id_kategori_agenda,
                'id_user'           => Session()->get('id_user'),
                'slug_agenda'       => $slug_agenda,
                'judul_agenda'      => $request->judul_agenda,
                'isi'               => $request->isi,
                'jenis_agenda'      => $request->jenis_agenda,
                'status_agenda'     => $request->status_agenda,
                'icon'              => $request->icon,
                'tanggal_mulai'     => tanggal('tanggal_input',$request->tanggal_mulai),
                'tanggal_selesai'   => tanggal('tanggal_input',$request->tanggal_selesai),
                'jam_mulai'         => $request->jam_mulai,
                'jam_selesai'       => $request->jam_selesai,
                'keywords'          => $request->keywords,
                'tempat'            => $request->tempat,
                'google_map'        => $request->google_map,
                'tanggal_publish'   => date('Y-m-d',strtotime($request->tanggal_publish)).' '.$request->jam_publish,
                'tanggal_post'      => date('Y-m-d H:i:s')
            ]);
        }
        return redirect('admin/agenda')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'judul_agenda'   => 'required',
                            'isi'           => 'required',
                            'gambar'        => 'file|image|mimes:jpeg,png,jpg|max:8024',
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = './assets/upload/image/thumbs/';
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = './assets/upload/image/';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_agenda = Str::slug($request->judul_agenda, '-');
            DB::table('agenda')->where('id_agenda',$request->id_agenda)->update([
                'id_kategori_agenda'       => $request->id_kategori_agenda,
                'id_user'           => Session()->get('id_user'),
                'slug_agenda'       => $slug_agenda,
                'judul_agenda'      => $request->judul_agenda,
                'isi'               => $request->isi,
                'jenis_agenda'      => $request->jenis_agenda,
                'status_agenda'     => $request->status_agenda,
                'icon'              => $request->icon,
                'tanggal_mulai'     => tanggal('tanggal_input',$request->tanggal_mulai),
                'tanggal_selesai'   => tanggal('tanggal_input',$request->tanggal_selesai),
                'jam_mulai'         => $request->jam_mulai,
                'jam_selesai'       => $request->jam_selesai,
                'keywords'          => $request->keywords,
                'tempat'            => $request->tempat,
                'google_map'        => $request->google_map,
                'tanggal_publish'   => date('Y-m-d',strtotime($request->tanggal_publish)).' '.$request->jam_publish
            ]);
        }else{
            $slug_agenda = Str::slug($request->judul_agenda, '-');
            DB::table('agenda')->where('id_agenda',$request->id_agenda)->update([
                'id_kategori_agenda'       => $request->id_kategori_agenda,
                'id_user'           => Session()->get('id_user'),
                'slug_agenda'       => $slug_agenda,
                'judul_agenda'      => $request->judul_agenda,
                'isi'               => $request->isi,
                'jenis_agenda'      => $request->jenis_agenda,
                'status_agenda'     => $request->status_agenda,
                'icon'              => $request->icon,
                'tanggal_mulai'     => tanggal('tanggal_input',$request->tanggal_mulai),
                'tanggal_selesai'   => tanggal('tanggal_input',$request->tanggal_selesai),
                'jam_mulai'         => $request->jam_mulai,
                'jam_selesai'       => $request->jam_selesai,
                'keywords'          => $request->keywords,
                'tempat'            => $request->tempat,
                'google_map'        => $request->google_map,
                'tanggal_publish'   => date('Y-m-d',strtotime($request->tanggal_publish)).' '.$request->jam_publish
                ]);
        }
        return redirect('admin/agenda')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('agenda')->where('id_agenda',$id_agenda)->delete();
        return redirect('admin/agenda')->with(['sukses' => 'Data telah dihapus']);
    }
}
