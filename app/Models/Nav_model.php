<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nav_model extends Model
{

   
    // Main page
    public function nav_profil()
    {
    	$query = DB::table('berita')
            ->join('kategori', 'kategori.id_kategori', '=', 'berita.id_kategori','LEFT')
            ->select('berita.*', 'kategori.slug_kategori', 'kategori.nama_kategori')
            ->where(array(	'berita.status_berita'	=> 'Publish',
                            'berita.jenis_berita'  => 'Profil'))
            ->orderBy('berita.id_berita','DESC')
            ->get();
        return $query;
    }

    // Main page
    public function nav_berita()
    {
        $query = DB::table('kategori')
            ->orderBy('kategori.urutan','DESC')
            ->get();
        return $query;
    }

    // Main page
    public function nav_materi()
    {
        $query = DB::table('kategori_download')
            ->orderBy('kategori_download.urutan','ASC')
            ->get();
        return $query;
    }

    // Main page
    public function nav_layanan()
    {
        $query = DB::table('berita')
            ->join('kategori', 'kategori.id_kategori', '=', 'berita.id_kategori','LEFT')
            ->select('berita.*', 'kategori.slug_kategori', 'kategori.nama_kategori')
            ->where(array(  'berita.status_berita'  => 'Publish',
                            'berita.jenis_berita'  => 'Layanan'))
            ->orderBy('berita.urutan','ASC')
            ->get();
        return $query;
    }

    // Main page
    public function nav_terjadi()
    {
        $query = DB::table('berita')
            ->join('kategori', 'kategori.id_kategori', '=', 'berita.id_kategori','LEFT')
            ->select('berita.*', 'kategori.slug_kategori', 'kategori.nama_kategori')
            ->where(array(  'berita.status_berita'  => 'Publish',
                            'berita.jenis_berita'  => 'Terjadi'))
            ->orderBy('berita.urutan','ASC')
            ->get();
        return $query;
    }

    // Main page
    public function nav_jenis($jenis_berita)
    {
        $query = DB::table('berita')
            ->join('kategori', 'kategori.id_kategori', '=', 'berita.id_kategori','LEFT')
            ->select('berita.*', 'kategori.slug_kategori', 'kategori.nama_kategori')
            ->where(array(  'berita.status_berita'  => 'Publish',
                            'berita.jenis_berita'  => $jenis_berita))
            ->orderBy('berita.urutan','ASC')
            ->get();
        return $query;
    }
}
