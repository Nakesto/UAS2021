 <!-- Modal -->
 <?php 
		$i = 1;
		foreach ($facility as $row) {
			$base_url = base_url();
			$detail = $base_url;
            ?>
 <div class="modal fade" id="exampleModal<?= $row['id_kamar']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <?php $action=base_url('CRUD_facility/edit');
                echo form_open_multipart($action);
				?>
      <input type="hidden" name="id" value="<?= $row['id_kamar']; ?>"> 
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Nama Kamar</label>
        <input class="form-control" name="nama-kamar" type="text" value="<?= $row['nama_kamar']; ?>" id="example-text-input"> 
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Harga kamar</label>
        <input class="form-control" name="harga" type="text" value="<?= $row['harga_kamar']; ?>" id="example-text-input">
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi</label>
    <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" value="<?= $row['deskripsi']; ?>"><?= $row['deskripsi']; ?></textarea>
    </div>
    <div class="form-group">
        <input type="file" name="userfile" id="userfile">
        <img src="<?= base_url("images/fasilitas/").$row['gambar_kamar']; ?>" alt="" width="150px" height="75px" class="mt-3">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php $i++; } 
		?>