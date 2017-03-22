<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>userInfo</title>
	
</head>
<body>
	<div id="container">
		<ol class="breadcrumb">
			<li class="active"><a href="<?php echo site_url('home')?>">Email</a></li>
			<li class="active"><a href="<?php echo site_url('home')?>">Email Log</a></li>
			<li class="active"><a href="<?php echo site_url('home')?>">Email Event</a></li>
			<li class="active">Create</li>
		</ol>
		<div class="row" style="margin:0">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						User Info
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="<?php echo site_url('Email_event/createdeal');?>" method="post">
							<div class="form-group">
								<label class="col-sm-4 control-label">
									uesrname
									<span class="">*</span>
								</label>
								<div class="col-sm-6">
									<input name="username" class="form-control input-sm" required="required" type="text" maxlength="50" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									email
									<span class="">*</span>
								</label>
								<div class="col-sm-6">
									<input name="email" class="form-control input-sm" required="required" type="text" maxlength="50" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-4">
									<button type="submit" class="btn btn-primary btn-sm" name="">Create</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="<?php echo base_url('assets/jquery-2.1.4.min')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css');?>">
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap.min.js');?>"></script>
</body>
</html>