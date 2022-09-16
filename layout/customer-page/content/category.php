<div class="container mt-3">
  <h2><i class="fa fa-tags"></i> Categories</h2>
  <div class="row">
    <div class="col-3" style="margin-bottom: 1rem;">
      <button class="btn btn-lg btn-warning font-bold rounded-0 w-100 btn-view" name="shop" value="all" type="button">All <i class="fa fa-tags"></i></button>
    </div>
    <?php foreach ($category_list as $res) { ?>
      <div class="col-3" style="margin-bottom: 1rem;">
        <button class="btn btn-lg btn-warning font-bold rounded-0 w-100 btn-view" name="shop" value="<?php echo $res['id']; ?>" type="button"><?php echo $res['category']; ?> <i class="fa fa-tags"></i></button>
      </div>
    <?php } ?>
  </div>
</div>
<br>

<script>
  $(document).on("click", '.btn-view ', function() {

    var page = $(this).attr('name');
    var id = $(this).attr('value');

    $(".result").html('');
    $("#content").load(base_url + 'module/page.php?page=' + page + '&id=' + id);

  });
</script>