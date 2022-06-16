<div class="container mt-3">
  <h2><i class="fa fa-archive"></i> Orders</h2>
  <?php $group = ''; ?>
  <?php foreach ($data['orders']['invoice'] as $res => $invoice_key) { ?>
    <div class="col-12 mb-3">
      <div class="card">
        <div class="card-header bg-dark text-warning">
          <i class="fa fa-archive"></i> #<?php echo $res; ?>
        </div>
        <div class="card-body">
          <table class="table table-sm table-striped table-hover table-bordered" style="width:100%">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID#</th>
                <th scope="col">Status</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Total Price</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $id = 1;
              $price = 0;
              $total_price = 0;
              $qty = 0; ?>
              <?php foreach ($data['orders']['invoice'][$res] as $sub_res) { ?>
                <tr>
                  <td><?php echo $id++; ?></td>
                  <td><?php echo ucwords($sub_res['status']); ?></td>
                  <td><?php echo $sub_res['name']; ?></td>
                  <td class="text-end"><?php echo number_format($sub_res['product_price'], 2); ?></td>
                  <td class="text-end"><?php echo $sub_res['qty']; ?></td>
                  <td class="text-end"><?php echo number_format($sub_res['product_price'] * $sub_res['qty'], 2); ?></td>
                </tr>
                </td>
                <?php $price += $sub_res['product_price']; ?>
                <?php $total_price += $sub_res['product_price'] * $sub_res['qty']; ?>
                <?php $qty += $sub_res['qty']; ?>
              <?php } ?>
              <tr>
                <td colspan="3">Total</td>
                <td id="total_price" class="text-end"><?php echo number_format($price, 2); ?></td>
                <td id="total_qty" class="text-end"><?php echo $qty; ?></td>
                <td id="total_final_price" class="text-end"><?php echo number_format($total_price, 2); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
</div>
<script>
  // $('table').DataTable({
  //   dom: '<"top"<"left-col"><"center-col"><"right-col"Bf>> <"row"<"col-sm-12"tr>><"row"<"col-sm-10"l><"col-sm-2"p>>',
  // });
</script>