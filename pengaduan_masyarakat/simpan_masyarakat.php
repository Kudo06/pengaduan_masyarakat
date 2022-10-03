<?php
require './conn/koneksi.php';

$nik  = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$kec  = $_POST['kecamatan'];

$sql = "INSERT INTO masyarakat values('$nik', '$nama', '$user', '$pass', '$telp', '$kec')";
$query = mysqli_query($koneksi, $sql);

if ($query) { ?>
  <script type="text/javascript">
    alert('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
    window.location = "./"
  </script>
<?php
}
?>