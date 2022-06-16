<div class="container">
  <br>
  <div class="row">

    <div class="col-12">
      <div class="card">
        <div class="card-header bg-dark text-warning">
          <i class="fa fa-shopping-cart"></i> My Cart
        </div>
        <div class="card-body">
          <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Total Price</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $id = 1;
              $price = 0;
              $total_price = 0;
              $qty = 0;  ?>
              <?php foreach ($data['cart'] as $res) { ?>
                <tr>
                  <td><?php echo $id++; //$res['id']; 
                      ?></td>
                  <td><?php echo $res['name']; ?></td>
                  <td class="text-end"><?php echo number_format($res['price'], 2); ?></td>
                  <td class="text-end"><?php echo $res['qty']; ?></td>
                  <td class="text-end"><?php echo number_format($res['sum_price'], 2); ?></td>
                  <td>
                    <button type="button" class="btn btn-sm btn-dark"><i class="fa fa-close"></i> </button>
                  </td>
                  <?php $price += $res['price']; ?>
                  <?php $total_price += $res['sum_price']; ?>
                  <?php $qty += $res['qty']; ?>
                </tr>
              <?php } ?>
              <!-- <tr>
                <td colspan="2">Subtotal</td>
                <td id="sub_total_price"></td>
                <td id="sub_total_qty"></td>
                <td></td>
              </tr> -->
              <tr>
                <td colspan="2">Total</td>
                <td id="total_price" class="text-end"><?php echo number_format($price, 2); ?></td>
                <td id="total_qty" class="text-end"><?php echo $qty; ?></td>
                <td id="total_final_price" class="text-end"><?php echo number_format($total_price, 2); ?></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <button class="btn btn-lg btn-warning font-bold rounded-0">Checkout Now <i class="fa fa-check fa-lg"></i></button>
      </div>
    </div>
  </div>
</div>
<br>