<?php
    $url = file_get_contents('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi/more?name=bali');
    $data = json_decode($url, TRUE);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Info Covid</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <!-- File JS -->
        <script src="main.js"></script>

        <style>
            body{
                background-color:white;
                color: black;
            }

            .dark-mode{
                background-color:black;
                color:white;
            }
        </style>
</head>
<body>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="nav navbar-nav">
        <a href="s.id/nda_manda" class="nav-item nav-link active"><i class="fa fa-home"></i> Home</a>
        <div class="btn-group btn-group-sm justify-content-end" role="group" aria-label="Basic example">
            <button onclick="myFunction()" type="button" class="btn btn-secondary">Dark</button>
            <button onclick="myFunction()" type="button" class="btn btn-secondary">Light</button>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="row mt-4">
            <!-- Alert -->
            <div class="col-md-12">
            <div class="alert alert-primary" role="alert">
                <strong>Update</strong> Data Covid Provinsi Bali
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card badge-primary p-3 mb-5 shadow rounded">
                <div class="card-body">
                    <h4 class="card-title text-center"><i class="fa fa-frown-open"></i> TOTAL KASUS</h4>
                    <p class="card-text text-center"><?= $data[0]['kasus'];?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card badge-warning p-3 mb-5 shadow rounded">
                <div class="card-body">
                    <h4 class="card-title text-white text-center"><i class="fa fa-grin-alt"></i> DIRAWAT</h4>
                    <p class="card-text text-white text-center"><?= $data[0]['dirawat'];?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card badge-success p-3 mb-5 shadow rounded">
                <div class="card-body">
                    <h4 class="card-title text-center"><i class="fa fa-grin-alt"></i> SEMBUH</h4>
                    <p class="card-text text-center"><?= $data[0]['sembuh'];?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card badge-danger p-3 mb-5 shadow rounded">
                <div class="card-body">
                    <h4 class="card-title text-center"><i class="fa fa-frown-open"></i> MENINGGAL</h4>
                    <p class="card-text text-center"><?= $data[0]['meninggal'];?></p>
                </div>
            </div>
        </div>
</div>
        <div class="row justify-content-center">
        <div class="col-sm-3">
            <div class="card badge-dark p-3 mb-5 shadow rounded">
                <div class="card-body">
                    <h4 class="card-title text-center"><i class="fa fa-frown-open"></i> UPDATE</h4>
                    <p class="card-text text-center"><?= $data[0]['last_date'];?></p>
                </div>
            </div>
        </div>  
        </div>
        



        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="text-center mb-4">
                <a href="https://kawalcovid19.id/" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Selengkapnya &raquo;</a>
           </div>
        </div>
        </div>
    </div>

        <!-- Footer -->
        <footer>
            <div class="card-footer bg-dark text-light">
                <div class="text-center container my-auto">
                    Made with &hearts; by <a href="https://instagram.com/nda_mndaa" target="_blank" rel="noopener noreferrer">Manda</a> 
                </div>
            </div>  
        </footer>

</body>
</html>