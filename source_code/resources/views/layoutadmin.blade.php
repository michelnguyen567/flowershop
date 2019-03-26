<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/source/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/source/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/source/admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/source/admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/source/admin/images/favicon.png" />
  
</head>

<body>
    @include('headeradmin')
    @yield('body')
    @include('footeradmin')
      
        

  <!-- plugins:js -->
  <script src="/source/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="/source/admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/source/admin/js/off-canvas.js"></script>
  <script src="/source/admin/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/source/admin/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>