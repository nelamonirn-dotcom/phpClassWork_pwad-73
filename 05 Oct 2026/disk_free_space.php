<?php

$drive ='c:';
$free =disk_free_space($drive);
echo round($free/1048576/1024,2)


?>