<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>【怒り解析メーカー】RAIJIN</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="css/main.css">
    <style>
     .answer {
       position: absolute;
       background: #1D1819;
       color: #FFEA00;
       border-radius: 100%;
       margin: 10px;
       width: 120px;
       height: 120px;
       text-align: center;
       line-height: 120px;
       font-size: 12px;
     };
     .answer a {
       color: #FFEA00;
     };
    </style>
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
<section id="main-question" style="padding-top: 20px";>
<input type="hidden" name="data[q1]" value="<?php echo $q1; ?>" id="q1">
<input type="hidden" name="data[q2]" value="<?php echo $q2; ?>" id="q2">
<input type="hidden" name="data[q3]" value="<?php echo $q3; ?>" id="q3">
<input type="hidden" name="data[q4]" value="<?php echo $q4; ?>" id="q4">
<input type="hidden" name="data[q5]" value="<?php echo $q5; ?>" id="q5">
<h3>この中から自分でも一番腹がたったものを選びなさい</h3>
<div class="answers">
</div>
</section>



<footer></footer>
</div></div>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="js/tween.min.js"></script>
    <script src="js/flowtype.js"></script>
    <script>
     $(function(){
       var r2 = 500;
       var center = {
         x: ($('#main-question').offset().left)+250,
         y: ($('#main-question').offset().top)+250
       };

       var answers = $('input[type="hidden"]').map(function(i){
         return $(this).val();
       });

       var rad = Math.PI * 2 / answers.length;

       $.each(answers, function(i, val) {
         var $answer = $('<div class="answer"><a href="/results?a=' + val + '" style="color: #FFEA00; text-decoration: none;">' + val + "</a></div>");
         $(".answers").append($answer);

         var r = r2/2 - Math.max($answer.width(), $answer.height());

         var c = {
           x: center.x + r * Math.cos(rad * i),
           y: center.y + r * Math.sin(rad * i)
         };
         var leftTop = {
           x: c.x - $answer.width()/2,
           y: c.y - $answer.height()/2
         };

         $answer.css({
           left: center.x - $answer.width()/2,
           top: center.y - $answer.height()/2
         });

         var position = {
           x: $answer.position().left,
           y: $answer.position().top
         };

         var tween = new TWEEN.Tween(position).to(leftTop, 700 + 700 * Math.random()).easing(
           TWEEN.Easing.Exponential.InOut).onUpdate(function() {
           $answer.css({left: this.x, top: this.y});
         }).start();
       });

       var animate = function() {
         requestAnimationFrame(animate);
         TWEEN.update();
       };

       animate();
     });
    </script>


</body>
</html>
