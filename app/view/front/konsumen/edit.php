<div class="row">
  <div class="col-md-12">
    <form method="post" action="<?=base_url()?>konsumen/edit_proses/<?=$konsumen[0]->id?>">
    <label for="inama">Nama</label>
    <input id="inama" name="nama" class="form-control" value="<?=$konsumen[0]->nama?>" required />
    <label for="ino_hp">No Hp</label>
    <input id="ino_hp" name="no_hp" class="form-control" value="<?=$konsumen[0]->no_hp?>" required />
    <label for="ialamat">Alamat</label>
    <input id="ialamat" name="alamat" class="form-control" value="<?=$konsumen[0]->alamat?>" required />
    <br />
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
  </div>
</div>
