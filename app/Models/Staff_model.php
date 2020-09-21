<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Staff_model extends Model
{

	protected $table 		= "staff";
	protected $primaryKey 	= 'id_staff';

    // listing
    public function semua()
    {
        $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->orderBy('staff.id_staff','DESC')
            ->get();
        return $query;
    }

    // listing
    public function cari($keywords)
    {
        $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where('staff.nama_staff', 'LIKE', "%{$keywords}%") 
            ->orWhere('staff.isi', 'LIKE', "%{$keywords}%") 
            ->orderBy('id_staff','DESC')
            ->get();
        return $query;
    }

    // listing
    public function listing()
    {
    	$query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where('status_staff','Publish')
            ->orderBy('id_staff','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function kategori_staff($id_kategori_staff)
    {
        $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where(array(  'staff.status_staff'         => 'Publish',
                            'staff.id_kategori_staff'    => $id_kategori_staff))
            ->orderBy('id_staff','DESC')
            ->get();
        return $query;
    }

    // Kategori
    public function kategori()
    {
         $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where(array(  'staff.status_staff'         => 'Publish'))
            ->groupBy('staff.id_kategori_staff')
            ->orderBy('kategori_staff.urutan','ASC')
            ->get();
        return $query;
    }

    // kategori
    public function all_kategori_staff($id_kategori_staff)
    {
        $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where(array(  'staff.id_kategori_staff'    => $id_kategori_staff))
            ->orderBy('id_staff','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function status_staff($status_staff)
    {
        $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where(array(  'staff.status_staff'         => $status_staff))
            ->orderBy('id_staff','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function detail_kategori_staff($id_kategori_staff)
    {
        $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where(array(  'staff.status_staff'         => 'Publish',
                            'staff.id_kategori_staff'    => $id_kategori_staff))
            ->orderBy('id_staff','DESC')
            ->first();
        return $query;
    }

    // kategori
    public function detail_slug_kategori_staff($slug_kategori_staff)
    {
        $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where(array(  'staff.status_staff'                  => 'Publish',
                            'kategori_staff.slug_kategori_staff'  => $slug_kategori_staff))
            ->orderBy('id_staff','DESC')
            ->first();
        return $query;
    }


    // kategori
    public function slug_kategori_staff($slug_kategori_staff)
    {
        $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where(array(  'staff.status_staff'                  => 'Publish',
                            'kategori_staff.slug_kategori_staff'  => $slug_kategori_staff))
            ->orderBy('id_staff','DESC')
            ->get();
        return $query;
    }

    // detail
    public function read($slug_staff)
    {
        $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where('staff.slug_staff',$slug_staff)
            ->orderBy('id_staff','DESC')
            ->first();
        return $query;
    }

     // detail
    public function detail($id_staff)
    {
        $query = DB::table('staff')
            ->join('kategori_staff', 'kategori_staff.id_kategori_staff', '=', 'staff.id_kategori_staff','LEFT')
            ->select('staff.*', 'kategori_staff.slug_kategori_staff', 'kategori_staff.nama_kategori_staff')
            ->where('staff.id_staff',$id_staff)
            ->orderBy('id_staff','DESC')
            ->first();
        return $query;
    }

    // Gambar
    public function gambar($id_staff)
    {
        $query = DB::table('gambar_staff')
            ->select('*')
            ->where('gambar_staff.id_staff',$id_staff)
            ->orderBy('id_staff','DESC')
            ->get();
        return $query;
    }
}
