<h2>Charities</h2>

<a href="<?php echo URL; ?>/charities/input" class="btn">Input Charity</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>NOMINEE</th>
            <th>EDIT</th>
      </tr>

      <?php $no = 1;
      foreach ($data['optusers'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['user_full_name']; ?></td>
                  <td><?php echo $row['charities_total']; ?></td>
                  <td>
                        <a href="<?php echo URL; ?>/charities/edit/<?php echo $row['users_id']; ?>" class="btn">Edit</a>
                        <a href="<?php echo URL; ?>/charities/delete/<?php echo $row['users_id']; ?>" class="btn">Delete</a>
                  </td>
            </tr>
      <?php $no++;
      } ?>

</table>