<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php $action=base_url('CRUD_facility/tambah');
                echo form_open_multipart($action);
				?>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Nama Kamar</label>
        <input class="form-control" name="nama-kamar" type="text"  id="example-text-input"> 
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Harga kamar</label>
        <input class="form-control" name="harga" type="text"  id="example-text-input">
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi</label>
    <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <input type="file" name="userfile" id="userfile">
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