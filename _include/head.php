<?php

$author = 'Dan Mihai Bilde';
$title = 'Web Developer';
$description = 'Frontend web developer working at Cortrium as an intern ';
$url='http://www.danbilde.com';
$keywords = 'PHP, MySQL, CSS 3';
$copyright = '@' .date("Y"). 'DanBilde.org';
$preview = $url .'/imgs/icons/Avatar.png';
$icon = '_imgs/_icons/favicon.png';

?>

<meta charset="utf-8">
<meta name="author" content ="<?php echo $author; ?>">
<meta name="description" content = "<?php echo $description;?>">
<meta name="url" content = "<?php echo $url; ?>">
<meta name="keywords" content ="<?php echo $keywords; ?>">

<title> <?php echo $title; ?> </title>
<link rel="image_src" href="<?php echo $preview;?>" ./>
<link rel="shortcut icon" href="<?php echo $icon;?>" ./>
<link rel="stylesheet" type="text/css" href="_css/mystyle.css" />
<script src="_js/functions.js"> </script>
