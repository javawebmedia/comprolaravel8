<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Rekening_model;
use App\Models\Berita_model;
use App\Models\Staff_model;
use App\Models\Download_model;
use PDF;

class Home extends Controller
{
    // Homepage
    public function index()
    {
    	$site_config   = DB::table('konfigurasi')->first();
        $video          = DB::table('video')->orderBy('id_video','DESC')->first();
    	$slider         = DB::table('galeri')->where('jenis_galeri','Homepage')->limit(5)->orderBy('id_galeri', 'DESC')->get();
        $layanan        = DB::table('berita')->where(array('jenis_berita'=>'Layanan','status_berita'=>'Publish'))->limit(3)->orderBy('urutan', 'ASC')->get();
        $news           = new Berita_model();
        $berita         = $news->home();

        $data = array(  'title'         => $site_config->namaweb.' - '.$site_config->tagline,
                        'deskripsi'     => $site_config->namaweb.' - '.$site_config->tagline,
                        'keywords'      => $site_config->namaweb.' - '.$site_config->tagline,
                        'slider'        => $slider,
                        'site_config'   => $site_config,
                        'berita'        => $berita,
                        'beritas'       => $berita,
                        'layanan'       => $layanan,
                        'video'         => $video,
                        'content'       => 'home/index'
                    );
        return view('layout/wrapper',$data);
    }

    // Homepage
    public function javawebmedia()
    {
        $site_config   = DB::table('konfigurasi')->first();
        $news   = new Berita_model();
        $berita = $news->home();
        // Staff
        $kategori_staff  = DB::table('kategori_staff')->orderBy('urutan','ASC')->get();
        $layanan = DB::table('berita')->where(array('jenis_berita' => 'Layanan','status_berita' => 'Publish'))->orderBy('urutan', 'ASC')->get();

        $data = array(  'title'     => 'Tentang '.$site_config->namaweb,
                        'deskripsi' => 'Tentang '.$site_config->namaweb,
                        'keywords'  => 'Tentang '.$site_config->namaweb,
                        'site_config'      => $site_config,
                        'berita'    => $berita,
                        'layanan'   => $layanan,
                        'kategori_staff'     => $kategori_staff,
                        'content'   => 'home/aws'
                    );
        return view('layout/wrapper',$data);
    }

    // kontak
    public function kontak()
    {
        $site_config   = DB::table('konfigurasi')->first();

        $data = array(  'title'     => 'Menghubungi '.$site_config->namaweb,
                        'deskripsi' => 'Kontak '.$site_config->namaweb,
                        'keywords'  => 'Kontak '.$site_config->namaweb,
                        'site_config'      => $site_config,
                        'content'   => 'home/kontak'
                    );
        return view('layout/wrapper',$data);
    }

}
