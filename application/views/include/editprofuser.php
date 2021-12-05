 <!-- Modal -->

<div class="modal fade" id="exampleModal<?= $this->session->userdata('id_user') ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php $action=base_url('Editprofile/edit');
                    echo form_open_multipart($action);
            ?>
            <input type="hidden" name="role" value="<?= $this->session->userdata('role') ?>">
          <input type="hidden" name="id" value="<<?= $this->session->userdata('id_user') ?>"> 
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Name Depan</label>
                <input class="form-control" name="nama-depan" type="text" value="<?= $this->session->userdata('nama_depan') ?>" id="example-text-input"> 
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama Belakang</label>
                <input class="form-control" name="nama-belakang" type="text" value="<?= $this->session->userdata('nama_belakang') ?>" id="example-text-input">
            </div>
            <div class="form-group">
                <label for="example-search-input" class="form-control-label">Email</label>
                <input class="form-control" name="email" type="email" value="<?= $this->session->userdata('email') ?>" id="example-email-input">
            </div>
            <div class="form-group">
                <input type="file" name="userfile" id="userfile">
                <img src="<?= base_url("images/profile/"). $this->session->userdata('gambar') ?>" alt="" width="150px" height="75px">
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
