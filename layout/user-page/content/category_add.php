<h2 class="form-header"><i class="fa fa-plus"></i> Category Creation</h2>
<form method="post" name="add_category">
  <div class="card col-6 justify-content-md-center">
    <div class="card-header bg-dark text-white">
      <i class="fa fa-exclamation-circle"></i> Category Details
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <label for="category_name" class="form-label">*Name</label>
            <input type="text" class="form-control form-control-sm" id="category_name" name="category_name" placeholder="Category Name" requireds>
          </div>
          <div class="col-md-12 mt-3">
            <div class="pull-right">
              <button type="submit" class="btn btn-sm btn-dark">Create <i class="fa fa-save"></i></button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</form>