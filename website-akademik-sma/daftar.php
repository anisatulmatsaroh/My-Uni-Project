<?php
session_start();
include('includes/header.php');
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

            <?php
             if (isset($_SESSION['status']))
             {
                    echo "<h5 class='alert alert-succes'>" .$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }
                ?>

                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">
                        <h4>
                            Buat Akun
                            
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">
                        
                            <div class="form-group mb-3">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="full_name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">No Telepon</label>
                                <input type="number" name="no" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="text" name="pass" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="daftar_btn" class="btn btn-primary">Buat Akun</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include('includes/footer.php');
?>