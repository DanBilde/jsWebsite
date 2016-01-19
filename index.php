<!DOCTYPE HTML>
<html lang="en">
<head>
<?php
include ('_include/head.php');
?>
</head>
<body>
    <div id="logo"><a href="index.php"><img src="_imgs/_main/logo.png"></a></div>
    <div id="menuHolder" style='top:-310px'>
    <div id="menu">
    <?php
    for($i=1;$i<=6;$i++){
        echo '<a href="#page'.$i.' " class="buttons" id="bt'.$i.'" onclick=\' slideMenuOut("menuHolder")\'></a>';
    }
    ?>
    </div>
    <div id="menuButton"><a href="#" onclick='toggleMenu("menuHolder")'><img src="_imgs/_buttons/menu2.png"></a>
    </div>
    </div>
<section id="home">
<content>
<img src="_imgs/_main/banner.png"/>
</content>
<bottomBox></bottomBox>
</section>
<?php
$pages = array(1=>'page1',2=>'page2',3=>'page3',4=>'form',5=>'whatever',6=>'youtube');
foreach($pages as $i=>$page){
    echo'<section id="page'.$i.'"><content>';
include_once('_include/'.$page.'.php');
echo '</content>';
echo $i !=6 ? '<bottomBox></bottomBox>' : '';
echo '</section>';
}
?>
<!--
<section id="page4">
<content>
    <?php include_once('_include/form.php'); ?>
</content>
<bottomBox></bottomBox>
</section>

<section id="page5">
<content>
    <?php include_once('_include/whatever.php'); ?>
</content>
<bottomBox></bottomBox>
</section>

<section id="page6">
<content>
    <?php include_once('_include/youtube.php'); ?>
</content>
<bottomBox></bottomBox>
</section> -->

</body>
</html>