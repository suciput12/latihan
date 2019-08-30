<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    \</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="BUAT FORM"></script>
</head>
<body>
    <FORM ACTION="prosesbuatform.php" METHOD="POST" NAME="INPUT">
    Nama         <br> <input type="text" name="Nama"><br>         
    Alamat        <input type="textarea" name="Alamat"><br>
    Kecamatan     <input type="text" name="Kecamatan"><br> 
    Kota     <input type="text" name="Kota"><br> 
    Provinsi      <input type="text" name="Provinsi"><br> 
    kode pos      <input type="number" name="kodepos"><br>
    Nama barang   <input type="text" name="Namabarang"><br>
    Harga barang <input type="number" name="Hargabarang"><br>
    Jumlah barang <input type="number" name="Jumlahbarang"><br>
    deksripsi      <br><textarea name="deskripsi"  cols="40" rows="2"></textarea> <br>
    tanggal pembelian  <input type="date" name="tanggal pembelian"><br>
    bayar       <input type="number" name="bayar"><br>
    total bayar  <input type="number" name="total_bayar"> <br>
    <br>
    <input type="submit" name="SIMPAN" value="SIMPAN">          
    <input type="reset" name="RESET" value="RESET"> 

</body>
</html>