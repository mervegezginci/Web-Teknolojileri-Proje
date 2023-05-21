<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equ iv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <link href="css/login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid" id="nav">
                <a class="navbar-brand mb-0 h1" href="hakkimda.html">Ana Sayfa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="sehrim.html">Şehrim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="mirasimiz.html">Mirasımız</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="ilgi-alanlarim.html">İlgi Alanlarım</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="ozgecmis.html">Özgeçmiş</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="iletisim.html">İletişim</a>
                        </li> 
                    </ul>
                    <li class="nav-item" style="list-style: none;">
                        <a class="nav-link active" href="login.html">Login</a>
                    </li>
                </div>
            </div>
        </nav>
    </div>

    <div align="center">
      <div class="card text-white bg-dark mb-3" style="max-width: 40rem;padding:10px 10px;margin-top:35vh;">
      <?php if($_POST["email"]=="b201210085@sakarya.edu.tr" && $_POST["password"]=="b201210085")
          {
            echo"Merhaba ".$_POST["email"];
            echo"<br>Girişin Onaylandı.";
          }
          else{
            echo "Kullanıcı e postası ya da şifre hatalı!";
            header("refresh:2; login.html");
          }    
            ?>
      </div>
    </div>


 
</body>
</html>

