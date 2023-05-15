<?php 
require_once '../../database/dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_stok = $_POST['stok'];
   $_harga_jual = $_POST['harga_jual'];
   $_harga_beli = $_POST['harga_beli'];
   $_deskripsi = $_POST['deskripsi'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode;
   $ar_data[]=$_nama;
   $ar_data[]=$_stok;
   $ar_data[]=$_harga_jual;
   $ar_data[]=$_harga_beli;
   $ar_data[]=$_deskripsi;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (kode,nama,stok,harga_Jual,harga_beli,deskripsi) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET kode=?,nama=?,stok=?,harga_jual=?,harga_beli=?,deskripsi=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: tables_produk.php');
?>