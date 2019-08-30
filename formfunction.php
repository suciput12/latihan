<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<fleidset>
    <legend>luas persegi</legend>
    <form action="" metho="get">
    <label for="">sisi</label>
    <input type="number" min="s" required>
    <br>
    <input type="sumbit" name="simpan" value="simpan">
    </form>
    </fleidset>

    <?php
        if (isset($_GET['simpan'])){
            $sisi = $_GET['s'];

            function luas_persegi($s) {
                $luas = $s*$s;
                return $luas;

            }

            $luas = $luas_persegi($sisi);
            echo "luas persegi : $luas";

        }
    ?>
</body>
</html>