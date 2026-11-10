<?php
$user = 'otsubo';
$password = '1234';

if (!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm="Private Page"');
    header('HTTP/1.0 401 Unauthorized');

    die('このページを見るにはログインが必要です');
}else{
    if ($_SERVER['PHP_AUTH_USER'] != $user
        || $_SERVER['PHP_AUTH_PW'] != $password){

        header('WWW-Authenticate: Basic realm="Private Page"');
        header('HTTP/1.0 401 Unauthorized');
        die('このページを見るにはログインが必要です');
    }
}

   ?>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>大坪ゼミ　九州大学経済学部　ホームページ</title>
<meta name="viewport" content="width=device-width">
<meta name="copyright" content="Template Party">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="../css/style.css">
<link href="../css/style-s.css" rel="stylesheet" type="text/css" media="only screen and (max-width:480px)">
<link href="../css/style-m.css" rel="stylesheet" type="text/css" media="only screen and (min-width:481px) and (max-width:800px)">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<style>
#main h1 {
	background: #b3b3b3 url(images/bg1.png);
}
nav#mainmenu ul li a {
	background: #FFF url(images/arrow1.png) no-repeat 10px center;
}
</style>
<![endif]-->
</head>

<body>

<div id="container">


<header class="c">
<img alt="Hyousi_hidaries" class="auto-style1" height="185" src="../img5.jpg" width="187" style="float: left"><img alt="全体画像" height="250" src="../全体画像.jpg" width="428" ></header>

<div id="contents">

<div id="main">

<section>
<article>
<a href="../arubamu_obkai_2017.html">
<h1>大坪ゼミOB会</h1>
<p>2017年1月21日</p>
</a>
</article>

<article>
<a href="../arubamu_obkai_2018.html">
<p>2018年1月27日</p>
</a>
</article>


<article>
<a href="../arubamu_obkai_2019.html">
<p>2019年2月2日</p>
</a>
</article>


<article>
<a href="../arubamu_obkai_2020.html">
<p>2020年2月1日</p>
</a>
</article>



<article>
<a href="../obmeibo.html">
<h1>OB名簿</h1>
<figure><img src="../images/sample1.jpg" width="200" height="133" alt="" /></figure>
<p>2015年度(1期生)　－　</p>
</a>
</article>

<article>
<a href="../past_photo.html">
<h1>写真のアーカイブ</h1>
<figure><img src="../images/sample1.jpg" width="200" height="133" alt="" /></figure>
<p>過去の新歓合宿・ゼミ合宿</p>
</a>
</article>


</section>

</div>
<!--/main-->

<div id="sub">


<nav id="mainmenu">
<ul>
<li><a href="../index.html">ホーム</a></li>
<li><a href="../zemishoukai.html">学部ゼミ紹介</a></li>
<li><a href="../daigakuinsei.html">大学院生紹介</a></li>
<li><a href="../arubamu.html">アルバム</a></li>
<li><a href="../kyouinshoukai.html">教員紹介</a></li>
<li><a href="obsenyou.html">ゼミ生・OB専用</a></li>
</ul>
</nav>

<aside class="box1 mb1em">
<h1 class="mb1em">大坪ゼミ</h1>
<p class="mini1">福岡市西区元岡744<br>　
イースト2号館 E637研究室<br>
TEL：092-802-5496<br>
e-mail:otsuboアットマーク<br>
　　　　　econ.kyushu-u.ac.jp<br>
</aside>

</div>
<!--/sub-->


<p id="pagetop"><a href="#">↑ PAGE TOP</a></p>

</div>
<!--/contents-->

<footer>
<small>Copyright&copy; 2014 <a href="../index.html">SAMPLE COMPANY</a>　All Rights Reserved.</small>
<span class="pr"><a href="http://template-party.com/" target="_blank">Web Design:Template-Party</a></span>
</footer>

</div>
<!--/container-->

</body>
</html>
