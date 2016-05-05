<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Karyawan</title>
	<link href="<?PHP echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?PHP echo base_url(); ?>assets/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="<?PHP echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
</head>
<body>

<div id="container">
	<div id="body">
		<h1>sendal</h1>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>