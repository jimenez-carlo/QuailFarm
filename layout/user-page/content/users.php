<h2><i class="fa fa-users"></i> Users</h2>
<table class="table table-sm table-striped table-hover table-bordered">
  <thead class="table-primary">
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Access</th>
      <th scope="col">Username</th>
      <!-- <th scope="col">Email</th> -->
      <th scope="col">Full Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact</th>
      <th scope="col">Registered Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($data['users'] as $res) { ?>
      <tr>
        <td><?php echo $res['id']; ?></td>
        <td><span class="badge bg-primary text-light"><?php echo $res['access']; ?></span></td>
        <td><?php echo $res['username']; ?></td>
        <!-- <td><?php echo $res['email']; ?></td> -->
        <td><?php echo ucwords($res['first_name'] . ' ' . $res['last_name']); ?></td>
        <td><?php echo strtoupper($res['gender']); ?></td>
        <td><?php echo $res['contact_no']; ?></td>
        <td><?php echo $res['date_created']; ?></td>
        <td>
          <?php if ($res['access_id'] == 1) { ?>
            <button type="button" class="btn btn-sm btn-primary" disabled> Edit <i class="fa fa-edit"></i> </button>
            <button type="button" class="btn btn-sm btn-primary" disabled> View <i class="fa fa-eye"></i> </button>
            <button type="button" class="btn btn-sm btn-primary" disabled> Delete <i class="fa fa-trash"></i> </button>
        </td>
      <?php } else { ?>
        <form method="post" name="update_user">
          <button type="button" class="btn btn-sm btn-primary btn-edit" name="user_edit" value="<?php echo $res['id']; ?>"> Edit <i class="fa fa-edit"></i> </button>
          <button type="button" class="btn btn-sm btn-primary btn-edit" name="user_view" value="<?php echo $res['id']; ?>"> View <i class="fa fa-eye"></i> </button>
          <input type="hidden" value="<?php echo $res['id']; ?>" name="user_id">
          <button type="submit" class="btn btn-sm btn-primary" name="type" value="delete_user"> Delete <i class="fa fa-trash"></i> </button>
        </form>
        </td>
      <?php } ?>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<script>
  $('table').DataTable({
    dom: '<"top"<"left-col"B><"center-col"><"right-col"f>> <"row"<"col-sm-12"tr>><"row"<"col-sm-10"i><"col-sm-2"p>>',
    buttons: [{
      className: 'btn btn-sm btn-primary',
      text: '<i class="fa fa-user-plus"></i> Register User',
      action: function(e, dt, node, config) {
        $("#content").load(base_url + 'module/page.php?page=user_register');
      }
    }]
  });
</script>