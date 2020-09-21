<?php 
if(Session()->get('username')=="") {
	$last_page = url()->full();
    return redirect('login?redirect='.$last_page)->with(['warning' => 'Mohon maaf, Anda belum login']);
}
?>
@include('admin/layout/head')
@include('admin/layout/header')
@include('admin/layout/menu')
@include($content)
@include('admin/layout/footer')