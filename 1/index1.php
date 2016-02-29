<!DOCTYPE html>
<html lang="en">
<?php include 'pages/head.php'; ?>
<body>
    <?php
    //error_reporting(-1);
    $menu_head = [
        ['title'=>'Головна', 'link'=>'/'],
        ['title'=>'Про нас', 'link'=>'#about'],
        ['title'=>'Підписка', 'link'=>'#subscription'],
        ['title'=>'Контакти', 'link'=>'#contact']
        ];
    $menu_category = [
        ['title'=>'Політика', 'link'=>'#politics'],
        ['title'=>'Економіка', 'link'=>'#economy'],
        ['title'=>'Події', 'link'=>'#incidents'],
        ['title'=>'Спорт', 'link'=>'#sport']
    ];
    $classes = [0=>'top_nav', 'nav navbar-nav main_nav', 'third-level'];
        function printMenu($menu, $class) {
            global $classes;
            $html = "<ul class=\"{$classes[$class]}\">\n";        
            foreach ($menu AS $i=>$item) {
                    $html.="<li class='item-$i'><a href='{$item['link']}'>{$item['title']}</a>\n";                  
                    $html.="</li>\n";
            }
            $html.= "</ul>";
            return $html;
    }
    ?>
<!-- =========================
    //////////////This Theme Design and Developed //////////////////////
    //////////// by www.wpfreeware.com======================-->

    <?php include 'pages/preloader.php'; ?>
   
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  
  <div class="container">
    <?php include 'pages/header.php'; ?> 
    <?php include 'pages/nav_section.php'; ?> 
    <?php include 'pages/news_section.php'; ?> 
    <?php include 'pages/slider_section.php'; ?> 
    <?php include 'pages/content_body.php'; ?>     
    <?php include 'pages/footer.php'; ?>
  </div> <!-- /.container -->
  

  <!-- jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
  <!-- For content animatin  -->
  <script src="js/wow.min.js"></script>
  <!-- bootstrap js file -->
  <script src="js/bootstrap.min.js"></script> 
  <!-- slick slider js file -->
  <script src="js/slick.min.js"></script> 
  <!-- news ticker jquery file -->
  <script src="js/jquery.li-scroller.1.0.js"></script>
  <!-- for news slider -->
  <script src="js/jquery.newsTicker.min.js"></script>
  <!-- for fancybox slider -->
  <script src="js/jquery.fancybox.pack.js"></script>
  <!-- custom js file include -->    
  <script src="js/custom.js"></script>  
  </body>
</html>