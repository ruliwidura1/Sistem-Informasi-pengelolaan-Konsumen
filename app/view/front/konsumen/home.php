<style>
.container{

  width:100%;
}
.tentang{
  font-style: italic;
}
.waktu{
  font-style: italic;
}
.tempat{
  font-style: italic;
}
.gallery{
  font-style: italic;
}
.peta-lokasi{
  font-style: italic;
}
.md{
  padding-left: 50px;
  padding-right: 50px;
  padding-bottom:25px;
  padding-top:50px;
}
.wi{
  padding-left: 170px;
  padding-right: 50px;
  padding-bottom:25px;
  padding-top:50px;
}
.dn{
  padding-left: 200px;
  padding-right: 50px;
  padding-bottom:25px;
  padding-top:50px;
}
</style>
<div class="row">
  <div class="col-md-12">
    <?php //$this->debug($barang);?>
    <a href="<?=base_url()?>konsumen/tambah"class="btn btn-info">Tambah Barang</a>
    <table class="table table-bordered">
<thead>
  <tr>
    <th>Id</th>
    <th>nama</th>
    <th>no Hp</th>
    <th>Alamat</th>
    <td>Action</td>
  </tr>
</thead>
<tbody>
  <?php foreach($konsumen as $k){ ?>
  <tr>
    <td><?=$k->id?></td>
    <td><?=$k->nama?></td>
    <td><?=$k->no_hp?></td>
    <td><?=$k->alamat?></td>

    <td>
      <a href="<?=base_url()?>konsumen/edit/<?=$k->id?>" class="btn btn-info">Edit</a>
      <a href="<?=base_url()?>konsumen/hapus/<?=$k->id?>" class="btn btn-danger">Hapus</a>
    </td>
  </tr>
  <?php } ?>
</tbody>
</table>
  </div>
</div>
