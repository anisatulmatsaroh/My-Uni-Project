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
            <img src="gambar/tutwuri.PNG" width="400" height="auto">
            <hr>
            <h2>Selamat Datang di Website Resmi Sekolah Menegah Atas</h2>
    </center>      
        </div>
    </div>
</div>



<?php
include('includes/footer.php');
?>