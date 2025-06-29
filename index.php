<?php
// index.php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 d-flex flex-column justify-contents-center">
                <h2 class="text-center">Enter tracking Number</h2>
                <div class="card">
                    <div class="card-body">
                        <form action="inc/tracking.include.php" method="get">
                            <input type="number" name="tracking_number" class="form-control mt-2" placeholder="Tracking number" id="">
                            <input type="submit" value="Validate" class="btn btn-dark w-100 mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</body>

</html>