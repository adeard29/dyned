<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pelajaran</title>
	<link href="<?PHP echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?PHP echo base_url(); ?>assets/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="<?PHP echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
</head>
<body>

<div id="container">
	<div id="body" class="col-sm-12">
		<h1>List pelajaran</h1>
		<table class="table table-responsive">
			<tr>
				<th>Pelajaran</th>
				<th>Username</th>
			</tr>
			<?php
				foreach ($query->result() as $row) {
			?>
			<tr>
				<td><?= $row->pelajaran; ?></td>
				<td><?= $row->username; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
		<div id="divisi"></div>

		<button type="button" class="btn btn-primary btn-small" id="akun">Lihat Akun</button>
		<button type="button" class="btn btn-danger btn-small" id="biodata">Lihat Biodata</button>
	</div>
</div>
</body>
<script src="<?PHP echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#akun').click(function() {
			window.location = '<?PHP echo site_url(); ?>';
		});
		$('#biodata').click(function() {
			window.location = '<?PHP echo site_url(); ?>/karyawancontroller/biodata';
		});
	});
</script>

</html>
