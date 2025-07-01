<?php
require_once(__DIR__ . "/../config/session.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create balance</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <style>
        .script {
            z-index: 9999;
        }
    </style>
    <div class="script">
        <script>
            window.onload = function() {
                <?php if (isset($_SESSION['success'])) : ?>
                    Swal.fire("Success", "<?= $_SESSION['success'] ?>", "success");
                <?php endif ?>

                <?php if (isset($_SESSION['error'])) : ?>
                    Swal.fire("Error", "<?= $_SESSION['error'] ?>", "error");
                <?php endif ?>
            };
        </script>
    </div>
    <?php
    if (isset($_SESSION['success'])) :
        echo '<script>console.log("Success message: ' . $_SESSION['success'] . '");</script>';
    endif;

    if (isset($_SESSION['error'])) :
        echo '<script>console.log("Error message: ' . $_SESSION['error'] . '");</script>';
    endif;
    ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">

                <div class="d-flex justify-content-between mb-2">
                    <h2 class="text-center">Create balance</h2>
                    <a href="view" class="btn btn-outline-dark">View Transaction</a>
                    <a href="create" class="btn btn-outline-dark">create transactions</a>

                </div>

                <div class="card">
                    <div class="card-body">
                        <form action="../inc/insert.include.php" method="post">
                            <!-- <input type="hidden" name="id" value="1"> -->
                            <input type="text" name="bank_name" class="form-control mt-2" id="" placeholder="Enter bank name">
                            <input type="text" name="account_number" class="form-control mt-2" id="" placeholder="Enter account number">
                            <input type="text" name="account_type" class="form-control mt-2" id="" placeholder="Enter account type">
                            <input type="text" name="balance" class="form-control mt-2" id="" placeholder="Enter balance amount">
                            
                            <textarea name="foreign_writeup" id="" placeholder="Foreign transaction details" class="form-control mt-2"></textarea>
                            <input type="submit" value="Update" class="btn btn-dark w-100 mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

    <script src="assets/sweetalert/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert/sweetalert/jquery-3.6.4.min.js"></script>
</body>

</html>

<?php
unset($_SESSION['success'], $_SESSION['error']);
?>