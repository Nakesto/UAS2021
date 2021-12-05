<?php 
		$i = 1;
		foreach ($facility as $row) {
			$base_url = base_url();
			$detail = $base_url;
			$id = $row['id_kamar'];
            ?>
                <tr> 
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?= $row['nama_kamar']; ?></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <?= "Rp." . ' '. $row['harga_kamar'];?>
                    </td>
                    <td>
                    <img  src="<?= base_url('images/fasilitas/').$row['gambar_kamar']; ?>" alt="" width=400px  height="200px">
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal<?= $id; ?>">Edit Fasilitas</a>
                          <a class="dropdown-item" href="<?= base_url("CRUD_facility/delete/".$id);?>">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
             
			<?php $i++; } 
		?>