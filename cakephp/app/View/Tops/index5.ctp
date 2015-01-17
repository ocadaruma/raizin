<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>【怒り解析メーカー】RAIJIN</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="css/main.css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script src="main.js"></script>
</head>
<body>
<div id="wrapper">
<div id="question">
<header>
<h2><img src="img/bg_raijin_title02.png" height="92" width="237" alt=""></h2>
<nav></nav>
<title>【怒り解析メーカー】RAIJIN</title>
<h1><img src="img/bg_raijin_img.png" height="556" width="422" alt=""></h1>
<title>【怒り解析メーカー】RAIJIN</title>
<section id="main-question">
  <?php
  echo $this->Form->create(null, array(
  'url' => array('controller' => 'answers', 'action' => 'index')
  ));
  ?>
  <?php echo $this->Form->hidden('tops.q1'); ?>
 <?php echo $this->Form->hidden('tops.q2'); ?>
 <?php echo $this->Form->hidden('tops.q3'); ?>
 <?php echo $this->Form->hidden('tops.q4'); ?>
<h3>あと一つ言っていいぞ！</h3>
<p><input type="text" name="data[q5]" id="topsQ5"></p>
<p class="submit-btn"><input type="submit" value="OK, お前の怒りは分かった。"></p>
</section>

<footer></footer>
</div></div>
</body>
</html>
