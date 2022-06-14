<div class="container-fluid">
  <div class="row">
    <div class="col-8">
      <div class="card">
        <div class="card-header bg-dark text-warning">
          <i class="fa fa-shopping-bag"></i> Products
        </div>
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-12 mb-3">
                <input type="search" class="form-control" id="search-item" placeholder="Search items...">
              </div>
              <br>
              <?php foreach ($data['inventory'] as $res) { ?>
                <div class="col-4 item-box" data-name="<?php echo strtolower($res['name']); ?>">
                  <form method="post">
                    <div class="card">
                      <div class="card-header bg-dark text-warning">
                        <i class="fa fa-tags"></i> <?php echo $res['name']; ?>
                      </div>
                      <div class="card-body">
                        <center>
                          <img src="images/products/<?php echo $res['image']; ?>" style="width:100px;height:100px;text-align:center" />
                        </center>
                        <h5 class="card-title">P <?php echo $res['price']; ?></h5>
                        <p class="card-text"><?php echo $res['description']; ?></p>
                      </div>
                      <div class="card-footer" style="display: flex;">
                        <div class="input-group mb-3">
                          <button class="btn btn-warning" type="submit" id="button-addon1">Add To Cart <i class="fa fa-plus"></i></button>
                          <input type="number" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="1" min="1" max="<?php echo $res['qty']; ?>">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              <?php } ?>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-4">
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
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['inventory'] as $res) { ?>
                <tr>
                  <td><?php echo $res['id']; ?></td>
                  <td><?php echo $res['name']; ?></td>
                  <td class="text-end"><?php echo $res['price']; ?></td>
                  <td class="text-end"><?php echo $res['qty']; ?></td>
                  <td>
                    <button type="button" class="btn btn-sm btn-dark"><i class="fa fa-close"></i> </button>
                  </td>
                </tr>
              <?php } ?>
              <tr>
                <td colspan="2">Subtotal</td>
                <td id="sub_total_price"></td>
                <td id="sub_total_qty"></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="2">Total</td>
                <td id="total_price"></td>
                <td id="total_qty"></td>
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
<script>
  var search = document.querySelector("#search-item"),
    images = document.querySelectorAll(".item-box");

  search.addEventListener("keyup", e => {
    // if (e.key == "Enter") {
    let searcValue = search.value,
      value = searcValue.toLowerCase();
    images.forEach(image => {
      if (image.dataset.name.includes(value)) {
        return image.style.display = "block";
      }
      image.style.display = "none";
    });
    // }
  });

  search.addEventListener("keyup", () => {
    if (search.value != "") return;
    images.forEach(image => {
      image.style.display = "block";
    })
  })
</script>