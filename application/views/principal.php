<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tienda de Videojuegos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- lo que se muestra en el localhost-->
<div id="container">
	<h1>Muestra Videojuegos!!!!</h1>
    <div class="container">
    <div class="mb-5">
        <form method="POST" action="<?php echo base_url().'crear_videojuego'?>">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="">Codigo</label>
                    <input type="text" name="cod" class="form-control" required placeholder="cod" id="cod">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required placeholder="Nombre" id="nombre">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Genero</label>
                    <input type="text" name="genero" class="form-control" required placeholder="Genero" id="genero">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="">Precio</label>
                    <input type="text" name="precio" class="form-control" required placeholder="Precio" id="precio">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Consola</label>
                    <input type="text" name="consola" class="form-control" required placeholder="Consola" id="consola">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
        </form>
    </div>
    </div>

    <table class="table">
        <thead class="table-dark">
            <tr>

                <td>cod</td>
                <td>nombre</td>
                <td>genero</td>
                <td>precio</td>
                <td>consola</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($videojuegos as $videoj) :?>
                <tr>

                    <td> <?php echo $videoj->cod ?></td>
                    <td> <?php echo $videoj->nombre ?></td>
                    <td> <?php echo $videoj->genero ?></td>
                    <td> <?php echo $videoj->precio ?></td>
                    <td> <?php echo $videoj->consola ?></td>
                    <td><a href='<?php echo base_url().'get_idvj/'.$videoj->id ?>' class='btn btn-warning btn-sm'>Editar</a></td>
                    <td><a href='<?php echo base_url().'eliminar_videojuego/'.$videoj->id ?>' class='btn btn-danger btn-sm'>Eliminar</a></td>
                </tr>
                <?php endforeach;?>
        </tbody>
    </table>
    
    <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Adicionar
    </button>-->
    <!-- Button trigger modal -->

    <h1>Muestra Venta!!!</h1>
    <div class="container">
    <div class="mb-5">
        <form method="POST" action="<?php echo base_url().'crear_venta'?>">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="">Codigo</label>
                    <input type="text" name="cod" class="form-control" required placeholder="cod" id="cod">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Comprador</label>
                    <input type="text" name="comprador" class="form-control" required placeholder="Comprador" id="comprador">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Tipo de Pago</label>
                    <input type="text" name="tipo_de_pago" class="form-control" required placeholder="Tipo de Pago" id="tipo_de_pago">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="">Nro Tarjeta Credito</label>
                    <input type="text" name="TC" class="form-control" required placeholder="TC" id="TC">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
        </form>
    </div>
    </div>

    <table class="table">
        <thead class="table-dark">
            <tr>

                <td>cod</td>
                <td>comprador</td>
                <td>tipo de pago</td>
                <td>nro Tarjeta Credito</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($ventas as $venta) :?>
                <tr>
                    
                    <td><?php echo $venta->cod ?></td>
                    <td><?php echo $venta->comprador ?></td>
                    <td><?php echo $venta->tipo_de_pago ?></td>
                    <td><?php echo $venta->TC ?></td>
        
                    <td><a href='<?php echo base_url().'get_idventa/'.$venta->id ?>' class='btn btn-warning btn-sm'>Editar</a></td>
                    <td><a href='<?php echo base_url().'eliminar_venta/'.$venta->id ?>' class='btn btn-danger btn-sm'>Eliminar</a></td>
                </tr>
        <?php endforeach;?> 
        </tbody>
    </table>





    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
   <!-- <script type="text/javascript">
        Let mensaje = '<?php echo $mensaje ?>';

        if(mensaje == '1')
        {
            alert("Agregado con exito");
        }
        else if(mensaje=='0')
        {
            alert("no se agrego");
        }
    </script>
    Modal Videojuegos 
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Adiciona Videojuego</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="POST" action="<?php echo base_url().'/crear' ?>">
            <div class="modal-body">
                cod <input type="text" name="cod" id="cod"/><br/>
                nombre <input type="text" name="nombre" id="nombre"/><br/>
                genero <input type="text" name="genero" id="genero"/><br/>
                precio <input type="text" name="precio" id="precio"/><br/>
                consola <input type="text" name= "consola" id= "consola"/><br/>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" name="Save changes" value="Save"/>
            </div>
        </form>

    </div>
    </div>

        -->
    <!-- Modal -->
    <!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Huevo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="POST" action="{{route("$adi")}}">

            <div class="modal-body">
                id <input type="text" name="id" id="id"/><br/>
                nombre <input type="text" name="nombre" id="nombre"/><br/>
                apellido <input type="text" name="apellido" id="apellido"/><br/>
                edad <input type="text" name="edad" id="edad"/><br/>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-secondary" data-bs-dismiss="modal" name="Close" value="Close"/>
                <input type="submit" class="btn btn-primary" name="Save changes" value="Save"/>
            </div>
        </form>
        </div>
    </div>
    </div>-->



    <!--<form method="POST" action="<?php echo site_url(); ?>">
        Nombre <input type="text" name="nombre"/>
        <input type="submit" name="enviar"/>
    </from>
        --> 
    
</body>
</html>
