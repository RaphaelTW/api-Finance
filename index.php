<?php

require_once './config/config.php';
require_once './modules/hg-api.php';

$hg = new Hg_API(HG_API_KEY);
$dolar = $hg->dolar_quatation();

if ($hg->is_error() == false) {
    $variation = ($dolar['variation'] < 0) ? 'danger' : 'info';
}

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8" dir="ltr"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <meta name="description" content="Via Expressa"/>
    <link rel="shortcut icon" href="img/logo-laurentino.png">

    <title>API</title>

    <!--[Icons]-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!--[Bootstrap]-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--[Font Awesome]-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!--[Google Fonts]-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!--[MDB]-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet"/>

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <p>Cotação Dólar</p>
            <?php if ($hg->is_error() == false): ?>
                <p>USD<span class="badge badge-pill badge-primary"><?php echo ($variation); ?><?php echo($dolar['buy']); ?>></></p>
            <?php else: ?>
                <p>USD<span class="badge badge-pill badge-danger">Serviço Indisponivel</span></p>
            <?php endif; ?>
        </div>
    </div>
</div>


<!--[Link ajax]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<!--[Popperjs]-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<!--[Popperjs]-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
<!--[Bootstrap]-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<!--[MDB]-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>
