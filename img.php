<?php
header('Content-type: image/png');

echo file_get_contents('https://www.chase.com.ge/imgcdn.php?src='.$_GET['src']);
?>