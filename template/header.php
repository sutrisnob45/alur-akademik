<?php
error_reporting(0);
//   include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>home</title>
  <style type="text/css">
  
    .color p{
      color: blue;
    }
    .gedung{
      width: 150px;
      height: 460px;
      border: 2px solid black;
      position: absolute;

    }
    .gd1{
      width: 300px;
      height: 150px;
      top: 40px;
      left: 830px;
    }
    /*warna gedung*/
  /*  .gd1:hover{
      background-color: salmon;
    }*/
    /*warna di row colom*/
    .ruang:hover{
      background-color: salmon;
    }
    /*warna aktif*/
    .ruang.aktif{
      background-color: salmon;
    }

    /* posisis ke atas gedung*/
    .gd1{
      left: 580px;
      top: 580px;
    }
    .gd2,.gd3{
      top: 110px;
    }
    /*posisi kesamping */
    .gd2{
      left: 420px;
    }
    .gd3{
      left: 790px;
    }
    .gd4{
      left: 420px;
    }
    .gd5{
      left: 790px;
    }
    /* warna garis table*/
    .ruang{
      height: 100px;
      border-bottom: 2px solid black;
      overflow: hidden;
    }
    /* text ke bawah*/
    /*.perpus:last-child{
      border-bottom: none;
    }*/
    .ruang:last-child{
      border-bottom: none;
    }
    /*ukuran gedung*/
    .gd1{
      width: 200px;
      height: 50px;
    }
    .gd2 .ruang{
      height: 65px;
    }
    .gd3 .ruang{
      height: 65px;
    }
    .gd4{
      height: 40px;
    }
    .gd5{
      height: 40px;
    }
    /*text centar di ruang p*/
    .ruang p{
      line-height: 75px;
      text-align: center;
    }
    p{
      line-height: 50px;
      text-align: center;
    }
    .gd4 {
      line-height: 40px;
      text-align: center;
    }
    .gd5 {
      line-height: 40px;
      text-align: center;
    }

/*    .text h4{
      text-align: center;
    }*/
    .tabeff{
     text-align: center;
     width: 235px; 
     height:310px; 
     /*tabel akan rata kiri*/
     float: left;
     /*jarak dari kiri*/
     margin-left: 5px;
    }

  </style>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="library/font-awesome/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="library/ionicons/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="library/adminlte/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="library/adminlte/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue layout-top-nav">