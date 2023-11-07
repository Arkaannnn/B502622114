<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
<
    <script>
        function validateform(){
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");


        //cek hanya yang invalid
        if(nrp.value==""){
            nrp.focus();
            nrp.placeholder = "contoh : 5026221140"
            alert("NRP harus diisi");
            return false;
        }
        //harus 10 digit
        if(nrp.value.length != 10){
            nrp.focus();
            alert("NRP harus diisi 10 digit, anda memasukkan " + nrp.value.length + " digit");
            return false;
        }

        //harus angka
        if(isNaN(nrp.value)==true){
            nrp.focus();
            msg.innerHTML = "NRP Harus Angka!";
            return false;
        }

        }
    </script>

</head>
<body>
    <div class="container">
        <div class="jumbotron"> Form validasi adalah mencegah pengiriman data ke server jika ada yang invalid/tidak seusai dengan constarin database</div>
        <script>
            function validate()
            {//default return adalah true
                console.lag("baris 24");
                return false;
                console.lag("baris 26");
                return true;
                console.lag("baris 28");
                return false;

            }
        </script>
    <form action="https://google.com" method="get" onsubmit="return validateform();">
        <div class="form-group">
            <label for="nrp">NRP :</label>
            <input type="text" class="form-control" id="nrp"> <div id="msg" class="text-danger"></div>
        </div>
        <input type="submit" value="DAFTAR" class="btn btn-primary">
        <input type="reset" value="ULANGI" class="btn btn-warning">
    </form>
    </div>

</body>
</html>
