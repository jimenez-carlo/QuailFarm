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
        $( "#content" ).load( base_url+'module/page.php?page='+page );
      });
});

$(document).on("submit", 'form', function (e) {
  e.preventDefault();
  window.location.href = base_url+'module/logout.php';
});





