<?php
$redis = new Redis();
try {
    $redis->connect('redis', 6379);
    $redisPassword = $_ENV['REDIS_PASSWORD'];
    $redis->auth($redisPassword);
    echo "Connected to Redis server successfully. ";
} catch (Exception $e) {
    echo "Could not connect to Redis server. Error: " . $e->getMessage();
} finally {
    $redis->close();
}
?>