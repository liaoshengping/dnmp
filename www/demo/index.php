<?php
echo 'demo ';
$redis = new Redis();

$redis->connect('redis', 6379); //连接Redis

$redis->set( "testKey" , "连接redis成功"); //设置测试key

echo $redis->get('testKey').PHP_EOL;


$dbms='mysql';     //数据库类型
$host='mysql'; //数据库主机名
$dbName='mysql';    //使用的数据库
$user='root';      //数据库连接用户名
$pass='root';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";
$dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
echo "数据库连接成功<br/>";
