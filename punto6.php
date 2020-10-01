<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Punto 1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
            <a class="nav-link" href="punto2.php">Punto 2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="punto3.php">Punto 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="punto4.php">Punto 4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="punto5.php">Punto 5</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="punto6.php">Punto 6</a>
        </li>

        </ul>

    </div>
    </nav>

</header>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
            <form class="mt-5" action="punto6.php" method="POST">
                <h4 class="text-center">Calcular numeros pares</h4>
                <div class="row">
                    <div class="col">
                    <input type="number" class="form-control" placeholder="numero" name="numero[]" step="any">
                    </div>
                    <div class="col">
                    <input type="number" class="form-control" placeholder="numero" name="numero[]" step="any">
                    </div>
                    <div class="col">
                    <input type="number" class="form-control" placeholder="numero" name="numero[]" step="any">
                    </div>
                    <div class="col">
                    <input type="number" class="form-control" placeholder="numero" name="numero[]" step="any">
                    </div>
                    <div class="col">
                    <input type="number" class="form-control" placeholder="numero" name="numero[]" step="any">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-5" name="botonEnvio">Calcular</button>
                </form>

                <?php if(isset($_POST[("botonEnvio")])): ?>

                <?php 
                    $numeros=$_POST["numero"];
                    $suma=0;
                    
                    foreach($numeros as $valor){
                        if($valor%2==0){
                            $suma=$suma+$valor;
                        }
                    }
                    echo("La suma de los pares es: ".$suma);

                ?>

                    <table class="table">
                        <thead>
                            <tr>

                            <th scope="col">Numeros pares</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($numeros as $valor):
                                    if($valor%2==0):
                                        
                                    
                                ?>
                            
                            <tr>
                            <th scope="row"><?php echo($valor) ?></th>
                            <td>  </td>

                            </tr>

                            
                                    <?php   endif; endforeach?>
                        </tbody>
                    </table>

                <?php endif ?>

                

            </div>
        </div>
    </div>

<main>

</main>

<footer>

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<body>
    
</body>
</html>