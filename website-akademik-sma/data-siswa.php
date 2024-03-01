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
                            Data Siswa - SMA
                            <a href="add-siswa.php" class="btn btn-success float-end">Tambah Data Siswa</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>No Telepon</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
                                    <th>Angkatan</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('dbcon.php');

                                    $ref_table = 'data_siswa';
                                    $fetchdata = $database->getReference($ref_table)->getValue();

                                    if($fetchdata > 0)
                                    {
                                        $i=1;
                                        foreach($fetchdata as $key => $row)
                                        {
                                            ?>
                                                <tr>
                                                    <td><?=$i++;?></td>
                                                    <td><?=$row['nisn'];?></td>
                                                    <td><?=$row['nama_siswa'];?></td>
                                                    <td><?=$row['jenis_kelamin'];?></td>
                                                    <td><?=$row['email'];?></td>
                                                    <td><?=$row['no'];?></td>
                                                    <td><?=$row['alamat'];?></td>
                                                    <td><?=$row['kelas'];?></td>
                                                    <td><?=$row['angkatan'];?></td>
                                                    <td>
                                                        <a href="edit-siswa.php?id=<?=$key;?>" class="btn btn-primary btn-sm">Edit</a>
                                                    </td>
                                                    <td>
                                                       <!-- <a href="delete-siswa.php" class="btn btn-danger btn-sm">Hapus</a> -->
                                                       <form action="code.php" method="POST">
                                                            <button type="submit" name="delete_btn" value="<?=$key?>" class="btn btn-danger btn-sm">Hapus</button>
                                                       </form>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="7">Data tidak ditemukan</td>
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