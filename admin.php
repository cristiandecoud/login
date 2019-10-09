<?php 
    session_start();

    if(!isset($_SESSION['user_id'])) {
        header('location: index.php');
    } else {
        require_once "./inc/config.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once 'inc/head.php'; ?>
    <body>
        <div class="container">
            <div class="row d-flex justify-content-around mt-5">
                <div class="card col-md-6 col-md-offset-6">
                    <article class="card-body">
                        <h1>Bienvenido</h1>
                    </article>
                </div>
            </div>
        </div>
        <?php include_once 'inc/footer.php'; ?>
    </body>
</html>