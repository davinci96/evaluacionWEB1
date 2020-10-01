<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Punto 1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
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

</heador>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
            <form class="mt-5" action="index.php" method="POST">
                <h4 class="text-center">Calculadora</h4>
                <div class="row">
                    <div class="col">
                    <input type="number" class="form-control" placeholder="numero" name="numero1">
                    </div>
                    <div class="col">
                    <input type="number" class="form-control" placeholder="numero" name="numero2">
                    </div>
                    <div class="col">
                    <select class="form-control" name="operacion">
                        <option value="1">suma</option>
                        <option value="2">resta</option>
                        <option value="3">multiplicacion</option>
                        <option value="4">division</option>
                    </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-5" name="botonEnvio">Submit</button>
                </form>

                <?php if(isset($_POST[("botonEnvio")])): ?>

                <?php 
                    $operacion1=$_POST["operacion"];
                    $numero11=$_POST["numero1"];
                    $numero22=$_POST["numero2"];
                    
                    switch($operacion1){
                        case 1:
                            $suma=$numero11+$numero22;
                            echo("La suma es: ".$suma);
                        break;
                        case 2:
                            $resta=$numero11-$numero22;
                            echo("La resta es: ".$resta);
                        break;
                        case 3:
                            $mult=$numero11*$numero22;
                            echo("La multiplicacion es: ".$mult);
                        break;
                        case 4:
                            $division=$numero11/$numero22;
                            echo("La division es ".$division);
                        break;
                    }
                ?>

                <?php endif ?>

                

            </div>
        </div>
    </div>

</main>
<footer>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>