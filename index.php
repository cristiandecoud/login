<?php 
    session_start();
    require_once "./inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once 'inc/head.php'; ?>
    <body>
        <div class="container">
            <div class="row d-flex justify-content-around mt-5">
                <div class="card col-md-6 col-md-offset-6">
                    <article class="card-body">
                        <h4 class="card-title mb-4 mt-1 text-center">Login</h4>
                        <form action="POST" class="form_login">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" placeholder="username" require>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                        <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>
                    </article>
                </div>
            </div>
        </div>
        <?php include_once 'inc/footer.php'; ?>
    </body>
</html>