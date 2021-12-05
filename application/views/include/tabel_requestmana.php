<?php 
		$i = 1;
		foreach ($request as $row) {
			$base_url = base_url();
			$detail = $base_url;
			$idbooking = $row['book'];
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
                    <td class="text-right">
                      <a href="<?= base_url('auth/checkapp/').$idbooking.'/approve'; ?>"><button type="button" class="btn btn-outline-success btn-sm">Approve</button></a>
                      <a href="<?= base_url('auth/checkapp/').$idbooking.'/reject'; ?>"><button type="button" class="btn btn-outline-danger btn-sm">Reject</button></a>
                    </td>
                  </tr>
			<?php $i++; } 
		?>
    