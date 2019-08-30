<?php
    if (isset($_POST['SIMPAN'])) {   
        $Nama   =   $_POST['Nama'];     
        $Alamat   =   $_POST['Alamat']; 
        $Kecamatan   =   $_POST['Kecamatan'];     
        $Kota  =   $_POST['kota'];
        $Provinsi  =   $_POST['Provinsi'];     
        $Kodepos    =   $_POST['kodepos'];
        $Namabarang  =   $_POST['Namabarang']; 
        $Hargabarang  =   $_POST['Hargabarang'];     
        $Jumlahbarang  =   $_POST['Jumlahbarang']; 
        $deskripsi   =   $_POST['deskripsi']; 
        $tanggalpembelian   =   $_POST['tanggalpembelian'];
        $bayar   =   $_POST['bayar'];
        $total_bayar   =   $_POST['totalbayar']; 
    }
    
    $bayar=($Jumlahbarang*$Hargabarang); {
    echo "dengan membayar :  Rp ." .$bayar ;
    
    }
    if ($Jumlahbarang > 5) {
    $diskon=(($bayar*10)/100);
    $total_bayar=($bayar-$diskon);
    echo "dengan total barang  : Rp." .$bayar;
    
    }elseif ($Jumlahbarang <0 ) {
    echo "tidak dapat di proses";
}



        echo "Nama : " .$Nama ."<br>";    
        echo "Alamat  : " .$Alamat . "<br>";   
        echo "Kecamatan : " . $Kecamatan . "<br>";  
        echo "Kota : " . $Kota . "<br>";   
        echo "Provinsi : "  .$Provinsi . "<br>";   
        echo "Kodepos  :" . $Kodepos . "<br>";    
        echo "Namabarang : " . $Namabarang . "<br>";
        echo "Hargabarang : " . $Hargabarang . "<br>";
        echo "deskripsi : " . $deskripsi . "<br>"; 
        echo "tanggalpembelian  : "  .$tanggalpembelian . "<br>"; 
     
        ?>