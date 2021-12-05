<?php 
		$i = 1;
		foreach ($user as $row) {
			$base_url = base_url();
			$detail = $base_url;
			$id = $row['id_user'];
            $cek = $row['email'];
            if (str_contains($cek, '@admin')) {
                $role = 'Admin';
            } else if (str_contains($cek, '@management')) {
                $role = 'Management';
            } else {
                $role = 'User';
                }
            ?>
                <tr> 
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?= $row['nama_depan'] .' '.  $row['nama_belakang']; ?></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <?= $row['email'];?>
                    </td>
                    <td class="budget">
                    <?= $role;?>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="<?= $row['nama_depan'] .' '.  $row['nama_belakang']; ?>">
                        <span class="avatar avatar-sm rounded-circle">   
                        <img alt="Image placeholder" src="<?= base_url("images/profile/".$row['gambar']) ;?>">
                        </span> 
                        </a>
                      </div>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $id; ?>">Edit User</a>
                          <a class="dropdown-item" href="<?= base_url("CRUD_user/delete/".$id);?>">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
			<?php $i++; } 
		?>
    