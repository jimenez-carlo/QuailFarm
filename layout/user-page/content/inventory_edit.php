<h2><i class="fa fa-tags"></i> Product View</h2>
<form method="post" name="update_product" enctype="multipart/form-data">
  <input type="hidden" id="product_id" name="product_id" requireds value="<?php echo $product->id; ?>">
  <div class="card">
    <div class="card-header bg-dark text-warning">
      <i class="fa fa-exclamation-circle"></i> Product Details
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <label for="product_name" class="form-label">Stock</label>
            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $product->qty; ?>">
          </div>
          <div class="col-md-6">
            <label for="qty" class="form-label">*Re-Stock</label>
            <input type="number" class="form-control form-control-sm" value="0" name="qty" id="qty" min="0">
          </div>
          <div class="col-md-6">
            <label for="product_name" class="form-label">Name</label>
            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $product->name; ?>">
            <label for="product_name" class="form-label">*Category</label>
            <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="category" name="category" requireds style="width: 100%;">
              <?php foreach ($category_list as $res) {
                if ($product->category_id == $res['id']) {
                  echo '<option value="' . $res['id'] . '" selected>' . $res['category'] . '</option>';
                } else {
                  echo '<option value="' . $res['id'] . '">' . $res['category'] . '</option>';
                }
              } ?>
            </select>
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control form-control-sm" disabled value="<?php echo $product->price; ?>">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control form-control-sm" rows="5" disabled><?php echo $product->description; ?></textarea>
          </div>

          <div class="col-md-6" style="display: flex;flex-direction:column">
            <img src="images/products/<?php echo $product->image; ?>" alt="" style="width:200px;height:200px;align-self: center;" id="preview">
          </div>

          <div class="col-md-12 mt-3">
            <div class="pull-right">
              <button type="submit" class="btn btn-sm btn-warning" name="type" value="re_stock">Re-stock <i class="fa fa-save"></i></button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</form>

<br>
<div class="card">
  <div class="card-header bg-dark text-warning">
    <i class="fa fa-history"></i> Restock History
  </div>
  <div class="card-body">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12 mt-3">
          <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID#</th>
                <th scope="col">Original Qty</th>
                <th scope="col">Re-stocked Qty</th>
                <th scope="col">New Qty</th>
                <th scope="col">Re-stocked By</th>
                <th scope="col">Date Created</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($product_history as $res) { ?>
                <tr>
                  <td><?php echo $res['id']; ?></td>
                  <td class="text-end"><span class="badge bg-secondary"><?php echo $res['original_qty']; ?></span></td>
                  <td class="text-end"><span class="badge <?php echo ($res['qty'] + $res['original_qty'] > $res['original_qty']) ? 'bg-success' : 'bg-danger'; ?>"><?php echo abs($res['qty']); ?><?php echo ($res['qty'] + $res['original_qty'] > $res['original_qty']) ? '+' : '-'; ?></span> </td>
                  <td class="text-end"><span class="badge <?php echo ($res['qty'] + $res['original_qty'] > $res['original_qty']) ? 'bg-success' : 'bg-danger'; ?>"><?php echo $res['qty'] + $res['original_qty']; ?></span></td>
                  <td><?php echo $res['created_by']; ?></td>
                  <td><?php echo $res['date_created']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
<script>
  $('table').DataTable({
    dom: '<"top"<"left-col"B><"center-col"><"right-col"f>> <"row"<"col-sm-12"tr>><"row"<"col-sm-10"li><"col-sm-2"p>>',
    "order": []
  });
</script>