<?php
session_start();
if (!isset($_SESSION["email"])) {
    header('Location: ../../signin.php');
    return false;
} 
$id=$_SESSION["id"] ;
$idPelicula=$_GET["idPelicula"];
$titulo=$_GET["titulo"]
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <title>Reservas</title>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="../../assets/admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="../../assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../assets/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../../assets/admin/css/style.css" rel="stylesheet" />

    <!-- script reserva -->
    <script src="../../js/scriptReserva.js"></script>


</head>

<body>
    <div class='container-fluid'>
        <div class='row h-100 align-items-center justify-content-center' style='min-height: 100vh'>
            <div class='col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4'>
                <div class='bg-secondary rounded p-1 p-sm-5 my-4 mx-1'>
                    <div class='d-flex align-items-center justify-content-between mb-3'>

                        <h3 class='text-primary'>
                            <i class=' fas fa-edit me-2'></i>Cine23
                        </h3>

                        <h4>Reserva</h4>
                    </div>
                    <form onsubmit="return false;" >
                        <input type="number" style="display:none" id="idPelicula" value="<?php echo $idPelicula ?>" />
                        <input type="number" style="display:none" id="idUsuario" value="<?php echo $id ?>" />
                        <div class='form-floating mb-3'>
                            <input type='text' class='form-control' id='titulo' value="<?php echo $titulo ?>" placeholder='#' disabled/>
                            <label for='titulo'>Título Película</label>
                        </div>
                        <div class='form-floating mb-4'>
                            <input type='date' class='form-control' id='fecha' placeholder='#' value="<?php echo date("Y-m-d");?>"/>
                            <label for='fecha'>Fecha de reserva</label>
                        </div>
                        <div class='form-floating mb-4'>
                            <input type='number' class='form-control' id='cantidad' placeholder='#' onchange="CambiarTotal()" />
                            <label for='cantidad'>Cantidad de boletos</label>
                        </div>
                        <div class='form-floating mb-4'>
                            <input type='number' class='form-control' id='total' placeholder='#' disabled/>
                            <label for='total'>Total</label>
                        </div>
                        <div id="res">

                        </div>
                        <button type='submit' class='btn btn-primary py-3 w-100 mb-4' id="reservar" onclick="GuardarReserva()">
                            Reservar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>