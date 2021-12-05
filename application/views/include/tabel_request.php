<?php 
		$i = 1;
		foreach ($request as $row) {
			$base_url = base_url();
			$detail = $base_url;
			$idbooking = $row['book'];
            $cek = $row['status'];
            if($cek == 0){
                $status = 'Pending';
            } else if ($cek == 1){
                $status = 'Approved';
            } else {
                $status = "Rejected";
            }
            ?>
                <tr> 
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?=$row['Fname'] . ' ' . $row['Lname'] ?></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <?= $row['nok'];?>
                    </td>
                    <td class="budget">
                    <?= $row['nama'];?>
                    </td>
                    <td class="budget">
                    <?= $row['checkin'];?>
                    </td>
                    <td class="budget">
                    <?= $row['checkout'];?>
                    </td>
                    <td class="budget">
                    <?= $status;?>
                    </td>
                    <td class="text-right">
                    <a href="<?= base_url("auth/deleterequest/$idbooking"); ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></a>
                    </td>
                  </tr>
			<?php $i++; } 
		?>
    