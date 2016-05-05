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
	<div id="body" class="col-sm-12">
		<h1>List Akun</h1>

		<table class="table table-responsive">
			<tr>
				<th>Email</th>
				<th>Username</th>
			</tr>
			<?php 
				$query = $this->karyawan->view_karyawan();
				foreach ($query->result() as $row) {
			?>
				<tr>
					<td><?= $row->email; ?></td>
					<td><?= $row->username; ?></td>
				</tr>
			<?php
				}
			?>
		</table>
		<div id="divisi"></div>

		<button type="button" class="btn btn-primary btn-small" id="pelajaran">Lihat Pelajaran</button>
		<button type="button" class="btn btn-danger btn-small" id="biodata">Lihat Biodata</button>
	</div>
</div>
</body>
<script src="<?PHP echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#pelajaran').click(function() {
			window.location = '<?PHP echo site_url(); ?>/karyawancontroller/pelajaran';
		});

		$('#biodata').click(function() {
			window.location = '<?PHP echo site_url(); ?>/karyawancontroller/biodata';
		});
	});
</script>
</html>
