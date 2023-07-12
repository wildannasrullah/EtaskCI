<!doctype html>
<html lang="en">
<head>
<title>:: E-Log Book :: Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">


<link rel="icon" href="<?php echo base_url('assets/images/icon.jpg'); ?>" type="image/x-icon">
<!-- VENDOR CSS -->

<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" >
<link href="<?php echo base_url('assets/fontawesome-free-5.1.0-web/css/all.css'); ?>" />

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?> ">
<link rel="stylesheet" href="<?php echo base_url('assets/css/color_skins.css');?> ">
</head>

<body class="theme-orange">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
					<div class="card">
                        <div class="header">
                            <p class="lead">Login to your account</p>
                        </div>
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="body">
                            <form class="form-auth-small" action="<?= base_url(); ?>login/process" method='POST'>
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            </form>
                        </div>
						<p align='center'><a href='USER_MANUAL_ETASK.pdf' target='_blank' title='Klik untuk melihat Cara Penggunaan Sistem'><b>Cara Penggunaan Program E-Task</b></a></p>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
</html>
