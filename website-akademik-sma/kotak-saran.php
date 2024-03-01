<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container p-3 mb-2 bg-dark text-white">
    <div class="row">
        <div class="col-md-12">
                <?php
                if (isset($_SESSION['status']))
                {
                        echo "<h5 class='alert alert-succes'>" .$_SESSION['status']."</h5>";
                        unset($_SESSION['status']);
                    }
                ?>
    <center>
            <h2>Berikan saranmu untuk kemajuan sistem akademik SMA yang lebih baik :)</h2>
            <div class="container">
            <div class="card text-white bg-dark mb-3">
                    <div class="card-header">
                        <h4>
                            Tuliskan Di bawah ini!
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">
                        
                            <div class="form-group mb-3">
                                <label for="">Nama/NISN :</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Saran :</label>
                                <input type="text" name="saran" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_saran" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>

                    </div>
                </div></div>
    </center>      
        </div>
    </div>
</div>



<?php
include('includes/footer.php');
?>