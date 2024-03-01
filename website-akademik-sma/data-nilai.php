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
                            Data Nilai Siswa - SMA
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Nilai</th>
                                    <th>Aksi</th>
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
                                                    <td><?=$row['kelas'];?></td>
                                                    <td><?=$row['nilai'];?></td>
                                                
                                                    <td>
                                                        <a href="edit-nilai.php?id=<?=$key;?>" class="btn btn-primary btn-sm">Input/Edit</a>
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