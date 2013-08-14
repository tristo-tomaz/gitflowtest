<?php


$linkHome = substr($_SERVER['REQUEST_URI'],0,(-1)*(strlen(basename($_SERVER['REQUEST_URI']))));

echo 'This is the menu of this application: ';

echo '<a href="'.$linkHome.'app.php" title="Home">Home</a> | ';
//echo '<a href="" title="Display name">Display name</a> | ';
echo '<a href="'.$linkHome.'echo-url.php" title="Echo URL">Echo URL</a>';
echo '<hr />';
