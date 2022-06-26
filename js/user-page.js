$(document).ready(function() {
    var myOffcanvas = document.getElementById('offcanvasExample');
    myOffcanvas.addEventListener('show.bs.offcanvas', function() {
      document.body.style.marginLeft = "250px";
    });
    myOffcanvas.addEventListener('hide.bs.offcanvas', function() {
      document.body.style.marginLeft = "0px";
    });
  
      $('a.sidebar-btn').click(function() {
      var page = $(this).attr('name');
      $('a.sidebar-btn').removeClass('active');
        $(this).addClass('active');
            $(".result").html('');
        $( "#content" ).load( base_url+'module/page.php?page='+page );
      });
});

$(document).on("submit", 'form', function (e) {
  e.preventDefault();
  clearErrors();
  var form_raw = this;
  var form_name = this.name;
  var type = e.originalEvent.submitter.name;
  var type_value = e.originalEvent.submitter.value;
  if (this.name == 'logout') {
    window.location.href = base_url+'module/logout.php';
  }
  
  formdata = new FormData(this);
  console.log(form_name);
  formdata.append('form', form_name);
  formdata.append(type, type_value);

  $.ajax({
    method: "POST",
    url: base_url + "module/request.php",
    data: formdata,
    processData: false,
    contentType: false,
    success: function (res) {
      var result = JSON.parse(res);
      $('.result').html(result.result);
      if (result.status == true) {
        $(form_raw).trigger('reset');
      }
      if (form_name == 'update_user' && type_value == 'delete') {
        $( "#content" ).load( base_url+'module/page.php?page=users' );
      }
      if (form_name == 'remove_from_cart' || form_name == 'update_cart' || form_name == 'checkout_cart') {
        $( "#content" ).load( base_url+'module/page.php?page=cart' );
      }
      if (form_name == 'update_transaction') {
        $( "#content" ).load( base_url+'module/page.php?page=customer_orders' );
      }
      if (form_name == 'add_product') {
        $('#preview').attr('src','images/products/default.png');
      }
      if (result.items != '') {
        errorFields(result.items);
      }
    }
  });
});




