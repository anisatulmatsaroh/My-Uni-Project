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
                            Data Mata Pelajaran - SMA
                            <a href="add-mapel.php" class="btn btn-success float-end">Tambah Data Mapel</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Mapel</th>
                                    <th>Jurusan</th>
                                    <th>Tingkat</th>
                                    <th>Guru Pengampu</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('dbcon.php');

                                    $ref_table = 'data_mapel';
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
                                                    <td><?=$row['nama_mapel'];?></td>
                                                    <td><?=$row['jurusan'];?></td>
                                                    <td><?=$row['tingkat'];?></td>
                                                    <td><?=$row['guru_pengampu'];?></td>
                                                    <td>
                                                        <a href="edit-mapel.php?id=<?=$key;?>" class="btn btn-primary btn-sm">Edit</a>
                                                    </td>
                                                    <td>
                                                       <!-- <a href="delete-mapel.php" class="btn btn-danger btn-sm">Hapus</a> -->
                                                       <form action="code.php" method="POST">
                                                            <button type="submit" name="delete_mapel_btn" value="<?=$key?>" class="btn btn-danger btn-sm">Hapus</button>
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