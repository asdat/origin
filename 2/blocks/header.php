    <header id="header">    
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="header_top">
            <div class="header_top_left">
              <?php echo printMenu($menu_head, 0);?>
            </div>
            <div class="header_top_right">
                <p><?php var_dump($_POST['user']);?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="header_bottom">
            <div class="logo_area">
              <!-- for your img logo format
              <a href="home.html" class="logo">
                <img src="img/logo.jpg" alt="logo">
              </a> -->
              <!-- for your text logo format -->
               <a href="#" class="logo">
                News <span>Feed</span>
              </a> 
            </div>
            <div class="add_banner">
              <a href="#"><img src="img/addbanner_728x90_V1.jpg" alt="img"></a>
            </div>
          </div>
        </div>
      </div>  
    </header><!-- End header section --> 
    <!-- start nav section --> 
    <section id="navArea">
      <!-- Start navbar -->
      <nav class="navbar navbar-inverse" role="navigation">      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav main_nav">
            <li class="active"><a href="http://stud7.asdat.info/index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
            <?php echo printMenu($menu_category, 1);?>
          </ul>           
        </div><!--/.nav-collapse -->      
      </nav>
    </section><!-- End nav section -->
	
    <section id="newsSection">
      <div class="row">
        <div class="col-lg-12 col-md-12">
           <!-- start news sticker -->
          <div class="latest_newsarea">      
            <span>Latest News</span>
            <ul id="ticker01" class="news_sticker">
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My First News Item</a></li> 
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Second News Item</a></li>
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Third News Item</a></li>
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Four News Item</a></li> 
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Five News Item</a></li>
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Six News Item</a></li>
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Seven News Item</a></li> 
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Eight News Item</a></li>
              <li><a href="#"><img src="img/news_thumbnail2.jpg" alt="">My Nine News Item</a></li>          
            </ul>
            <div class="social_area">
              <ul class="social_nav">
                <li class="facebook"><a href="#"></a></li>
                <li class="twitter"><a href="#"></a></li>
                <li class="flickr"><a href="#"></a></li>
                <li class="pinterest"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="vimeo"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
                <li class="mail"><a href="mailto:info@smartnews.com"></a></li>
              </ul>
            </div>      
          </div><!-- End news sticker -->
        </div>
      </div>
    </section>