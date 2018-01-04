<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Angle - Bootstrap Admin Template</title>
   <!-- =============== VENDOR STYLES ===============-->
   <link rel="icon" type="image/png" href="/img/lg2.png">
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="/vendor/fontawesome/css/font-awesome.min.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="/vendor/animate.css/animate.min.css">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="/vendor/whirl/dist/whirl.css">
    <!-- =============== PAGE VENDOR STYLES ===============-->

    <!-- CHOSEN-->
    <link rel="stylesheet" href="/vendor/chosen_v1.2.0/chosen.min.css">
    <!-- SELECT2-->
    <link rel="stylesheet" href="/vendor/select2/dist/css/select2.css">
    <link rel="stylesheet" href="/vendor/select2-bootstrap-theme/dist/select2-bootstrap.css">

    <link rel="stylesheet" href="/vendor/datatables-colvis/css/dataTables.colVis.css">
    <link rel="stylesheet" href="/vendor/datatables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/vendor/dataTables.fontAwesome/index.css">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="/css/bootstrap.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="/css/app.css" id="maincss">
    <link rel="stylesheet" href="/css/custom.css">
    {{-- Color Picker --}}
    <link rel="stylesheet" href="/vendor/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">

</head>

<body class="layout-h">
   <div class="wrapper">
      <!-- Main section-->
  <section>
    @yield('content')
  </section>
<!-- Page footer-->
<footer>
   <span>&copy; 2018 - Frq</span>
</footer>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->
<script src="/vendor/modernizr/modernizr.custom.js"></script>
<!-- MATCHMEDIA POLYFILL-->
<script src="/vendor/matchMedia/matchMedia.js"></script>
<!-- JQUERY-->
<script src="/vendor/jquery/dist/jquery.js"></script>
<!-- BOOTSTRAP-->
<script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
<!-- STORAGE API-->
<script src="/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
<!-- JQUERY EASING-->
<script src="/vendor/jquery.easing/js/jquery.easing.js"></script>
<!-- ANIMO-->
<script src="/vendor/animo.js/animo.js"></script>
<!-- SLIMSCROLL-->
<script src="/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<!-- SCREENFULL-->
<script src="/vendor/screenfull/dist/screenfull.js"></script>
<!-- LOCALIZE-->
<script src="/vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
<!-- RTL demo-->
<script src="/js/demo/demo-rtl.js"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->
<!-- SPARKLINE-->
<script src="/vendor/sparkline/index.js"></script>
<!-- FLOT CHART-->
<script src="/vendor/flot/jquery.flot.js"></script>
<script src="/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="/vendor/flot/jquery.flot.resize.js"></script>
<script src="/vendor/flot/jquery.flot.pie.js"></script>
<script src="/vendor/flot/jquery.flot.time.js"></script>
<script src="/vendor/flot/jquery.flot.categories.js"></script>
<script src="/vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
<!-- EASY PIE CHART-->
<script src="/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js"></script>
<!-- MOMENT JS-->
<script src="/vendor/moment/min/moment-with-locales.min.js"></script>
<!-- SKYCONS-->
<script src="/vendor/skycons/skycons.js"></script>
<!-- DEMO-->
<script src="/js/demo/demo-flot.js"></script>
<!-- =============== APP SCRIPTS ===============-->
<script src="/js/app.js"></script>
</body>

</html>
