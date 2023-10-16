<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


</head>
<body>

<div id="container">
	<h1>Hello World!</h1>

    <hr>
    <?php
        $list = array('a', 'b', 'c', 'e', 'f');
        echo ol($list);
        echo '<hr>';
        echo ul($list);
    ?>     

    <hr>
    <h1>HTML Helper !</h1>

    aaa
    <?php echo br(10); ?>
    bb

    <hr>
    <p>heading</p>
    <h1>h1</h1>
    <h2>h2</h2>

    <?php echo heading("Text",1); ?>
    <?php echo heading("Text",2); ?>
    <?php echo heading("Text",3); ?>
    <?php echo heading("Text",4); ?>
    <?php echo heading("Text",5); ?>
    <hr>

    <p>nbs()</p>
testing &nbsp;&nbsp;&nbsp;&nbsp; programming
    <br>

    <?php echo 'my website';
    echo nbs(10);
    echo 'devbanban';
        ?>


</div>

</body>
</html>
