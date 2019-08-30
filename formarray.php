<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
        <p>form array</p>
        </center>
        <fleidset>
            <legend>form array</legend>
            <form action="" method="get">
                <label for="">Masukan jumlah</label>
                <input type="number" name="jml">
                <br>
                </from>
                <?php
                if (isset($_GET['sumbit'])){
                    $jml_from = $_GET['jml'];
                    for ($a = 1; $a <= $jml_from; $a++){
                        ?>
                        <Form action="formarraypro.php" method="POST">
                            <label for="">Nama</label>
                            <input type="text" name="nama[]"required>
                            <label for="">kelas</label>
                            <input type="text" name="kelas[]" required>
                            <br>
                            <br>

                    <?php } ?>
                    <input type="submit" name="sbm" value"simpan">
                    <input type="text" name="reset" value"reset">                  
                 </Form>
                    <?php }
                ?>
                </fleidset>
</body>
</html>