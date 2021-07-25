<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Upload dan Download</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body {
      padding-top: 70px;
      background: #eeeeee;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
  </style>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://localhost/upload-download/login.php" target="_blank">MAD Website</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="upload.php">Upload</a></li>
          <li><a href="download.php">Download</a></li>
          <li><a href="about.php">About Author</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if($_SESSION['user']){
            echo '<li><a href="profile.php">Profile</a></li>';
            echo '<li><a href="logout.php" onclick="return confirm(\'Yakin?\')">Logout</a></li>';
          }else{
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
          <li><a href="http://localhost/upload-download/login.php" target="_blank">Visit Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container container-body">
    <h1>Selamat datang!</h1>
    <hr>
    <center>
      <p>~Profil Muhammad Asyam Dirhamsyah~</p>
        </center>
    <h1 align="center">PERKENALAN DIRI</h1>
<table width="745" border="1" cellspacing="0" cellpadding="5" align="center" bgcolor="Chocolate">
<tr align="center" bgcolor="#66CC33">
<td width="174">DATA DIRI</td>
<td width="353">KETERANGAN</td>
<td width="232">FOTO</td>
</tr>
<tr>
<td>Nama</td>
<td>MUHAMMAD ASYAM DIRHAMSYAH</td>
<td rowspan="10" align="center"><img src="23.JPG.jpg" width="210" height="313"></td>
</tr>
<tr>
<td>Jurusan</td>
<td>Teknik Informatika (TI)</td>
</tr>
<tr>
<td>Nim</td>
<td>2000018204</td>
</tr>
<tr>
<td>Jenjang</td>
<td>Sarjana (S1)</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>Laki-laki</td>
</tr>
<tr>
<td>Tempat/Tanggal Lahir</td>
<td>Purworejo, 18 Maret 2002</td>
</tr>
<tr>
<td>Perguruan Tinggi</td>
<td>Universitas Ahmad dahlan</td>
</tr>
<tr>
<td>Alamat</td>
<td>Yogyakarta</td>
</tr>
<tr>
<td>Semester</td>
<td>2 (Dua) </td>
</tr>
<tr>
<td>Cita Cita</td>
<td>Web Developer</td>
</tr>
</table>
    <hr>
    <center>copyright &copy; 2021 <a href="http://localhost/upload-download/login.php" target="_blank">MAD Website</a></center>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>