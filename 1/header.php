<?php 

session_start();
include '../koneksi.php';
include 'auth_user.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Info Amga</title>
	<link rel="shortcut icon" type="image/icon" href="../favicon.ico">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
    <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
	<meta charset="utf-8">
 </head>
 <body class="hold-transition skin-blue sidebar-mini">
 	<div class="wrapper">
 		<?php include "content_header.php"  ?>
 		<aside class="main-sidebar">
 			<section class="sidebar">
 				<div class="user-panel">
 				<div class="pull-left image"><p></p></div>
 				</div>

 				<ul class="sidebar-menu">
                    <li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
                    <li class=""><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                    <li><a href="guru.php"><i class="fa fa-user"></i><span>Guru</span></a></li>
                    <li><a href="siswa.php"><i class="fa fa-users"></i><span>Siswa</span></a></li>
                    <!--<li><a href="ruangan.php"><i class="fa fa-columns"></i><span>Ruangan</span></a></li>-->
                    <li><a href="mapel.php"><i class="fa fa-book"></i><span>Mata Pelajaran</span></a></li>
                    <li><a href="jurusan.php"><i class="fa fa-gears"></i><span>Jurusan</span></a></li>
                    <li><a href="kelas.php"><i class="fa fa-university"></i><span>
                    Kelas</span></a></li><!--
                    <li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>-->
                    <li><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
                    <li><a href="komentar.php"><i class="fa fa-comments-o"></i><span>Komentar</span></a></li>
          </ul>
 			</section>
 		</aside>