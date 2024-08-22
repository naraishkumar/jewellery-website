<?php 
 include 'includes/header/header.php';
 include 'includes/header/sidebar.php';
?> 

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-9">
      <h2>Site Settings
        <a href="add_setting.php" class="btn btn-primary float-end">Insert Setting</a>
      </h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Setting Key</th>
            <th>Setting Value</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $tbl_name = 'tbl_site_settings';
          $records = get_records($tbl_name);

          if (!empty($records)) {
            foreach ($records as $row) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['setting_key'] . "</td>";
              echo "<td>" . $row['setting_value'] . "</td>";
              echo "<td>
                      <a href='/Jewellery-website/admin/edit_setting.php?id=" . $row['id'] . "' class='btn btn-primary'><i class='fa-solid fa-pen-to-square'></i></a>
                      <form action='delete_setting.php' method='POST' style='display:inline;'>
                          <input type='hidden' name='id' value='" . $row['id'] . "'>
                          <button type='submit' class='btn btn-warning mx-1'><i class='fa-solid fa-trash'></i></button>
                      </form>
                    </td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
          }
          ?>
        </tbody>
      </table>
      <?php include 'pagination.php'; ?>
    </div>
  </div>
</div>

<?php include 'includes/footer/footer.php'; ?>