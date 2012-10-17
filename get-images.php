<?php
$dir = "media/farmerarea/pictures/thumbs/";
$images = array();
$d = dir($dir);
while($name = $d->read()){
    if(!preg_match('/\.(jpg|gif|png)$/', $name)) continue;
    $size = filesize($dir.$name);
    $lastmod = filemtime($dir.$name)*1000;
    $images[] = array('name'=>$name, 'size'=>$size,
			'lastmod'=>$lastmod, 'url'=>$dir.$name);
}
echo "xyz";
$d->close();
$o = array('images'=>$images);
echo json_encode($o);
