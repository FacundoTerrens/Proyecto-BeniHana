<?php
session_start();
include("seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Carga</title>

    <!-- Icons font CSS-->
    <link href="carga_paciente/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="carga_paciente/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="carga_paciente/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="carga_paciente/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="carga_paciente/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Subir Articulo</h2>
                </div>
                <div class="card-body">
                    <form name="f1" method="POST" action="subir_articulo_back.php" id="alta"> 
                        <div class="form-row m-b-55">
                            <div class="name">Articulo</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="tipo">
                                            <label class="label--desc">Tipo</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nombre">
                                            <label class="label--desc">Nombre</label>
                                        </div>
										<div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="categoria">
                                            <label class="label--desc">Categoria</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Talle</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select  required name="talle">
                                            <option disabled="disabled" selected="selected">--Seleccione Talle--</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                        </select>
                                        
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Color</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select  required name="color">
                                            <option disabled="disabled" selected="selected">--Seleccione Color--</option>
                                            <option>Rojo</option>
                                            <option>Blanco</option>
                                            <option>Negro</option>
                                            <option>Verde</option>
                                            <option>Azul</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Genero</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select  required name="genero">
                                            <option disabled="disabled" selected="selected">--Seleccione Genero--</option>
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="input-group-desc">
                             <input class="input--style-5" type="number" name="precio">
                             <label class="label--desc">Precio</label>
                         </div>



                                        <div class="select-dropdown"></div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>

                            <button class="btn btn--radius-2 btn--red" type="submit">Subir Articulo</button>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>



    <!-- Jquery JS-->
    <script src="carga_paciente/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="carga_paciente/vendor/select2/select2.min.js"></script>
    <script src="carga_paciente/vendor/datepicker/moment.min.js"></script>
    <script src="carga_paciente/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="carga_paciente/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->