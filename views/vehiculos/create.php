<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/php/utils.php');
    include ($_SERVER['DOCUMENT_ROOT'].'/php/consulta.php');
    $cnx = new placas();

    if(isset($_POST['submit'])){
        $niv = $_POST['niv'];
        $numMotor = $_POST['numMotor'];
        $numChasis = $_POST['numChasis'];
        $tipo = $_POST['tipo'];
        $clase = $_POST['clase'];
        $color = $_POST['color'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $numPuertas = $_POST['numPuertas'];
        $combustible = $_POST['combustible'];
        $cilindros = $_POST['cilindros'];
        $ejes = $_POST['ejes'];

        $sql = "INSERT INTO sp_vehiculos (niv, numMotor, numChasis, tipo, clase, color, modelo, marca, numPuertas, combustible, cilindros, ejes) VALUES
                ('$niv', '$numMotor', '$numChasis', '$tipo', '$clase', '$color', '$modelo', '$marca', '$numPuertas', '$combustible', '$cilindros', '$ejes')";
        $query = mysqli_query($cnx->getConnection(), $sql);
        
        if($query){
            echo "<script>alert('Vehículo registrado')</script>";
        } else{
            echo "<script>alert('Ha ocurrido un error". mysqli_error($cnx) ."')</script>";
        }
    }
?>

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
                <h1>Vehículos</h1>
                <nav class="mt-2">
                    <ol class="breadcrumb"><ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active">Vehículos</li>
                    </ol>
                </nav>
            </div>


            <section class="section">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dar te alta nuevo vehículo</h5>
                            
                            <form method="POST" class="row g-3 needs-validation" novalidate>
                                <div class="col-md-4">
                                    <label for="niv" class="form-label">NIV</label>
                                    <input type="text" class="form-control" id="niv-input" name="niv" maxleng="25" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el modelo del vehículo
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="numMotor" class="form-label">Número de Motor</label>
                                    <input type="text" class="form-control" id="numMotor-input" name="numMotor" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el modelo del vehículo
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="numChasis" class="form-label">Número de Chásis</label>
                                    <input type="text" class="form-control" id="numChasis-input" name="numChasis" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el modelo del vehículo
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="tipo" class="form-label">Tipo</label>
                                    <select class="form-select" name="tipo" id="tipo-select" required>
                                        <option value="" selected disabled hidden>Slecciona una opción...</option>
                                        <?php
                                            $tipos = $cnx->getCatTiposVehiculos();
                                            /* var_dump($tipos); */
                                            while ($row=mysqli_fetch_object($tipos)){
                                                $tipo=$row->descripcion;
                                                echo "<option value=" .$tipo.">" .$tipo."</option>";
                                            }
                                        ?>
                                    </select>
                                   
                                    <div class="invalid-feedback">
                                        Por favor seleccione el tipo del vehículo.
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="clase" class="form-label">Clase</label>
                                    <select class="form-select" name="clase" id="clase-select" required>
                                        <option value="" selected disabled hidden>Slecciona una opción...</option>
                                        <option value="Aventura">Aventura</option>
                                        <option value="Carga">Carga</option>
                                        <option value="Coupé">Coupé</option>
                                        <option value="Cruiser">Cruiser</option>
                                        <option value="Deportiva">Deportiva</option>
                                        <option value="Deportivo">Deportivo</option>
                                        <option value="Grande">Grande</option>
                                        <option value="Hatchback">Hatchback</option>
                                        <option value="Pickup">Pickup</option>
                                        <option value="Scooter">Scooter</option>
                                        <option value="Sedán">Sedán</option>
                                        <option value="Street">Street</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Touring">Touring</option>
                                        <option value="Trabajo">Trabajo</option>
                                        <option value="Urbana">Urbana</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor seleccione la clase del vehículo.
                                    </div>
                                </div>

                                <div class="col-md-4"></div>

                                <div class="col-md-4">
                                    <label for="marca" class="form-label">Marca</label>
                                    <input type="text" class="form-control" name="marca" id="marca-input" value="" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese la marca del vehículo
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="modelo" class="form-label">Modelo</label>
                                    <input type="text" class="form-control" name="modelo" id="modelo-input" value="" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el modelo del vehículo
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="color" class="form-label">Color</label>
                                    <input type="text" class="form-control" name="color" id="color-input" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el color del vehículo.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="combustible" class="form-label">Combustible</label>
                                    <select class="form-select" id="clase-select" name="combustible" required>
                                        <option value="" selected disabled hidden>Slecciona una opción...</option>
                                        <option value="Gasolina">Gasolina</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Eléctrico">Eléctrico</option>
                                        <option value="Híbrido">Híbrido</option>
                                        <option value="Ninguno">Ninguno</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor seleccione el tipo de combustible.
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="cilindros" class="form-label">Cilindros</label>
                                    <div class="input-group">
                                        <span id="addCantidad" class="input-group-text" type="button">+</span>
                                        <input type="number" class="form-control" name="cilindros" id="cantidad" required>
                                        <span id="lessCantidad" class="input-group-text" type="button">-</span>
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingrese la cantidad de cilindros.
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="cilindos" class="form-label">Ejes</label>
                                    <div class="input-group">
                                        <span id="addCantidadEjes" class="input-group-text" type="button">+</span>
                                        <input type="number" class="form-control" name="ejes" id="cantidadEjes" required>
                                        <span id="lessCantidadEjes" class="input-group-text" type="button">-</span>
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingrese la cantidad de cilindros.
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="color" class="form-label">Numero de puertas</label>
                                    <input type="number" class="form-control" name="numPuertas" id="color-input" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el color del vehículo.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="submit" id="registar">Registrar vehículo</button>
                                </div>
                            </form><!-- End Custom Styled Validation -->
                        </div>
                    </div>

                </div>

            </section>


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
        <!-- <script src="/assets/vendor/quill/quill.min.js"></script> -->
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
        <script>
            $(document).ready(function (){
                $('#cantidad').val(0);
                $('#cantidadEjes').val(0);

                $('#addCantidad').click(function(){
                    var cantidad = parseInt($('#cantidad').val());
                    $('#cantidad').val(cantidad + 1);
                });

                $('#lessCantidad').click(function(){
                    var cantidad = parseInt($('#cantidad').val());
                    if(cantidad >= 1)
                        $('#cantidad').val(cantidad - 1);
                });

                $('#addCantidadEjes').click(function(){
                    var cantidad = parseInt($('#cantidadEjes').val());
                    $('#cantidadEjes').val(cantidad + 1);
                });

                $('#lessCantidadEjes').click(function(){
                    var cantidad = parseInt($('#cantidadEjes').val());
                    if(cantidad >= 1)
                        $('#cantidadEjes').val(cantidad - 1);
                });
            });
        </script>
    </body>
</html>

