<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>\</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fleidset>
     <legend>pendaftraan tni</legend>
     <form action="" metho="get">
     <label for="">nama</label>
    <input type="text" min="nm" required>
    <br>
    <label for="">berat badan</label>
    <input type="text" min="1" required>
    <br>
    <label for="">tinggi badan</label>
    <input type="text" min="1" required>
    <br> 
    <input type="submit" name="submit" value="simpan">


    <br> 
     
    </fleidset>

    <?php
     if (isset($_GET['simpan'])){
        $nama = $_GET['nm'];
        $tinnggi = $_GET['tb'];
        $berat  = $_GET['bb'];


        function penerimaan_tni($nm,$tg,$bb)
         {
            if ($tb>165 && $bb > 60 && $bb  >  50){
                $info="Anda di terima";
                return $info;
            }
            else{
                $info="gagal";
                return $info;
            }
        }
        echo "Nama : $nama <br>";
        echo "tb : $tinggi <br>";
        echo "bb : $bb <br>";
        echo "keterangan : " . TNI($tinggi,$berat);
    }

    ?>
    </form>

</body>
</html>