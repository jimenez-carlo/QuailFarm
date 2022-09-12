<h2><i class="fa fa-archive"></i> Categories</h2>
<table class="table table-sm table-striped table-hover table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Name</th>
      <th scope="col">Date Created</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['categories'] as $res) { ?>
      <tr>
        <td><?php echo $res['id']; ?></td>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['date_created']; ?></td>
        <td style="width: 25%;">
          <form method="post" name="update_category">
            <input type="hidden" value="<?php echo $res['id']; ?>" name="category_id">
            <button type="button" class="btn btn-sm btn-warning btn-edit" name="category_edit" value="<?php echo $res['id']; ?>"> Edit <i class="fa fa-edit"></i> </button>
            <button type="submit" class="btn btn-sm btn-dark" name="type" value="delete"> Delete <i class="fa fa-trash"></i> </button>
          </form>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<script>
  $('table').DataTable({
    dom: '<"top"<"left-col"B><"center-col"><"right-col"f>> <"row"<"col-sm-12"tr>><"row"<"col-sm-10"li><"col-sm-2"p>>',
    buttons: [{
      className: 'btn btn-sm btn-warning',
      text: '<i class="fa fa-plus"></i> Add Category',
      action: function(e, dt, node, config) {
        $("#content").load(base_url + 'module/page.php?page=category_add');
      }
    }]
  });
</script>