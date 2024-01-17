<?php
$redis = new Redis();
$redis->connect('redis', 6379);
echo "Connected to server successfully. ";
if ($redis->ping()) {
    echo "Server is running";
}
?>
