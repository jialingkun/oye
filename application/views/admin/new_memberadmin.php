    <!DOCTYPE html>
    <html lang="en">

    <head>
    	<meta charset="UTF-8">
    	<title>New Member</title>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<!-- Tell the browser to be responsive to screen width -->
    	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    	<!-- Bootstrap 3.3.7 -->
    	<link rel="stylesheet" href="<?=base_url("bower_components/bootstrap/dist/css/bootstrap.min.css");?>">
    	<!-- Font Awesome -->
    	<link rel="stylesheet" href="<?=base_url("bower_components/font-awesome/css/font-awesome.min.css");?>">
    	<!-- Ionicons -->
    	<link rel="stylesheet" href="<?=base_url("bower_components/Ionicons/css/ionicons.min.css");?>">
    	<!-- Theme style -->
    	<link rel="stylesheet" href="<?=base_url("dist/css/AdminLTE.min.css");?>">
    	<link rel="stylesheet" href="<?=base_url("dist/css/skins/skin-blue.min.css");?>">
    	<link rel="stylesheet"
    		href="<?=base_url("bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css");?>">

    	<!-- Google Font -->
    	<link rel="stylesheet"
    		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
    	<!-- Site wrapper -->
    	<div class="wrapper">
    		<?php $this->load->view("admin/header");?>
    		<?php $this->load->view("admin/navbar_left");?>

    		<!-- Content Wrapper. Contains page content -->
    		<div class="content-wrapper">
    			<!-- Content Header (Page header) -->
    			<section class="content-header">
    				<h1>
    					New Member
    					<small>New member</small>
    				</h1>
    			</section>
    			<!-- Main content -->
    			<!-- Main content -->
    			<section class="content">
    				<div class="row">
    					<div class="col-xs-12">
    						<div class="box">
    							<div class="box-header">
    								<h3 class="box-title">Data Member</h3>
    							</div>
    							<!-- /.box-header -->
    							<div class="box-body">
    								<div class="row">
										<div class="col-sm-12">
											<div>
											</div>
										</div>
									</div>
    							</div>
    							<!-- /.box-body -->
    						</div>
    						<!-- /.box -->
    					</div>
    					<!-- /.col -->
    				</div>
    				<!-- /.row -->
    			</section>
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
       <script src="<?=base_url("bower_components/datatables_button.min.js");?>"></script>
    	<!-- AdminLTE App -->
    	<script src="<?=base_url("dist/js/adminlte.min.js");?>"></script>
    	<!-- AdminLTE for demo purposes -->
    	<script src="<?=base_url("dist/js/demo.js");?>"></script>
    	<script>
    		$(document).ready(function () {
                $.ajaxSetup({
                    headers: { "cache-control": "no-cache" }
                });
                
    			$("#member").addClass('active');
    			urls = "get_alluser";

    			$.ajax({
    				url: "<?php echo base_url() ?>index.php/" + urls,
    				type: 'get',
    				dataType: "json",
    				success: function (response) {
    					console.log(response);
    					var tr_str;
    					for (var i = 0; i < response.length; i++) {
    						tr_str +=
    							'<tr class="text-center" >' +
    							'<td><button class="btn btn-sm btn-primary">Detail</button></td>' +
    							'<td>' + response[i].username + '</td>' +
    							'<td>' + response[i].password + '</td>' +
    							'<td>' + response[i].nama + '</td>' +
    							'<td>' + response[i].email + '</td>' +
    							'<td>' + response[i].no_telepon + '</td>' +
    							'</tr>';
    					}
    					$('#datamember').append(tr_str);
    					$("#tablemember").DataTable({
                     'pageLength': 25,
    						'scrollX': true,
                      dom: 'Bfrtip',
    						buttons: [{
                        className: 'btn btn-success',
    							text: 'New Member',
    							action: function (e, dt, node, config) {
    								alert('Button activated');
    							}
    						}]
    					});
    				}
    			})
    		});
    	</script>
    </body>

    </html>