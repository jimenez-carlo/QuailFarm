<h2><i class="fa fa-user"></i> Customer ID#<?php echo $profile->id; ?></h2>
<input type="hidden" id="user_id" name="user_id" requireds value="<?php echo $profile->id; ?>">
<div class="card">
  <div class="card-header bg-dark text-warning">
    <i class="fa fa-user"></i> Customer Profile
    <button type="button" class="btn btn-sm btn-warning pull-right btn-edit" name="customer_edit" value="<?php echo $profile->id; ?>">Edit <i class="fa fa-edit"></i></button>
  </div>
  <div class="card-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <label for="password" class="form-label">*Username</label>
          <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="Username" requireds value="<?php echo $profile->username; ?>" disabled>
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">*Email Address</label>
          <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="user@example.com" requireds value="<?php echo $profile->email; ?>" disabled>
        </div>
        <div class="col-md-6">
          <label for="firstname" class="form-label">*First Name</label>
          <input type="text" class="form-control form-control-sm" id="firstname" name="firstname" placeholder="firstname" value="<?php echo $profile->first_name; ?>" disabled>
        </div>
        <div class="col-md-6">
          <label for="lastname" class="form-label">*Last Name</label>
          <input type="text" class="form-control form-control-sm" id="lastname" name="lastname" placeholder="lastname" value="<?php echo $profile->last_name; ?>" disabled>
        </div>
        <div class="col-md-6">
          <label for="address" class="form-label">*Address</label>
          <textarea class="form-control form-control-sm" id="address" name="address" rows="4" disabled><?php echo $profile->address; ?></textarea>
        </div>
        <div class="col-md-6">
          <label for="contact" class="form-label">*Contact No</label>
          <input type="text" class="form-control form-control-sm" id="contact" name="contact" placeholder="09xxxxxxxxx" requireds value="<?php echo $profile->contact_no; ?>" disabled>
          <label for="contact" class="form-label">*Gender</label>
          <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="gender" name="gender" requireds style="width: 100%;" disabled>
            <?php foreach ($gender_list as $res) {
              if ($profile->gender_id == $res['id']) {
                echo '<option value="' . $res['id'] . '" selected>' . $res['gender'] . '</option>';
              } else {
                echo '<option value="' . $res['id'] . '">' . $res['gender'] . '</option>';
              }
            } ?>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if (isset($data['orders']['invoice'])) { ?>
  <h2><i class="fa fa-cube"></i> Orders</h2>
  <?php foreach ($data['orders']['invoice'] as $res => $invoice_key) { ?>
    <div class="col-12 mb-3">
      <div class="card">
        <div class="card-header bg-dark text-warning">
          <i class="fa fa-cube"></i> #<?php echo $res; ?> <button type="button" class="btn btn-sm btn-warning pull-right btn-view" name="orders_view" value="<?php echo $res; ?>">View <i class="fa fa-eye"></i></button>
        </div>
        <div class="card-body">
          <table class="table table-sm table-striped table-hover table-bordered" style="width:100%">
            <thead class="table-dark">
              <tr>
                <th scope="col">TXN#</th>
                <th scope="col">Status</th>
                <th scope="col">PID#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Total Price</th>
                <th scope="col">Last Updated</th>
                <th scope="col"></th>
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
                  <td><?php echo $sub_res['id']; ?></td>
                  <td><?php echo ucwords($sub_res['status']); ?></td>
                  <td><a href="#" class="a-view" name="product_edit" value="<?php echo $sub_res['product_id']; ?>"><?php echo $sub_res['product_id']; ?></td>
                  <td><?php echo $sub_res['name']; ?></td>
                  <td class="text-end"><?php echo number_format($sub_res['product_price'], 2); ?></td>
                  <td class="text-end"><?php echo number_format($sub_res['qty'], 0); ?></td>
                  <td class="text-end"><?php echo number_format($sub_res['product_price'] * $sub_res['qty'], 2); ?></td>
                  <td><?php echo $sub_res['date_updated']; ?></td>
                  <td>
                    <button type="button" class="btn btn-sm btn-dark btn-view" name="transaction_view" value="<?php echo $sub_res['id']; ?>">View <i class="fa fa-eye"></i></button>
                  </td>
                </tr>
                </td>
                <?php $price +=       (in_array(intval($sub_res['status_id']), array(1, 5, 6))) ? 0 :  $sub_res['product_price']; ?>
                <?php $total_price += (in_array(intval($sub_res['status_id']), array(1, 5, 6))) ? 0 :  $sub_res['product_price'] * $sub_res['qty']; ?>
                <?php $qty +=         (in_array(intval($sub_res['status_id']), array(1, 5, 6))) ? 0 : $sub_res['qty']; ?>
              <?php } ?>
              <tr class="fw-bold">
                <td colspan="4">Grand Total</td>
                <td id="total_price" class="text-end"><?php echo number_format($price, 2); ?></td>
                <td id="total_qty" class="text-end"><?php echo number_format($qty, 0); ?></td>
                <td id="total_final_price" class="text-end"><?php echo number_format($total_price, 2); ?></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <?php } ?>
<?php } else { ?>

  <h2><i class="fa fa-cube"></i> No Orders Yet.</h2>
<?php } ?>