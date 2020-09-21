<?php
function tanggal($perintah,$tanggal)
{
	if($perintah=="hari") {
		$bulan 	= date('m',strtotime($tanggal));
		$hari 	= date('l',strtotime($tanggal));

		if($hari=='Sunday') {
			$nama_hari = 'Minggu';
		}elseif($hari=='Monday') {
			$nama_hari = 'Senin';
		}elseif($hari=='Tuesday') {
			$nama_hari = 'Selasa';
		}elseif($hari=='Wednesday') {
			$nama_hari = 'Rabu';
		}elseif($hari=='Thursday') {
			$nama_hari = 'Kamis';
		}elseif($hari=='Friday') {
			$nama_hari = 'Jumat';
		}elseif($hari=='Saturday') {
			$nama_hari = 'Sabtu';
		}

		if($bulan=='01') {
			$nama_bulan = 'Januari';
		}elseif($bulan=='02') {
			$nama_bulan = 'Februari';
		}elseif($bulan=='03') {
			$nama_bulan = 'Maret';
		}elseif($bulan=='04') {
			$nama_bulan = 'April';
		}elseif($bulan=='05') {
			$nama_bulan = 'Mei';
		}elseif($bulan=='06') {
			$nama_bulan = 'Juni';
		}elseif($bulan=='07') {
			$nama_bulan = 'Juli';
		}elseif($bulan=='08') {
			$nama_bulan = 'Agustus';
		}elseif($bulan=='09') {
			$nama_bulan = 'September';
		}elseif($bulan=='10') {
			$nama_bulan = 'Oktober';
		}elseif($bulan=='11') {
			$nama_bulan = 'November';
		}elseif($bulan=='12') {
			$nama_bulan = 'Desember';
		}

		$hasil = $nama_hari.', '.date('d',strtotime($tanggal)).' '.$nama_bulan.' '.date('Y',strtotime($tanggal));
		// Output
		return $hasil;
	}elseif($perintah=="tanggal_id") {
		if($tanggal=='' || $tanggal==NULL || $tanggal=='0000-00-00' || $tanggal=='1970-01-01') {
			return FALSE;
		}else{
			$hasil = date('d-m-Y',strtotime($tanggal));
			return $hasil;
		}
	}elseif($perintah=="tanggal_bulan") {
		if($tanggal=='' || $tanggal==NULL || $tanggal=='0000-00-00' || $tanggal=='1970-01-01') {
			return FALSE;
		}else{
			$hasil = date('Y-m-d',strtotime($tanggal));
			return $hasil;
		}
	}elseif($perintah=="tanggal_input") {
		if($tanggal=='' || $tanggal==NULL || $tanggal=='0000-00-00' || $tanggal == '1970-01-01') {
			$hasil = NULL;
			return $hasil;
		}else{
			
			$hasil = date('Y-m-d',strtotime($tanggal));
			return $hasil;
		}
	}elseif($perintah=="tanggal_bulan") {
		if($tanggal=='' || $tanggal==NULL || $tanggal=='0000-00-00' || $tanggal == '1970-01-01') {
			$hasil = '';
			return $hasil;
		}else{
			$bulan 	= date('m',strtotime($tanggal));
			$hari 	= date('l',strtotime($tanggal));
			if($hari=='Sunday') {
				$nama_hari = 'Minggu';
			}elseif($hari=='Monday') {
				$nama_hari = 'Senin';
			}elseif($hari=='Tuesday') {
				$nama_hari = 'Selasa';
			}elseif($hari=='Wednesday') {
				$nama_hari = 'Rabu';
			}elseif($hari=='Thursday') {
				$nama_hari = 'Kamis';
			}elseif($hari=='Friday') {
				$nama_hari = 'Jumat';
			}elseif($hari=='Saturday') {
				$nama_hari = 'Sabtu';
			}
			if($bulan=='01') {
				$nama_bulan = 'Januari';
			}elseif($bulan=='02') {
				$nama_bulan = 'Februari';
			}elseif($bulan=='03') {
				$nama_bulan = 'Maret';
			}elseif($bulan=='04') {
				$nama_bulan = 'April';
			}elseif($bulan=='05') {
				$nama_bulan = 'Mei';
			}elseif($bulan=='06') {
				$nama_bulan = 'Juni';
			}elseif($bulan=='07') {
				$nama_bulan = 'Juli';
			}elseif($bulan=='08') {
				$nama_bulan = 'Agustus';
			}elseif($bulan=='09') {
				$nama_bulan = 'September';
			}elseif($bulan=='10') {
				$nama_bulan = 'Oktober';
			}elseif($bulan=='11') {
				$nama_bulan = 'November';
			}elseif($bulan=='12') {
				$nama_bulan = 'Desember';
			}
			$hasil = date('d',strtotime($tanggal)).' '.$nama_bulan.' '.date('Y',strtotime($tanggal));
			return $hasil;
		}
	}
	
}
