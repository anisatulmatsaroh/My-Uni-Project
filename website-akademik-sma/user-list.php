<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container">
<div class="row">
     <div class="col-md-12">

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
                            Akun Pengguna
                           
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Akses Sebagai</th>
                                    <th>Aktif/Tidak Aktif</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    include('dbcon.php');
                                    $users = $auth->listUsers();

                                    $i=1;
                                    foreach ($users as $user) {
                                        ?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$user->displayName?></td>
                                            <td><?=$user->phoneNumber?></td>
                                            <td><?=$user->email?></td>
                                            <td>
                                                <span class="border bg-warning p-2">
                                                    <?php
                                                        $claims = $auth->getUser($user->uid)->customClaims;
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
                                                </span>
                                            </td>
                                            <td>
                                                <?php
                                                if ($user->disabled) {
                                                   echo "Tidak Aktif";
                                                }else {
                                                    echo "Aktif";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="user-edit.php?id=<?=$user->uid;?>" class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <!-- <a href="user-delete.php" class="btn btn-danger">Hapus</a> -->
                                                <form action="code.php" method="POST">
                                                    <button type="submit" name="user_delete_btn" value="<?=$user->uid;?>" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include('includes/footer.php');
?>