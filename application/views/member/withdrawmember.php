	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Withdraw</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="<?=base_url("bower_components/bootstrap/dist/css/bootstrap.min.css");?>">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?=base_url("bower_components/font-awesome/css/font-awesome.min.css");?>">
		<!-- DataTables -->
		<link rel="stylesheet"
			href="<?=base_url("bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css");?>">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?=base_url("dist/css/AdminLTE.min.css");?>">
		<link rel="stylesheet" href="<?=base_url("dist/css/skins/skin-blue.min.css");?>">

		<!-- Google Font -->
		<link rel="stylesheet"
			href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>

	<body class="hold-transition skin-blue sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<?php $this->load->view("member/header");?>
			<?php $this->load->view("member/navbar_left");?>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Withdraw
						<small>it all starts here</small>
					</h1>
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Withdraw</h3>
						</div>
						<div class="box-body">
							<!-- CONTENT -->
							<form class="form-horizontal" id="withdrawmember" onsubmit="insertfunction(event)">
								<div class="form-group">
									<label class="col-sm-3 control-label">Saldo i-cash</label>
									<div class="col-sm-9">
										<div class="input-group">
											<div class="input-group-addon">Rp</div>
											<input class="form-control" id="icash"  readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Nominal Penarikan</label>
									<div class="col-sm-9">
										<div class="input-group">
											<div class="input-group-addon">Rp</div>
											<input class="form-control" id="nominal" type="text" name="nominal">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12 text-center">
										<button type="submit" id="submitButton" class="btn btn-primary btn-md">
											<span id="submit">Submit</span></button>
									</div>
								</div>
							</form>
							<!-- /. CONTENT -->
						</div>
						<!-- /.box-body -->
						<div class="box-footer">

						</div>
					</div>
					<!-- /.box -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<?php $this->load->view("member/footer");?>
		</div>
		<!-- ./wrapper -->

		<!-- jQuery 3 -->
		<script src="<?=base_url("bower_components/jquery/dist/jquery.min.js");?>"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="<?=base_url("bower_components/bootstrap/dist/js/bootstrap.min.js");?>"></script>
		<!-- SlimScroll -->
		<script src="<?=base_url("bower_components/jquery-slimscroll/jquery.slimscroll.min.js");?>"></script>
		<!-- FastClick -->
		<script src="<?=base_url("bower_components/fastclick/lib/fastclick.js");?>"></script>
		<!-- DataTables -->
		<script src="<?=base_url("bower_components/datatables.net/js/jquery.dataTables.min.js");?>"></script>
		<script src="<?=base_url("bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js");?>"></script>
		<!-- AdminLTE App -->
		<script src="<?=base_url("dist/js/adminlte.min.js");?>"></script>
		
		<script>
			$(document).ready(function () {
				userCookie = getCookie("memberCookie");
				urls = "get_specificuser/";

				$("#withdrawmember").addClass('active');
				$("#username").text(userCookie);

				function getCookie(cname) {
					var name = cname + "=";
					var decodedCookie = decodeURIComponent(document.cookie);
					var ca = decodedCookie.split(';');
					for (var i = 0; i < ca.length; i++) {
						var c = ca[i];
						while (c.charAt(0) == ' ') {
							c = c.substring(1);
						}
						if (c.indexOf(name) == 0) {
							return c.substring(name.length, c.length);
						}
					}
					return "";
				}

				$.ajax({
					url: "<?php echo base_url() ?>index.php/" + urls + userCookie,
					type: 'get',
					dataType: "json",
					success: function (response) {
						$("#icash").val(response.icash);
					}
				})
			})

			function insertfunction(e) {
				e.preventDefault(); // will stop the form submission						
				urls = "insert_withdraw";
				var nominal = $("#nominal").val();

				$("#submitButton").prop("disabled", true);
				$.ajax({
					url: "<?php echo base_url() ?>index.php/" + urls,
					type: 'POST',
					data: {nominal:nominal},
					success: function (response) {
						$("#submit").html("tunggu..");
						if (response == "berhasil mengubah data") {
							alert("Berhasil");
							location.reload();
						} else {
							alert(response);
							$("#submit").html("Submit");
							$("#submitButton").prop("disabled", false);
						}
					},
					error: function () {
						alert('Gagal');
						$("#submitButton").prop("disabled", false);
					}
				});
			}
		</script>
	</body>

	</html>
