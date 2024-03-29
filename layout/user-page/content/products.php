<h2><i class="fa fa-tags"></i> Products</h2>
<table class="table table-sm table-striped table-hover table-bordered">
  <thead class="table-primary">
    <tr>
      <th scope="col">PID#</th>
      <th scope="col">Category</th>
      <th scope="col" style="width: 0.1%;">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <!-- <th scope="col">Date Created</th> -->
      <th scope="col">Created By</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['products'] as $res) { ?>
      <tr>
        <td><?php echo $res['id']; ?></td>
        <td><span class="badge bg-primary text-light"><?php echo $res['category_name']; ?></span></td>
        <!-- <td><?php echo $res['category_name']; ?></td> -->
        <td style="width: 0.1%;"><img src="images/products/<?php echo $res['image']; ?>" style="width:100px;height:100px" /></td>
        <td><?php echo $res['name']; ?></td>
        <td class="text-end"><?php echo $res['price']; ?></td>
        <td><?php echo $res['description']; ?></td>
        <!-- <td><?php echo $res['date_created']; ?></td> -->
        <td><?php echo $res['created_by']; ?></td>
        <td>
          <form method="post" name="update_product">
            <button type="button" class="btn btn-sm btn-primary btn-edit" name="product_edit" value="<?php echo $res['id']; ?>"> Edit <i class="fa fa-edit"></i> </button>
            <input type="hidden" value="<?php echo $res['id']; ?>" name="product_id">
            <button type="submit" class="btn btn-sm btn-primary" name="type" value="delete"> Delete <i class="fa fa-trash"></i> </button>
          </form>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<script>
  var tbl = $('table').DataTable({
    dom: '<"top"<"left-col"B><"center-col"><"right-col"f>> <"row"<"col-sm-12"tr>><"row"<"col-sm-10"i><"col-sm-2"p>>',
    buttons: [{
      className: 'btn btn-sm btn-primary',
      text: '<i class="fa fa-plus"></i> Add Product',
      action: function(e, dt, node, config) {
        $("#content").load(base_url + 'module/page.php?page=product_add');
      }
    }]
  });



  $(document).ready(function() {
    $('<select name="category" id="category" class="select" style="margin-left:5px;vertical-align:middle"> <option value="">All</option><?php foreach ($data['category_list'] as $res) { ?><option><?php echo $res['category']; ?></option><?php } ?></select>').insertAfter(".dt-button");
    $(document).on("change", '#category ', function() {
      var val = $(this).val(); //attr('value');
      tbl
        .column(1)
        .search(val)
        .draw();
    });
  });
</script>