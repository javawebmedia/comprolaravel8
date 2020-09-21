<?php
use Illuminate\Support\Facades\DB;

function website($perintah='')
{
	// Load model
	$site = DB::table('konfigurasi')->first();
	// User
	if($perintah=='lengkap') {
		$hasil = $site->namaweb.' | '.$site->tagline;
	}elseif($perintah=="tagline") {
		$hasil = $site->tagline;
	}elseif($perintah=="logo") {
		$hasil = $site->logo;
	}elseif($perintah=="icon") {
		$hasil = $site->icon;
	}else{
		$hasil = $site->namaweb;
	}
	// Output
	return $hasil;
}
