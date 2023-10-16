<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


</head>
<body>
    <h1>My Page</h1>

    <a href="<?php echo site_url('hello/index2'); ?>">link to Hello</a> <br>
    <a href="<?php echo site_url('Welcome') ?>">link to Welcome</a> <br>

    <img src="<?php echo base_url('img'); ?>/lanlogo.png" alt="" width="300px">


</body>
</html>
