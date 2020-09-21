<?php $site   = DB::table('konfigurasi')->first(); ?>
<div class="row">

  <div class="col-md-6">
    <form action="{{ asset('admin/agenda/cari') }}" method="get" accept-charset="utf-8">
      {{ csrf_field() }}
    <div class="input-group">                  
      <input type="text" name="keywords" class="form-control" placeholder="Ketik kata kunci..." value="<?php if(isset($_GET['keywords'])) { echo strip_tags($_GET['keywords']); } ?>" required>
      <span class="input-group-btn btn-flat">
        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Cari</button>
        <?php if(Request::segment(3)=="jenis_agenda") { ?>
          <a href="{{ asset('admin/agenda/tambah?jenis_agenda='.Request::segment(4)) }}" class="btn btn-success">
          <i class="fa fa-plus"></i> Tambah Baru</a>
        <?php }else{ ?>
          <a href="{{ asset('admin/agenda/tambah') }}" class="btn btn-success">
          <i class="fa fa-plus"></i> Tambah Baru</a>
        <?php } ?>
      </span>
    </div>
    </form>
  </div>
  <div class="col-md-6 text-left">
   {{ $agenda->links() }}
  </div>
</div>

<div class="clearfix"><hr></div>

<form action="{{ asset('admin/agenda/proses') }}" method="post" accept-charset="utf-8">
<input type="hidden" name="pengalihan" value="<?php echo url()->full(); ?>">
<?php $site   = DB::table('konfigurasi')->first(); ?>
{{ csrf_field() }}
<div class="row">
  <div class="col-md-12">

    <div class="input-group">
      <button class="btn btn-default btn-sm" type="submit" name="hapus" onClick="check();" >
          <i class="fa fa-trash"></i>
        </button> 
      <select name="id_kategori_agenda" class="form-control form-control-sm">
        <?php 
        $site           = DB::table('kategori_agenda')->get();
        foreach($kategori_agenda as $kategori_agenda) { ?>
          <option value="<?php echo $kategori_agenda->id_kategori_agenda ?>"><?php echo $kategori_agenda->nama_kategori_agenda ?></option>
        <?php } ?>
      </select>
      <span class="input-group-btn" >
        <button type="submit" class="btn btn-info btn-sm btn-flat" name="update">Update</button>
        
      

        <button class="btn btn-warning btn-sm" type="submit" name="draft" onClick="check();" >
          <i class="fa fa-times"></i> Draft
        </button>

        <button class="btn btn-primary btn-sm" type="submit" name="publish" onClick="check();" >
          <i class="fa fa-check"></i> Publish
        </button>
      </span>
    </div>
  </div>
    </div>
<div class="table-responsive mailbox-messages">
<table class="display table table-bordered" cellspacing="0" width="100%">
<thead>
    <tr class="bg-dark">
      <th width="5%">
            <div class="mailbox-controls">
                <!-- Check all button -->
               <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
            </div>
      </th>
      <th width="5%">GAMBAR</th>
      <th width="30%">JUDUL</th>
      <th width="25%">TEMPAT &amp; TANGGAL</th>
      <th width="15%">KATEGORI - JENIS</th>
      <th width="10%">STATUS</th>
      <th width="10%">AUTHOR</th>
      <th width="15%">ACTION</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($agenda as $agenda) { ?>

<tr>
    <td class="text-center">
      <div class="icheck-primary">
        <input type="checkbox" name="id_agenda[]" value="{{ $agenda->id_agenda }}" id="check<?php echo $i ?>">
        <label for="check<?php echo $i ?>"></label>
      </div>
    </td>
    <td class="text-center">
    <?php if($agenda->gambar!="") { ?>
      <img src="{{ asset('assets/upload/image/thumbs/'.$agenda->gambar) }}" class="img-thumbnail img-size-50 mr-2" >
      <?php }else{ ?>
      <img src="{{ asset('assets/upload/image/thumbs/'.website('icon')) }}" class="img-thumbnail img-size-50 mr-2" >
      <?php } ?>
    </td>
    <td>
    <a href="{{ asset('admin/agenda/edit/'.$agenda->id_agenda) }}">
    <?php echo $agenda->judul_agenda ?> <sup><i class="fa fa-pencil"></i></sup>
    </a>
      <small>
        <br>Posted: <?php echo date('d M Y H:i: s',strtotime($agenda->tanggal_post)) ?>
        <br>Published: <?php echo date('d M Y H:i: s',strtotime($agenda->tanggal_publish)) ?>
        <?php if($agenda->jenis_agenda=="Promo") { ?>
          <br>Promo: <span class="text-danger"><strong><?php echo date('d M Y',strtotime($agenda->tanggal_mulai)) ?> s/d <?php echo date('d M Y ',strtotime($agenda->tanggal_selesai)) ?></strong></span>
        <?php } ?>
        <br>Urutan: <?php echo $agenda->urutan ?>
        <br>Icon: <i class="<?php echo $agenda->icon ?>"></i> <?php echo $agenda->icon ?>
        <br>Tgl posting: <?php echo date('d-m-Y',strtotime($agenda->tanggal_publish)) ?>
      </small>
    </td>
    <td>
      <small>
        Tempat:  <?php echo $agenda->tempat ?>
        <br>Mulai: <?php echo tanggal('tanggal_id',$agenda->tanggal_mulai) ?> jam <?php echo $agenda->jam_mulai ?>
        <br>Selesai: <?php echo tanggal('tanggal_id',$agenda->tanggal_selesai) ?> jam <?php echo $agenda->jam_selesai ?>
        
      </small>
    </td>
    <td>
    <a href="{{ asset('admin/agenda/kategori_agenda/'.$agenda->id_kategori_agenda) }}">
    <?php echo $agenda->nama_kategori_agenda ?><sup><i class="fa fa-link"></i></sup>
    </a>
    <br>
    Jenis: <a href="{{ asset('admin/agenda/jenis_agenda/'.$agenda->jenis_agenda) }}">
    <?php echo $agenda->jenis_agenda ?><sup><i class="fa fa-link"></i></sup>
    </a></td>
    <td><a href="{{ asset('admin/agenda/status_agenda/'.$agenda->status_agenda) }}">
      <small class="badge <?php if($agenda->status_agenda=="Publish") { echo 'badge-success'; }else{ echo 'badge-warning'; } ?> btn-block">
        <i class="fa <?php if($agenda->status_agenda=="Publish") { echo 'fa-check-circle'; }else{ echo 'fa-times'; } ?>"></i> <?php echo $agenda->status_agenda ?></small>
    </a></td>
    <td>
    <a href="{{ asset('admin/agenda/author/'.$agenda->id_user) }}">
    <?php echo $agenda->nama ?><sup><i class="fa fa-link"></i></sup>
    </a></td>
    <td>
      <div class="btn-group">
        <a href="{{ asset('agenda/read/'.$agenda->slug_agenda) }}" 
        class="btn btn-success btn-sm" target="_blank"><i class="fa fa-eye"></i></a>

        <a href="{{ asset('admin/agenda/edit/'.$agenda->id_agenda) }}" 
        class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

        <a href="{{ asset('admin/agenda/delete/'.$agenda->id_agenda) }}" class="btn btn-danger btn-sm delete-link"><i class="fas fa-trash-alt"></i></a>
      </div>
    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
</div>
</form>