<!DOCTYPE html>
<html lang="en">
  <?php include_once 'includes/functions.php';?>
  <head>
    <?php include_once 'blocks/head.php';?>
  </head>
<body>
  <!-- =========================
    //////////////This Theme Design and Developed //////////////////////
    //////////// by www.wpfreeware.com======================-->

  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- End Preloader -->
  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <div class="container">
    <?php include_once 'blocks/header.php';?>
      <section id="contentSection">
        <div class="row">
            <?php
                $page=$_REQUEST['page'];
                    if (array_key_exists($_REQUEST['page'], $pages) || (strlen($page)<1 || $page=='/')) {
                        $page=(strlen($page)<1 || $page=='/')?'home':$page;
                    }
                    else {
                        $page='404';
                    }
                include_once 'pages'.'/'."$page".'.php';
            ?>
            <?php include_once 'blocks/rightcontent.php';?> 
        </div>
      </section>   
    <?php include_once 'blocks/footer.php';?>
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
 

  <!-- =========================
        //////////////This Theme Design and Developed //////////////////////
        //////////// by www.wpfreeware.com======================-->
    
      
  </body>
</html>