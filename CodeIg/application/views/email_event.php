<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>event</title>
	
</head>
<body>
	<div id="container">
		<ol class="breadcrumb">
			<li class="active"><a href="<?php echo site_url('home')?>">Email</a></li>
			<li class="active"><a href="<?php echo site_url('home')?>">Email Log</a></li>
			<li class="active">Email Event</li>
		</ol>
		<div class="row" style="margin:0">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Basic Info</div>
					<div class="panel-body">
						<form class="form form-horizontal">
							<div class="form-group">
								<label class="col-sm-4 control-label">id</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" disabled="disabled" value="<?php echo $id;?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">type</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" disabled="disabled" value="<?php echo $type;?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">event</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" disabled="disabled" value="<?php echo $event;?>">
								</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">User Info</div>
					<div class="panel-body">
						<div id="toolbar">
							<a class="btn btn-default btn-sm" href="<?php echo site_url('Email_event/create?adverId=0')?>"
							>
								<i class="glyphicon glyphicon-plus"></i>
								Create
							</a>
							<button id="delete_btn" class="btn btn-default btn-sm" disabled="disabled" >
								<i class="glyphicon glyphicon-remove"></i>
								Delete
							</button>
						</div>
						<table id="table" data-toggle="table">
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="<?php echo base_url('assets/jquery-2.1.4.min')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-table.min.css')?>">
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap-table.min.js')?>"></script>
<script type="text/javascript">
	$('#table').bootstrapTable({
		url:"<?php echo site_url('Email_event/userinfo')?>",
		method: 'get', 
		datatype:'json',
		classes:"table table-hover",
		sortable: true,
		sortOrder: "dsc",
		sortName:"id",
		pagination:true,
		pageSize:5,
		pageList: [5, 10, 15],
		pageNumber:1,
		silentSort:false,
		clickToSelect:true,
		//showColumns:true,
		sidePagination: "client", 
		//showRefresh: true,
		//showToggle:true,
		iconsPrefix:'glyphicon',
		toolbar:"#toolbar",
		//queryParamsType:"",
		//queryParams:getSelectVal(),
		clickToSelect: true,
		columns: [
			{
				checkbox: true,
				visible: true
			},
			{
				title: 'username',
				field: 'username',
				valign: 'middle'
			},
			{
				title: 'email',
				field: 'email',
				valign: 'middle'
			}
		]
	});


	function getIdSelections() {
	    return $.map($('#table').bootstrapTable('getSelections'), function(row) {
	        return row.username;
	    });
	}

	$("#delete_btn").on('click',function(){
		alert(getIdSelections());
	});
</script>
</body>
</html>