<!DOCTYPE html>
<html lang="en">
<head>
    <title>:: E-Task :: </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link  rel="icon" href="<?php echo base_url('assets/images/icon.jpg'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/blog.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-free-5.1.0-web/css/all.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist/css/chartist.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/dropify/css/dropify.min.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/sweetalert/sweetalert.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/parsleyjs/css/parsley.css'); ?>">

    <style>
		td.details-control {
			background: url('<?php echo base_url('assets/images/details_open.png'); ?>') no-repeat center center;
			cursor: pointer;
		}

		tr.shown td.details-control {
			background: url('<?php echo base_url('assets/images/details_close.png'); ?>') no-repeat center center;
		}

		.demo-card label {
			display: block;
			position: relative;
		}

		.demo-card .col-lg-4 {
			margin-bottom: 30px;
		}

		.text-wrap {
			white-space: normal;
		}

		.width-200 {
			width: 200px;
		}

		.width-100 {
			width: 100px;
		}
	</style>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/blog.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/color_skins.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('jquery.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
</head>
<body class="theme-orange">
    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="<?php echo base_url('assets/images/logo34.png'); ?>" width="30%" alt="KOP"></div>
            <p><h3><font color='white'><i class="fas fa-spinner fa-pulse"></i> Please wait...</font></h3></p>        
        </div>
    </div> -->
    <div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <div class="navbar-brand">
                <a href="index.html"><img src="<?php echo base_url('assets/images/logo34.png'); ?>" alt="KOP" width="100%"></a>                
            </div>
            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">  
					<font color='red'><B>E-Task Versi : V.20.0.10</B></font>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="notification" ><b></b></span>
                        </a>
                        <ul class="dropdown-menu notifications animated">
                            <li class='header'><span id='jumlah'><strong >You have $t new Notifications</strong></span></li>
                        </ul>	
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                        <ul class="dropdown-menu user-menu menu-icon animated bounceIn">
                            <li class="menu-heading">ACCOUNT SETTINGS</li>
                            <li><a href="?p=profile"><i class="icon-note"></i> <span>My Profile</span></a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url(); ?>logout" class="icon-menu" title='Log Out' onclick="return confirm('Are you sure to logout?');"><i class="icon-login"></i></a></li>                        
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img class='rounded-circle user-photo' alt='User Profile Picture' src='<?php echo base_url('assets/images/no_image.jpg'); ?>'>
                <div class="dropdown">
                    <span>Welcome, DIVISI <?= session()->get('fullname'); ?></span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?= session()->get('fullname'); ?></strong></a>                    
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                        <li><a href="?p=profile"><i class="icon-user"></i><font color='white'><b>My Profile</b></font></a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php" onclick="return confirm('Are you sure to logout?');"><i class="icon-power"></i><font color='white'><b>Logout</b></font></a></li>
                    </ul>
                </div>
                <hr>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hr_menu">Menu</a></li>
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane animated fadeIn active" id="hr_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                        	<li>
								<a href="#dashboard" class="has-arrow"><i class="icon-home"></i><span> Dashboard</span></a>
                                <ul>
									<li><a href="dashboard"><i class="fa fa-file"></i> Dashboard MTC</a></li>
									<li><a href="dashboard-internal"><i class="fa fa-file"></i> Dashboard GA</a></li>
								</ul>
							</li>
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="fa fa-tasks"></i><span>List Task</span></a>
                                <ul>
                                    <li><a href="#" data-toggle='modal' data-target='#pil_series'><i class="fa fa-edit"></i> Input Problem</a></li>
                                    <li><a href="?p=assign"><i class="fa fa-edit"></i>Assign Problem</a></li>
                                    <li><a href="?p=todolist"><i class="fa fa-edit"></i>To Do List</a></li>
                                    <li><a href="?p=pendingproblem"><i class="fa fa-edit"></i>Pending Problem</a></li>
                                    <li><a href="?p=sparepart"><i class="fa fa-edit"></i>Req. Sparepart</a></li>
									<li><a href="?p=planning"><i class="fa fa-calendar-alt"></i>Scheduling</a></li>
								</ul>
                            </li>
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="fa fa-edit"></i><span>Transaction</span></a>
                                <ul>
									<li><a href="?p=adjustmentin"><i class="fa fa-edit"></i>Adjustment In</a></li>
									<li><a href="?p=listadjustmentout"><i class="fa fa-edit"></i><b>Adjustment Out</b></a></li>
								</ul>
                            </li>
                            <li>
                                <a href="#Accounts" class="has-arrow"><i class="fa fa-briefcase"></i><span>Master</span></a>
                                <ul>
                                    <li><a href="?p=users"><i class="fa fa-user"></i> Users</a></li>
                                    <li><a href="?p=masterapproval"><i class="fa fa-users"></i> Approval MTC</a></li>
									<li><a href="?p=mastershift"><i class="fa fa-users"></i> Shift MTC</a></li>
									<li><a href="?p=division"><i class="fa fa-user"></i> Division</a></li>
									<li><a href="?p=masterpending"><i class="fa fa-user"></i> User Pending</a></li>
									<li><a href="?p=masterdocseries"><i class="fa fa-ellipsis-h"></i> Document Series</a></li>
                                    <li><a href="?p=machines"><i class="fa fa-ellipsis-h"></i>Machines</a></li>
									<li><a href="?p=machinesunit"><i class="fa fa-ellipsis-h"></i>Machines Unit</a></li>
									<li><a href="?p=msparepart"><i class="fa fa-ellipsis-h"></i>Sparepart</a></li>
									<li><a href="?p=checkdata"><i class="fa fa-ellipsis-h"></i> Check Data</a></li>
									<li><a href="?p=mannouncement"><i class="fa fa-ellipsis-h"></i> Announcement</a></li>
                                    </ul>
                            </li>
                            <li>
								<a href="#Accounts" class="has-arrow"><i class="fa fa-briefcase"></i><span> Report</span></a>
                                <ul>
									
									<li><a href="?p=report-masalah"> Report Masalah</a></li>
									<li><a href="?p=report-langkahkerja"> Report Kerja</a></li>
									<li><a href="?p=report-reqsparepart"> Report Sparepart</a></li>
									<li><a href="?p=report-jadwalmtc"> Report Jadwal</a></li>
                                    <li><a href="?p=searchadjustmentout"> Search Adjustment Out</a></li>
									<li><a href="?p=reportadjustmentout"> Report Adjustment Out</a></li>
                                </ul>
							</li>
                            </ul>
                    </nav>
                </div>
                
            </div>          
        </div>
    </div>
    <div id="main-content">
        <div class="container-fluid"><br />
		    <body background='black'>
		        <marquee><img src='<?php echo base_url('assets/images/200.gif'); ?>' width="6%" /><font color='red'><b>INFO TERBARU (13 Mei 2022) - </b> </font><font color='blue'><b>Untuk SEMUA USER, </b> <b>Terdapat perubahan alur program, yaitu Jika pelapor akan melaporkan sebuah kasus dengan Kategori Mesin <b>UMUM</b>, baik dengan dokumen series TSK atau PGA, laporan tersebut akan terkirim pada bagian GA. Kemudian GA akan mengalokasikan laporan tersebut, apakah akan dikerjakan Maintenance atau oleh GA sendiri.</font><font color='red'> Apabila terdapat kendala, silahkan menghubungi tim IT.</b></font></marquee>
            <?= $this->renderSection('content') ?>
            </body>
        </div>
    </div>
    <div class='modal animated fadeIn' id='pil_series' tabindex='-1' role='dialog'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h4 class='modal-title'>DEPARTEMENT PROBLEMS </h4>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                </div>
                <div class='modal-body'>
                <p>
                    <!-- <form class='row clearfix' method='POST' action='todolist/input_problem'> -->
                <form class='row clearfix' method='POST' action='<?php echo base_url('TodoList/input_problem'); ?>'>
                    <div class='col-sm-12'>
                        <div class='form-group row m-b-15'>
                            <label class='col-md-4 col-sm-4 col-form-label' for='website'>Doc. Series*</label>
                            <div class='col-md-8 col-sm-8'>
                                <select class='default-select2 form-control' name="series" id="series" required>
                                    <option value=''>--Select Doc. Series--</option>
                                    <?php
                                        $db         = db_connect();
                                        $query      = $db->query("SELECT series, dokumen, informasi FROM mdocumentseries WHERE dokumen LIKE 'TSK%'");
                                        $results    = $query->getResult();

                                        foreach ($results as $row) {
                                            echo "<option value='$row->series'>".$row->series." - ".$row->informasi."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <table width='100%'>
                        <tr>
                            <td>
                                <div class='modal-footer'>
                                    <button type='submit' class='btn btn-primary' >CHOOSE</button>
                                </div>  
                            </td>
                        </tr>
                    </table>                             
                    </form>
                </p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo base_url('assets/bundles/libscripts.bundle.js'); ?>"></script>
<script src="<?php echo base_url('assets/bundles/vendorscripts.bundle.js'); ?>"></script>

<script src="<?php echo base_url('assets/vendor/toastr/toastr.js'); ?>"></script>
<script src="<?php echo base_url('assets/bundles/chartist.bundle.js'); ?>"></script>

<script src="<?php echo base_url('assets/bundles/mainscripts.bundle.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/index.js'); ?>"></script>

<script src="<?php echo base_url('assets/vendor/dropify/js/dropify.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pages/forms/dropify.js'); ?>"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets/bundles/datatablescripts.bundle.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-datatable/buttons/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/multi-select/css/multi-select.css'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/nouislider/nouislider.min.css'); ?>"></script>

<script src="<?php echo base_url('assets/vendor/sweetalert/sweetalert.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/parsleyjs/js/parsley.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pages/tables/jquery-datatable.js'); ?>"></script>

<script src="<?php echo base_url('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/multi-select/js/jquery.multi-select.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/nouislider/nouislider.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pages/ui/dialogs.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pages/forms/advanced-form-elements.js'); ?>"></script>
<script>
    $(function() {
        // validation needs name of the element
        $('#food').multiselect();

        // initialize after multiselect
        $('#basic-form').parsley();
    });
</script>
</html>

