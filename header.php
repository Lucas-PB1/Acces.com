<html>
<head>
  <!-- Import do style -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/imports/access.css">
  <!-- Bootstrap -->
  <script type="text/javascript" src="node_modules\jquery\dist\jquery.js"></script>
  <script type="text/javascript" src="node_modules\popper.js\dist\popper.js"></script>
  <link rel="stylesheet" type="text/css" href="node_modules\bootstrap\compiler\bootstrap.css">
  <script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.js"></script>

</head>

<body>
  <div id="header">
    <div id="logo">
      <a href="<?php echo $_SERVER['PHP_SELF'] ?>"><img id="logo" src="img/logo.png"></a>
    </div>
    <div id="title">
      <h1>Access</h1>
    </div>
    <div id="entry">
      <a href="?pg=pages/login"><button class="btn btn-danger">Login</button></a>
      <a href="?pg=pages/register"><button class="btn btn-danger">Registro</button></a>
    </div>
  </div>
  <div id="content">