<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <link rel="stylesheet" href="{{ asset('learner-1.0.0/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('learner-1.0.0/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('learner-1.0.0/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('learner-1.0.0/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('learner-1.0.0/}css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('learner-1.0.0/fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('learner-1.0.0/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('learner-1.0.0/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('learner-1.0.0/css/style.css') }}">

  <title>documentation</title>
</head>
@php
// Get all segments of the current URL
$urlSegments = Request::segments();

// Get the last segment of the URL
$current_url_segment = end($urlSegments);
@endphp

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav mb-5">
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="index.html" class="logo menu-absolute m-0"></a>
          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li class=" <?php echo ($current_url_segment == 'documentation') ? 'active' : ''; ?>"><a href="{{ route('index') }}">Home</a></li>
            <li class=" <?php echo ($current_url_segment == 'backoffice') ? 'active' : ''; ?>"><a href="{{ route('backoffice') }}">Back Office</a></li>
            <li class=" <?php echo ($current_url_segment == 'ppob') ? 'active' : ''; ?>"><a href="{{ route('ppob') }}">PPOB</a></li>
            <li class=" <?php echo ($current_url_segment == 'whatsapp') ? 'active' : ''; ?>"><a href="{{ route('whatsapp') }}">Whatsapp</a></li>
          </ul>
          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
    {{-- main --}}
  @yield('content')
    {{-- main --}}

  <div class="site-footer">
    <div class="container">
      <div class="row mt-5">
        <div class="col-12 text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script></p> 
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="{{ asset('learner-1.0.0/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('learner-1.0.0/js/popper.min.js') }}"></script>
    <script src="{{ asset('learner-1.0.0/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('learner-1.0.0/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('learner-1.0.0/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('learner-1.0.0/js/jquery.waypoints.min.js') }}"></script>
    <!-- <script src="{{ asset('learner-1.0.0/js/jquery.fancybox.min.js') }}"></script> -->
    <script src="{{ asset('learner-1.0.0/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('learner-1.0.0/js/aos.js') }}"></script>
    <script src="{{ asset('learner-1.0.0/js/custom.js') }}"></script>

    <script>
      //paginasi
  // Jumlah item per halaman
  var itemsPerPage = 4;
  var currentPage = 1;
  
  function showPage(page) {
      var rows = $("#myTable tr");
      var startIndex = (page - 1) * itemsPerPage;
      var endIndex = startIndex + itemsPerPage;
  
      rows.hide();
      rows.slice(startIndex, endIndex).show();
  
      $("#paginationStatus").text("Page " + currentPage + " of " + Math.ceil(rows.length / itemsPerPage));
  }
  
  $(document).ready(function() {
      showPage(currentPage);
  
      $("#nextPage").click(function() {
          var rows = $("#myTable tr");
          var totalPages = Math.ceil(rows.length / itemsPerPage);
  
          if (currentPage < totalPages) {
              currentPage++;
              showPage(currentPage);
          }
      });
  
      $("#prevPage").click(function() {
          if (currentPage > 1) {
              currentPage--;
              showPage(currentPage);
          }
      });
  });
  </script>
  </body>

  </html>
