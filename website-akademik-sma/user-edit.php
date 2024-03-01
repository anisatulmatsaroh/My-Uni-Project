<?php
include('authentication.php');
include('includes/header.php');
include('dbcon.php');
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
                            Edit Akun
                            <a href="user-list.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">
                        
                            <?php
                                include('dbcon.php');

                                if (isset($_GET['id'])) {
                                    $uid = $_GET['id'];
                                    try {
                                        $user = $auth->getUser($uid);
                                        ?>
                                        <input type="hidden" name="user_id" value=<?=$uid;?>>
                                        <div class="form-group mb-3">
                                            <label for="">Nama</label>
                                            <input type="text" name="display_name" value="<?=$user->displayName;?>" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">No Telepon</label>
                                            <input type="text" name="no" value="<?=$user->phoneNumber;?>" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit" name="update_user_btn" class="btn btn-primary">Update Akun</button>
                                        </div>
                                        <?php
                                   
                                    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                                    echo $e->getMessage();
                                    }
                                }
                                
                                
                            ?>
                            

                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">
                                <h4>Status Akun</h4>
                    </div>
                    <div class="card-body">
                                <form action="code.php" method="POST">

                                <?php
                                    if (isset($_GET['id'])) {
                                        $uid = $_GET['id'];
                                        try {
                                            $user = $auth->getUser($uid);
                                            ?>

                                            
                                    <input type="hidden" name="endis_uid" value="<?= $uid;?>">
                                    <div class="input-group mb-3">
                                        <select name="pilih_aktif_tidak" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <option value="enable">Aktif</option>
                                            <option value="disable">Tidak Aktif</option>
                                        </select>
                                        <button type="submit" name="endis_btn" class="input-group-text btn btn-primary" id="basic-addon2">Submit</button>
                                    </div>
                                <?php

                                    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                                        echo $e->getMessage();
                                    }
                                    }
                                    else {
                                    echo "Id Pengguna Tidak Ditemukan";
                                    }
                                ?>

                                </form>
                    </div>
                </div>
            </div>
            

            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-6">
                <div class="card-mt-4 text-white bg-dark mb-3">
                    <div class="card-header">
                        <h4>Ubah Password</h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">

                                <?php
                                    if (isset($_GET['id'])) {
                                        $uid = $_GET['id'];
                                        try {
                                            $user = $auth->getUser($uid);
                                ?>

                            <input type="hidden" name="ubah_pass_uid" value="<?= $uid;?>">
                            <div class="form-group mb-3">
                                <label for="">Password Baru</label>
                                <input type="text" name="new_password" required class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Konfirmasi Password Baru</label>
                                <input type="text" name="retype_password" required class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="ubah_pass_btn" class="btn btn-primary">Submit</button>
                            </div>
                            <?php

                                    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                                        echo $e->getMessage();
                                    }
                                    }
                                    else {
                                    echo "Id Pengguna Tidak Ditemukan";
                                    }
                                ?>

                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">
                                <h4>Akun Role</h4>
                    </div>
                    <div class="card-body">
                                <form action="code.php" method="POST">

                                <?php
                                    if (isset($_GET['id'])) {
                                        $uid = $_GET['id'];
                                            ?>

                                            
                                    <input type="hidden" name="role_uid" value="<?= $uid;?>">
                                    <div class="form-group mb-3">
                                        <select name="pilih_role" class="form-control" required>
                                            <option value="">Pilih Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="guru">Guru</option>
                                            <option value="siswa">Siswa</option>
                                            <option value="hapus">Hapus Role</option>
                                        </select> 
                                    </div>
                                    <label for="">Akses sebagai:</label>
                                    <h4 class="border bg-warning p-2">
                                        <?php
                                            $claims = $auth->getUser($uid)->customClaims;
                                            if (isset($claims['admin']) == true) {
                                                echo "Admin";
                                            }elseif (isset($claims['guru']) == true) {
                                                echo "Guru";
                                            }elseif (isset($claims['siswa']) == true) {
                                                echo "Siswa";
                                            }elseif ($claims == null) {
                                                echo "Tidak ada";
                                            }
                                        ?>
                                    </h4>
                                        <div class="form-group m-3">
                                            <button type="submit" name="role_btn" class="btn btn-primary">Submit</button>
                                        </div>
                                   
                                <?php

                                    }
                                ?>

                                </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

<?php
include('includes/footer.php');
?>