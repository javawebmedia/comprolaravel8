<p>
@include('admin/heading/tambah')
</p>

<table class="table table-bordered" id="example1">
<thead>
<tr>
    <th width="5%">NO</th>
    <th width="10%">GAMBAR</th>
    <th width="30%">JUDUL</th>
    <th width="30%">KETERANGAN</th>
    <th width="10%">Halaman</th>
    <th></th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($heading as $heading) { ?>

<tr>
    <td class="text-center"><?php echo $i ?></td>
    <td class="text-center">
      <?php if($heading->gambar=="") { echo '-';}else{ ?>
        <img src="{{ asset('assets/upload/image/thumbs/'.$heading->gambar) }}" class="img img-fluid img-thumbnail" style="width: 100px; height: auto;">
      <?php } ?>
    </td>
    <td><?php echo $heading->judul_heading ?></td>
    <td><small><?php echo $heading->keterangan ?></small></td>
    <td><?php echo $heading->halaman ?></td>
    <td>
      <div class="btn-group">
      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#Edit<?php echo $heading->id_heading ?>">
    <i class="fa fa-edit"></i>
</button>
      <a href="{{ asset('admin/heading/delete/'.$heading->id_heading) }}" class="btn btn-danger btn-sm delete-link"><i class="fas fa-trash-alt"></i></a>
      </div>
      @include('admin/heading/edit')
    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>