<?php

session_start();

  $menu_head = [
      ['title'=>'Головна', 'link'=>'/'],
      ['title'=>'Про нас', 'link'=>'?page=about'],
      ['title'=>'Підписка', 'link'=>'?page=subscription'],
      ['title'=>'Контакти', 'link'=>'?page=contact']
  ];
  $menu_category = [
      ['title'=>'Політика', 'link'=>'?page=politics'],
      ['title'=>'Економіка', 'link'=>'?page=economy'],
      ['title'=>'Події', 'link'=>'?page=incidents'],
      ['title'=>'Спорт', 'link'=>'?page=sport'],
      ['title'=>'Фото', 'link'=>'?page=photography'],
      ['title'=>'Підписка', 'link'=>'?page=subscription']
  ];
function printMenu($menu, $class){
	// массив классов для разных меню
        $classes = [0=>'top_nav', 'nav navbar-nav main_nav'];
        $html = "<ul class=\"{$classes[$class]}\">\n";        
        foreach ($menu AS $i=>$item) {
                $html.="<li class='item-$i'><a href='{$item['link']}'>{$item['title']}</a>\n";                  
                $html.="</li>\n";
        }
        $html.= "</ul>";
        return $html;
}
// При переезде на другой сервер поменять адреса
/*function loadPage($page){*/
	$pages=[
		'404'=>['title'=>'404. Страница не найдена', 'content'=> include_once "http://stud7.asdat.info/2/pages/404.php"],
		'contact'=>['title'=>'Контакти', 'content'=> include_once "http://stud7.asdat.info/2/pages/404.php"],
                'single_page'=>['content'=> include_once "http://stud7.asdat.info/2/pages/single_page.php"],
                'politics'=>['title'=>'Політика', 'content'=> include_once "http://stud7.asdat.info/2/pages/politics.php"],
                'economy'=>['title'=>'Економіка', 'content'=> include_once "http://stud7.asdat.info/2/pages/economy.php"],
                'incidents'=>['title'=>'Події', 'content'=> include_once "http://stud7.asdat.info/2/pages/incidents.php"],
                'sport'=>['title'=>'Спорт', 'content'=> include_once "http://stud7.asdat.info/2/pages/sport.php"],
		'home'=>['title'=>'Головна', 'content'=> include_once "http://stud7.asdat.info/2/pages/home.php"],
                'subscription'=>['title'=>'Підписка', 'content'=> include_once "http://stud7.asdat.info/2/pages/subscription.php"],
                'photography'=>['title'=>'Фото', 'content'=> include_once "http://stud7.asdat.info/2/pages/photography.php"]
	];
	/*if(in_array($_GET['page'], array_keys($pages))){
		return $pages[$_GET['page']];
	}else{
		return $pages['404'];
	}
}*/
function showPage(){
	$page=$_REQUEST['page'];
	$page=loadPage((strlen($page)<1 || $page=='/')?'home':$page);
        return $page['content'];
}
function getUsers() {
        $userinfo=[
                'user1'=>['id'=>'1', 'login'=>'user1', 'password'=> md5('12345')],
                'user2'=>['id'=>'2','login'=>'user2', 'password'=> md5('54321')]
        ];
}

?>