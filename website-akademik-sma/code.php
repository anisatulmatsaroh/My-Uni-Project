<?php
session_start();
include('dbcon.php');


   //-----------------------KOTAK SARAN----------------------

   if (isset($_POST['delete_saran_btn'])) {
    $del_id = $_POST['delete_saran_btn'];

    $ref_table = 'kotak_saran/'.$del_id;
    $deletequery_result = $database->getReference($ref_table)->remove();

    if ($deletequery_result) 
    {
        $_SESSION['status'] = "Data berhasil dihapus";
        header('Location: lihat-saran.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil dihapus";
        header('Location: lihat-saran.php');
    }

} 
    
if(isset($_POST['save_saran']))
{
    $nama = $_POST['nama'];
    $saran = $_POST['saran'];

    $postData = [
        'nama_nisn'=>$nama,
        'saran'=>$saran,
    ];

    $ref_table = "kotak_saran";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if ($postRef_result) 
    {
        $_SESSION['status'] = "Saran berhasil dikirimkan";
        header('Location: home.php');
    }
    else
    {
        $_SESSION['status'] = "Saran tidak berhasil dikirimkan";
        header('Location: home.php');
    }


}

//--------------------------SETTING AKUN------------------

if (isset($_POST['role_btn'])) {
    
    $uid = $_POST['role_uid'];
    $roles = $_POST['pilih_role'];

    if ($roles == "admin") {
        $auth->setCustomUserClaims($uid, ['admin' => true]);
        $msg = "Pengguna sebagai Admin";
    }
    elseif ($roles == "guru") {
        $auth->setCustomUserClaims($uid, ['guru' => true]);
        $msg = "Pengguna sebagai Guru";
    }
    elseif ($roles == "siswa") {
        $auth->setCustomUserClaims($uid, ['siswa' => true]);
        $msg = "Pengguna sebagai Siswa";
    }
    elseif ($roles == "hapus") {
        $auth->setCustomUserClaims($uid, null);
        $msg = "Role Dihapuskan";
    }

    if ($msg) {
        $_SESSION['status'] = "$msg";
        header("Location: user-edit.php?id=$uid");
        exit();
    }else{
        $_SESSION['status'] = "Eror";
        header("Location: user-edit.php?id=$uid");
        exit();
    }
}



if (isset($_POST['ubah_pass_btn'])) {

    $new_password = $_POST['new_password'];
    $retype_password = $_POST['retype_password'];
    $uid = $_POST['ubah_pass_uid'];

    if ($new_password == $retype_password) {
        $updatedUser = $auth->changeUserPassword($uid, $new_password);
        if ($updatedUser) {
            $_SESSION['status'] = "Password Berhasil diubah";
            header('Location: user-list.php');
            exit();
        }else{
            $_SESSION['status'] = "Password Tidak Berhasil Diubah";
            header('Location: user-list.php');
            exit();
        }
    }
    else {
        $_SESSION['status'] = "Password tidak sama.";
        header("Location: user-edit.php?id=$uid");
        exit();
    }
    
}



if (isset($_POST['endis_btn'])) {

    $disable_enable = $_POST['pilih_aktif_tidak'];
    $uid = $_POST['endis_uid'];

    if ($disable_enable == "disable") {
        $updatedUser = $auth->disableUser($uid);
        $msg = "Akun Dinonaktifkan";
    }
    else {
        $updatedUser = $auth->enableUser($uid);
        $msg = "Akun Diaktifkan";
    }

    if ($updatedUser) {
        $_SESSION['status'] = $msg;
        header('Location: user-list.php');
        exit();
    }else{
        $_SESSION['status'] = "Eror";
        header('Location: user-list.php');
        exit();
    }
}



if (isset($_POST['user_delete_btn'])) {
    $uid = $_POST['user_delete_btn'];

    try {
        $auth->deleteUser($uid);

        $_SESSION['status'] = "Akun berhasil dihapus";
        header('Location: user-list.php');
        exit();

    } catch (\Throwable $th) {
         $_SESSION['status'] = "Akun tidak berhasil dihapus";
        header('Location: user-list.php');
        exit();
    }
    
}


if (isset($_POST['update_user_btn'])) {
    $displayname= $_POST['display_name'];
    $notelp = $_POST['no'];

    $uid = $_POST['user_id'];
    $properties = [
        'displayName' => $displayname,
        'phoneNumber' => $notelp,
    ];

    $updatedUser = $auth->updateUser($uid, $properties);

    if ($updatedUser) {
        $_SESSION['status'] = "Akun berhasil diperbarui";
        header('Location: user-list.php');
        exit();
    }else{
        $_SESSION['status'] = "Akun tidak berhasil diperbarui";
        header('Location: user-list.php');
        exit();
    }

}

//-----------------BUAT AKUN--------------------------

if (isset($_POST['daftar_btn'])) {
    $fullname = $_POST['full_name'];
    $notelp = $_POST['no'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'phoneNumber' => '+62'.$notelp,
        'password' => $pass,
        'displayName' => $fullname,
    ];

    $createdUser = $auth->createUser($userProperties);

    if ($createdUser) {
        $_SESSION['status'] = "Akun berhasil dibuat";
        header('Location: daftar.php');
        exit();
    }else{
        $_SESSION['status'] = "Akun tidak berhasil dibuat";
        header('Location: daftar.php');
        exit();
    }

} 



//-----------------------JADWAL----------------------
    
if (isset($_POST['delete_jadwal_btn'])) {
    $del_id = $_POST['delete_jadwal_btn'];

    $ref_table = 'data_jadwal/'.$del_id;
    $deletequery_result = $database->getReference($ref_table)->remove();

    if ($deletequery_result) 
    {
        $_SESSION['status'] = "Data berhasil dihapus";
        header('Location: data-jadwal.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil dihapus";
        header('Location: data-jadwal.php');
    }

} 


if (isset($_POST['update_jadwal'])) {

    $key = $_POST['key'];
    $mapel = $_POST['mapel'];
    $kelas = $_POST['kelas'];
    $guru_pengampu = $_POST['guru_pengampu']; 
    $hari = $_POST['hari'];    
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];
    $ruangan = $_POST['ruangan'];


    $updateData = [
        'mapel'=>$mapel,
        'kelas'=>$kelas,
        'guru_pengampu'=>$guru_pengampu,
        'hari'=>$hari,
        'mulai'=>$mulai,
        'selesai'=>$selesai,
        'ruangan'=>$ruangan,
    ];

    $ref_table = 'data_jadwal/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if ($updatequery_result) 
    {
        $_SESSION['status'] = "Data berhasil diperbarui";
        header('Location: data-jadwal.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil diperbarui";
        header('Location: data-jadwal.php');
    }

} 


if(isset($_POST['save_jadwal']))
{
    $mapel = $_POST['mapel'];
    $kelas = $_POST['kelas'];
    $guru_pengampu = $_POST['guru_pengampu']; 
    $hari = $_POST['hari'];    
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];
    $ruangan = $_POST['ruangan'];

    $postData = [
        'mapel'=>$mapel,
        'kelas'=>$kelas,
        'guru_pengampu'=>$guru_pengampu,
        'hari'=>$hari,
        'mulai'=>$mulai,
        'selesai'=>$selesai,
        'ruangan'=>$ruangan,
    ];

    $ref_table = "data_jadwal";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if ($postRef_result) 
    {
        $_SESSION['status'] = "Data berhasil ditambahkan";
        header('Location: data-jadwal.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil ditambahkan";
        header('Location: data-jadwal.php');
    }


}  

//-----------------------KELAS----------------------
    
 if (isset($_POST['delete_kelas_btn'])) {
    $del_id = $_POST['delete_kelas_btn'];

    $ref_table = 'data_kelas/'.$del_id;
    $deletequery_result = $database->getReference($ref_table)->remove();

    if ($deletequery_result) 
    {
        $_SESSION['status'] = "Data berhasil dihapus";
        header('Location: data-kelas.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil dihapus";
        header('Location: data-kelas.php');
    }

} 


if (isset($_POST['update_kelas'])) {

    $key = $_POST['key'];
    $kode = $_POST['kode'];
    $name_kelas = $_POST['name_kelas'];
    $wali_kelas = $_POST['wali_kelas'];    
    $jurusan = $_POST['jurusan'];
    $ruangan = $_POST['ruangan'];
    $jumlah_siswa = $_POST['jumlah_siswa'];


    $updateData = [
        'kode'=>$kode,
        'nama_kelas'=>$name_kelas,
        'wali_kelas'=>$wali_kelas,
        'jurusan'=>$jurusan,
        'ruangan'=>$ruangan,
        'jumlah_siswa'=>$jumlah_siswa,
    ];

    $ref_table = 'data_kelas/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if ($updatequery_result) 
    {
        $_SESSION['status'] = "Data berhasil diperbarui";
        header('Location: data-kelas.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil diperbarui";
        header('Location: data-kelas.php');
    }

} 


if(isset($_POST['save_kelas']))
{
    $kode = $_POST['kode'];
    $name_kelas = $_POST['name_kelas'];
    $wali_kelas = $_POST['wali_kelas'];    
    $jurusan = $_POST['jurusan'];
    $ruangan = $_POST['ruangan'];
    $jumlah_siswa = $_POST['jumlah_siswa'];

    $postData = [
        'kode'=>$kode,
        'nama_kelas'=>$name_kelas,
        'wali_kelas'=>$wali_kelas,
        'jurusan'=>$jurusan,
        'ruangan'=>$ruangan,
        'jumlah_siswa'=>$jumlah_siswa,
    ];

    $ref_table = "data_kelas";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if ($postRef_result) 
    {
        $_SESSION['status'] = "Data berhasil ditambahkan";
        header('Location: data-kelas.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil ditambahkan";
        header('Location: data-kelas.php');
    }


}  

//-----------------------MATA PELAJARAN----------------------
    
   if (isset($_POST['delete_mapel_btn'])) {
    $del_id = $_POST['delete_mapel_btn'];

    $ref_table = 'data_mapel/'.$del_id;
    $deletequery_result = $database->getReference($ref_table)->remove();

    if ($deletequery_result) 
    {
        $_SESSION['status'] = "Data berhasil dihapus";
        header('Location: data-mapel.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil dihapus";
        header('Location: data-mapel.php');
    }

} 


if (isset($_POST['update_mapel'])) {

    $key = $_POST['key'];
    $kode = $_POST['kode'];
    $name_mapel = $_POST['name_mapel'];
    $jurusan = $_POST['jurusan'];
    $tingkat = $_POST['tingkat'];
    $guru_pengampu = $_POST['guru_pengampu'];

    $updateData = [
        'kode'=>$kode,
        'nama_mapel'=>$name_mapel,
        'jurusan'=>$jurusan,
        'tingkat'=>$tingkat,
        'guru_pengampu'=>$guru_pengampu,
    ];

    $ref_table = 'data_mapel/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if ($updatequery_result) 
    {
        $_SESSION['status'] = "Data berhasil diperbarui";
        header('Location: data-mapel.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil diperbarui";
        header('Location: data-mapel.php');
    }

} 


if(isset($_POST['save_mapel']))
{
    $kode = $_POST['kode'];
    $name_mapel = $_POST['name_mapel'];
    $jurusan = $_POST['jurusan'];
    $tingkat = $_POST['tingkat'];
    $guru_pengampu = $_POST['guru_pengampu'];

    $postData = [
        'kode'=>$kode,
        'nama_mapel'=>$name_mapel,
        'jurusan'=>$jurusan,
        'tingkat'=>$tingkat,
        'guru_pengampu'=>$guru_pengampu,
    ];

    $ref_table = "data_mapel";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if ($postRef_result) 
    {
        $_SESSION['status'] = "Data berhasil ditambahkan";
        header('Location: data-mapel.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil ditambahkan";
        header('Location: data-mapel.php');
    }


}

   //-----------------------GURU----------------------
    
   if (isset($_POST['delete_guru_btn'])) {
    $del_id = $_POST['delete_guru_btn'];

    $ref_table = 'data_guru/'.$del_id;
    $deletequery_result = $database->getReference($ref_table)->remove();

    if ($deletequery_result) 
    {
        $_SESSION['status'] = "Data berhasil dihapus";
        header('Location: data-guru.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil dihapus";
        header('Location: data-guru.php');
    }

} 


if (isset($_POST['update_guru'])) {

    $key = $_POST['key'];
    $nip = $_POST['nip'];
    $name_guru = $_POST['name_guru'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $alamat = $_POST['alamat'];
    $jenisptk = $_POST['jenis_ptk'];
    $status = $_POST['status'];

    $updateData = [
        'nip'=>$nip,
        'nama_guru'=>$name_guru,
        'jenis_kelamin'=>$jk,
        'email'=>$email,
        'no'=>$no,
        'alamat'=>$alamat,
        'jenis_ptk'=>$jenisptk,
        'status'=>$status,
    ];

    $ref_table = 'data_guru/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if ($updatequery_result) 
    {
        $_SESSION['status'] = "Data berhasil diperbarui";
        header('Location: data-guru.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil diperbarui";
        header('Location: data-guru.php');
    }

} 


if(isset($_POST['save_guru']))
{
    $nip = $_POST['nip'];
    $name_guru = $_POST['name_guru'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $alamat = $_POST['alamat'];
    $jenisptk = $_POST['jenis_ptk'];
    $status = $_POST['status'];

    $postData = [
        'nip'=>$nip,
        'nama_guru'=>$name_guru,
        'jenis_kelamin'=>$jk,
        'email'=>$email,
        'no'=>$no,
        'alamat'=>$alamat,
        'jenis_ptk'=>$jenisptk,
        'status'=>$status,
    ];

    $ref_table = "data_guru";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if ($postRef_result) 
    {
        $_SESSION['status'] = "Data berhasil ditambahkan";
        header('Location: data-guru.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil ditambahkan";
        header('Location: data-guru.php');
    }


}

//-----------------------NILAI----------------------


if (isset($_POST['update_nilai'])) {

    $key = $_POST['key'];
    $nisn = $_POST['nisn'];
    $name_siswa = $_POST['name_siswa'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    $angkatan = $_POST['angkatan'];
    $nilai = $_POST['nilai'];

    $updateData = [
        'nisn'=>$nisn,
        'nama_siswa'=>$name_siswa,
        'jenis_kelamin'=>$jk,
        'email'=>$email,
        'no'=>$no,
        'alamat'=>$alamat,
        'kelas'=>$kelas,
        'angkatan'=>$angkatan,
        'nilai'=>$nilai,
    ];

    $ref_table = 'data_siswa/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if ($updatequery_result) 
    {
        $_SESSION['status'] = "Data berhasil diperbarui";
        header('Location: data-nilai.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil diperbarui";
        header('Location: data-nilai.php');
    }

} 



    //-----------------------SISWA----------------------

if (isset($_POST['delete_btn'])) {
    $del_id = $_POST['delete_btn'];

    $ref_table = 'data_siswa/'.$del_id;
    $deletequery_result = $database->getReference($ref_table)->remove();

    if ($deletequery_result) 
    {
        $_SESSION['status'] = "Data berhasil dihapus";
        header('Location: data-siswa.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil dihapus";
        header('Location: data-siswa.php');
    }

} 

if (isset($_POST['update_siswa'])) {

    $key = $_POST['key'];
    $nisn = $_POST['nisn'];
    $name_siswa = $_POST['name_siswa'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    $angkatan = $_POST['angkatan'];
    $nilai = $_POST['nilai'];

    $updateData = [
        'nisn'=>$nisn,
        'nama_siswa'=>$name_siswa,
        'jenis_kelamin'=>$jk,
        'email'=>$email,
        'no'=>$no,
        'alamat'=>$alamat,
        'kelas'=>$kelas,
        'angkatan'=>$angkatan,
        'nilai'=>$nilai,
    ];

    $ref_table = 'data_siswa/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if ($updatequery_result) 
    {
        $_SESSION['status'] = "Data berhasil diperbarui";
        header('Location: data-siswa.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil diperbarui";
        header('Location: data-siswa.php');
    }

} 


if(isset($_POST['save_siswa']))
{
    $nisn = $_POST['nisn'];
    $name_siswa = $_POST['name_siswa'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    $angkatan = $_POST['angkatan'];
    $nilai = $_POST['nilai'];

    $postData = [
        'nisn'=>$nisn,
        'nama_siswa'=>$name_siswa,
        'jenis_kelamin'=>$jk,
        'email'=>$email,
        'no'=>$no,
        'alamat'=>$alamat,
        'kelas'=>$kelas,
        'angkatan'=>$angkatan,
        'nilai'=>$nilai,
    ];

    $ref_table = "data_siswa";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if ($postRef_result) 
    {
        $_SESSION['status'] = "Data berhasil ditambahkan";
        header('Location: data-siswa.php');
    }
    else
    {
        $_SESSION['status'] = "Data tidak berhasil ditambahkan";
        header('Location: data-siswa.php');
    }


}


?>