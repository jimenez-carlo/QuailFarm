$(document).ready(function() {  
      $('[data-link="menu"]').click(function() {
      var page = $(this).attr('name');
      $('a.sidebar-btn').removeClass('active');
        $(this).addClass('active');
        $( "#content" ).load( base_url+'module/page.php?page='+page );
      });
});

$(document).on("submit", 'form', function (e) {
  e.preventDefault();
  if (this.name == 'logout') {
  window.location.href = base_url+'module/logout.php';
  }
});





