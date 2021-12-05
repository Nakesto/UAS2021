 <!-- Modal -->
<?php 
		$i = 1;
		foreach ($user as $row) {
			$base_url = base_url();
			$detail = $base_url;
?>
<div class="modal fade" id="exampleModal<?= $row['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php $action=base_url('CRUD_User/edit');
                    echo form_open_multipart($action);
            ?>
          <input type="hidden" name="id" value="<?= $row['id_user']; ?>"> 
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Name Depan</label>
                <input class="form-control" name="nama-depan" type="text" value="<?= $row['nama_depan']; ?>" id="example-text-input"> 
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama Belakang</label>
                <input class="form-control" name="nama-belakang" type="text" value="<?= $row['nama_belakang']; ?>" id="example-text-input">
            </div>
            <div class="form-group">
                <label for="example-search-input" class="form-control-label">Email</label>
                <input class="form-control" name="email" type="email" value="<?= $row['email']; ?>" id="example-email-input">
            </div>
            <div class="form-group">
                <input type="file" name="userfile" id="userfile" class="mb-3">
                <img src="<?= base_url("images/profile/").$row['gambar']; ?>" alt="" width="150px" height="75px">
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