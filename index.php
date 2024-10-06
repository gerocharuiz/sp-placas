<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <title>Placas UMSNH | Vehículos</title>

        <link href="#" rel="icon">
        <link href="#" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File --> 
        <link href="/assets/css/style.css" rel="stylesheet">

        <!-- Library: sweetalert2 -->
        <link href="/assets/sweetalert2/css/sweetalert2.min.css" rel="stylesheet">

        <!-- Bootstrap doble select -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css"
                integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
                referrerpolicy="no-referrer" />

    </head>

    <body>
        <!-- ======= Header ======= -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/components/header.php';?>

        <!-- ======= Sidebar ======= -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/components/sidebar.php';?>

        <main id="main" class="main">
            <div class="pagetitle">
                <h1> {{ $pagetitle ?? ($title ?? null) }}</h1>
                <nav class="mt-2"><ol class="breadcrumb">{{ $nav ?? null}}</ol></nav>
              </div>
            {{ $slot }}
        </main>


         <!-- ======= Footer ======= -->
         <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>Universidad Michoacana de San Nicolás de Hidalgo</span></strong>. Facultad de Ciencias Físico - Matemáticas.
            </div>
            <div class="credits"></div>
        </footer>
        <!-- ===== End Footer ===== -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Vendor JS Files -->
        <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/vendor/chart.js/chart.umd.js"></script>
        <script src="/assets/vendor/echarts/echarts.min.js"></script>
        <script src="/assets/vendor/quill/quill.min.js"></script>
        <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="/assets/js/main.js"></script>

        <!-- Library: sweetalert2 -->
        <script src="/assets/sweetalert2/js/sweetalert2.all.min.js"></script>
        <script src="/assets/sweetalert2/js/sweetalert2.min.js"></script>
        
        <!-- Bootstrap doble select -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"
                integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </body>
</html>