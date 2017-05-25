<?php
$fp = fopen('new.txt','w+');
fputs($fp,'XX');
fclose($fp);