<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

    <body class="drawer drawer--right">
        <header role="banner">
          <!-- ハンバーガーボタン -->
          <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
          </button>
          <!-- nav中身 -->
          <nav class="drawer-nav" role="navigation">
            <ul class="drawer-menu">
              <li><a class="drawer-menu-item" href="#sec1">News</a></li>
              <li><a class="drawer-menu-item" href="#sec2">Service</a></li>
              <li><a class="drawer-menu-item" href="#sec3">Results</a></li>
              <li><a class="drawer-menu-item" href="#sec4">FAQs</a></li>
              <li><a class="drawer-menu-item" href="#sec5">Price</a></li>
              <li><a class="drawer-menu-item" href="#sec6">Comments</a></li>
              <li><a class="drawer-menu-item" href="#sec7">Contact</a></li>
            </ul>
          </nav>
        </header>
        
        <main role="main">
        <header class="header">
          <div class="container">
            <div class="header-logo">
                <h1>Sample Corp.</h1>
            </div>
            <div class="header-content">
                <ul>
                    <li class="header-list"><a href="#sec1" class="header-nav-item">News</a></li>
                    <li class="header-list"><a href="#sec2" class="header-nav-item">Service</a></li>
                    <li class="header-list"><a href="#sec3" class="header-nav-item">Results</a></li>
                    <li class="header-list"><a href="#sec4" class="header-nav-item">Price</a></li>
                    <li class="header-list"><a href="#sec5" class="header-nav-item">Comments</a></li>
                    <li class="header-list"><a href="#sec6" class="header-nav-item">FAQs</a></li>
                    <li class="header-list"><a href="#sec7" class="header-nav-item">Contact</a></li>
                </ul>
            </div>
          </div>
        </header>
        