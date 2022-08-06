<h2><i class="fa fa-archive"></i> Inventory</h2>
<table class="table table-sm table-striped table-hover table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">PID#</th>
      <th scope="col">Name</th>
      <th scope="col">Stock</th>
      <th scope="col">Price</th>
      <th scope="col">Date Created</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['inventory'] as $res) { ?>
      <tr>
        <td><?php echo $res['id']; ?></td>
        <td><?php echo $res['name']; ?></td>
        <td class="text-end"><?php echo $res['qty']; ?></td>
        <td class="text-end"><?php echo $res['price']; ?></td>
        <td><?php echo $res['date_created']; ?></td>
        <td style="width: 25%;">
          <form method="post" name="update_product">
            <input type="hidden" value="<?php echo $res['id']; ?>" name="product_id">
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn btn-sm btn-warning" type="submit" name="type" value="re_stock_list">Re-Stock <i class="fa fa-save"></i></button>
              </div>
              <input type="text" class="form-control form-control-sm" name="qty" value="0" style="text-align:right;max-width:20%">
              <button type="button" class="btn btn-sm btn-dark btn-edit" name="inventory_edit" value="<?php echo $res['id']; ?>"> View <i class="fa fa-eye"></i> </button>
            </div>
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
  });
</script>