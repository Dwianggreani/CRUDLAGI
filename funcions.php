<?php

//koneksi ke database
$conn =mysqli_connect("localhost","root","", "dwi");


function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) );    {
        $row[] = $row;
    }
    return $rows;
}



function tambah ($data){
global $conn;

$foto = htmlspecialchars ($data["foto"]);
$nama = htmlspecialchars ($data["nama"]);
$npm = htmlspecialchars ($data["npm"]);
$jurusan = htmlspecialchars ($data["jurusan"]);


$query = "INSERT INTO mahasiswa 
            VALUES
            ('','$foto','$nama','$npm','$jurusan')

            ";
mysqli_query($conn, $query );

return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");  
    return mysqli_affected_rows($conn);
}

function register($data) {
    global $conn;

    $username = strtolower( stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
 
    //cek konfirmasi password
    if ( $password!== $password2) {
        echo "<script>
                alert('Konfirmasi password Tidak Sesuai');
                </script>";
        return false;
    }
}
 

?>  