<?php
    $idvt = $datos[0]['id'];
    $cod = $datos[0]['cod'];
    $comprador = $datos[0]['comprador'];
    $tipo_de_pago = $datos[0]['tipo_de_pago']; 
    $TC = $datos[0]['TC'];     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualiza venta</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
    <div class="container">
        <h1>Editar Venta!!!</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'editar_venta/'.$idvt; ?>">
                    <input type="text" id="idvt" name="idvt" hidden="" value="<?php echo $idvt?>"/>

                    <label for="nombre">Codigo </label>
                    <input type="text" name="cod" id="cod" class="form-control" value="<?php echo $cod?>"/>
                    <label for="nombre">Comprador </label>
                    <input type="text" name="comprador" id="comprador" class="form-control" value="<?php echo $comprador?>"/>
                    <label for="nombre">Tipo de Pago </label>
                    <input type="text" name="tipo_de_pago" id="tipo_de_pago" class="form-control" value="<?php echo $tipo_de_pago?>"/>
                    <label for="nombre">nro Tarjeta Credito </label>
                    <input type="text" name="TC" id="TC" class="form-control" value="<?php echo $TC?>"/>
                    
                    <br/>
                    <button type="submit" class='btn btn-warning'>Save</button> 
                </from>
            </div> 
        </div>
    </div>

</body>
</html>