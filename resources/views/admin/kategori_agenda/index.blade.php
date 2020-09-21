<p>
@include('admin/kategori_agenda/tambah')
</p>

<table class="table table-bordered" id="example1">
<thead>
<tr>
    <th width="5%">NO</th>
    <th width="25%">NAMA KATEGORI</th>
    <th width="25%">KETERANGAN</th>
    <th width="15%">SLUG</th>
    <th width="10%">NO URUT</th>
    <th></th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($kategori_agenda as $kategori_agenda) { ?>

<tr>
    <td class="text-center"><?php echo $i ?></td>
    <td><?php echo $kategori_agenda->nama_kategori_agenda ?></td>
    <td><?php echo $kategori_agenda->keterangan ?></td>
    <td><?php echo $kategori_agenda->slug_kategori_agenda ?></td>
    <td><?php echo $kategori_agenda->urutan ?></td>
    <td>
      <div class="btn-group">
      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#Edit<?php echo $kategori_agenda->id_kategori_agenda ?>">
    <i class="fa fa-edit"></i> Edit
</button>
      <a href="{{ asset('admin/kategori_agenda/delete/'.$kategori_agenda->id_kategori_agenda) }}" class="btn btn-danger btn-sm delete-link"><i class="fas fa-trash-alt"></i> Hapus</a>
      </div>
      @include('admin/kategori_agenda/edit')
    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>