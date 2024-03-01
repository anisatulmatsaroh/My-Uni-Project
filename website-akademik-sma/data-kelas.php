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
                            Data Kelas - SMA
                            <a href="add-kelas.php" class="btn btn-success float-end">Tambah Data Kelas</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Ruangan</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('dbcon.php');

                                    $ref_table = 'data_kelas';
                                    $fetchdata = $database->getReference($ref_table)->getValue();

                                    if($fetchdata > 0)
                                    {
                                        $i=1;
                                        foreach($fetchdata as $key => $row)
                                        {
                                            ?>
                                                <tr>
                                                    <td><?=$i++;?></td>
                                                    <td><?=$row['kode'];?></td>
                                                    <td><?=$row['nama_kelas'];?></td>
                                                    <td><?=$row['wali_kelas'];?></td>
                                                    <td><?=$row['jurusan'];?></td>
                                                    <td><?=$row['ruangan'];?></td>
                                                    <td><?=$row['jumlah_siswa'];?></td>
                                                    <td>
                                                        <a href="edit-kelas.php?id=<?=$key;?>" class="btn btn-primary btn-sm">Edit</a>
                                                    </td>
                                                    <td>
                                                       <!-- <a href="delete-kelas.php" class="btn btn-danger btn-sm">Hapus</a> -->
                                                       <form action="code.php" method="POST">
                                                            <button type="submit" name="delete_kelas_btn" value="<?=$key?>" class="btn btn-danger btn-sm">Hapus</button>
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