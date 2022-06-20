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
  
  if (this.name == 'logout') {
    window.location.href = base_url+'module/logout.php';
  }
  
  formdata = new FormData(this);
  formdata.append('form', form_name);
  
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
        $(this).reset();
      }
      if (form_name == 'remove_from_cart' || form_name == 'update_cart' || form_name == 'checkout_cart') {
        $( "#content" ).load( base_url+'module/page.php?page=cart' );
      }
      if (form_name == 'update_transaction') {
        $( "#content" ).load( base_url+'module/page.php?page=customer_orders' );
      }
      if (result.items != '') {
        errorFields(result.items);
      }
    }
  });
});




