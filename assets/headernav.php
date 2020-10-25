    <?php 
        include "init.php";
        ?>

<!DOCTYPE html>
<html lang="<?php echo $expr['name']; ?>" dir="<?php echo $expr['dirction']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="">
    <meta name="theme-color" content="#fff">
    <link rel="icon" type="image/png" href="" sizes="32*32">
    <link rel="icon" type="image/png" href="" sizes="16*16">
    <title><?php echo $expr['title']; ?></title>
    <link href="<?php echo $expr['font']; ?>" rel="stylesheet">
    <link href="<?php echo $expr['font-2']; ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>bootstrap.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>main.css"/>
    <?php if($expr['name'] == "ar-sa"){ 
        echo '<link rel="stylesheet" type="text/css" href="css/rtl/main-rtl.css">' ;}  ?>
</head>
<body >
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container nav-wrapper">
      <a class="navbar-brand" href="index.php"><img src="<?php echo $img . '/' . $expr['logo-text']; ?>"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link <?php if($curPageName == "index.php"){ echo 'active' ;} ?>" href="index.php"><?php echo $expr['home']; ?></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php"><?php echo $expr['about']; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.php"><?php echo $expr['services']; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="clients.php"><?php echo $expr['clients']; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php"><?php echo $expr['contact']; ?></a>
            </li>
        </ul>
      </div>
          <div class="nav-lang">
        <?php foreach ($dictionary as $key => $lang_dict): ?>
        <?php if ($current_lang != $key): ?>
            <div>
                <a  href="lang.php?change=<?php echo $key?>"><?php echo $lang_dict['value'] ?></a>
            </div>
        <?php endif ?>
        <?php endforeach ?>
    </div>
  </div>
</nav>
<!-- End Navbar -->