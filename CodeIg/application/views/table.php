<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>table</title>
	
</head>
<body>
	<div id="container">
		<ol class="breadcrumb">
			<li class="active"><a href="<?php echo site_url('home')?>">Email</a></li>
			<li class="active">Email Log</li>
		</ol>
		<div id="kinds">
			<select style="width:120px;height:34px;">
				<option value="All">All Type</option>
				<option value="0">实时预警</option>
				<option value="1">定时预警</option>
			</select>
			<select style="width:120px;height:34px;">
				<option value="All">All Module</option>
				<option value="baner campaign">baner campaign</option>
				<option value="data campaign">data campaign</option>
			</select>
			<input id="ipdate" type="text" name="" style="width:180px;height:34px;">
		</div>
		<div id="modalContent" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					Email Content
				</h4>
			</div>
			<div class="modal-body" style="height:400px;">
				<form class="form form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label">To</label>
						<div class="col-sm-8">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Subject</label>
						<div class="col-sm-8">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Body</label>
						<div class="col-sm-8">
							<div id="modalBodyContent" class="form-control" contenteditable="true" style="height:220px;">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">From</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" disabled="disabled">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
				<button type="button" class="btn btn-primary">
					提交更改
				</button>
			</div>
		</div><!-- /.modal-content -->
		</div>
		</div>
		<table id="table" data-toggle="table">
		</table>
	</div>
	<script type="text/javascript" src="<?php echo base_url('assets/jquery-2.1.4.min')?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-table.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.daterangepicker/daterangepicker.css')?>">
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap-table.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap.daterangepicker/moment.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap.daterangepicker/daterangepicker.js')?>"></script>
	<script type="text/javascript">
	updateTable();
	$("#ipdate").daterangepicker({
		'format':'YYYY-MM-DD'
	},function(start,end,label){
		//$("#ipdate").val('&start='+start.format('YYYY-MM-DD')+'&end='+end.format('YYYY-MM-DD'));
		//console.log($("#ipdate").val());
		//console.log('A date range was chosen: ' +start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	});
		function updateTable(){
			$("#table").bootstrapTable('destroy'); 
			$('#table').bootstrapTable({
			url:"<?php echo site_url('Home/getres')?>",
			method: 'get', 
			//datatype:'json',
			classes:"table table-hover",
			sortable: true,
			sortOrder: "dsc",
			sortName:"id",
			pagination:true,
			pageSize:1,
			pageList: [1, 2, 3],
			pageNumber:1,
			silentSort:false,
			showColumns:true,
			sidePagination: "server", 
			dataField: "rows",
			showRefresh: true,
			showToggle:true,
			iconsPrefix:'glyphicon',
			toolbar:"#kinds",
			queryParamsType:"limit",
			queryParams:queryParams,//请求服务器时所传的参数,
			columns: [
				{
					title: 'id',
					field: 'id',
					sortable:true,
					valign: 'middle',
					width:70
				},
				{
					title: 'type',
					field: 'type',
					valign: 'middle',
					width:70
				},
				{
					title: 'event',
					field: 'event',
					valign: 'middle',
					width:150,
					formatter: operateEvent
				},
				{
					title: 'entity',
					field: 'entity',
					valign: 'middle',
					width:70
				},
				{
					title: 'content',
					field: 'content',
					valign: 'middle',
					width:100,
					formatter: operateContent
				},
				{
					title: 'send_time',
					field: 'send_time',
					valign: 'middle',
					width:180
				},
				{
					title: 'expire-time',
					field: 'expire-time',
					valign: 'middle',
					width:180
				}
			]
		});
		}
		
		function queryParams(params){
        	return{
        	    //每页多少条数据
        	    pageSize: params.limit,
        	    //请求偏移
        	    pageIndex:params.offset,
        	    type:$('#kinds select:first-child').val(),
        	    event:$('#kinds select:nth-child(2)').val()
        	}
    	}
		function getSelectVal(){
			var str1 = $("#kinds select:first-child").val();
			var str2 = $("#kinds select:nth-child(2)").val();
			var str3 = $("#ipdate").val();
			console.log(str3);
			return "type="+str1+"&"+"event="+str2+"&date="+str3;
		}

		$("#kinds").change(function(){
			updateTable();
		});

		function operateEvent(value, row, index) {
			var id=row.id;
            return '<a href="<?php echo site_url('email_event?id=')?>'+id+'" style="cursor:pointer">'+value+'</a>';
        }
        function operateContent(value, row, index) {
            return '<a data-toggle="modal" data-target="#modalContent" onclick="putContent(\''+value+'\');" style="cursor:pointer">preview</a>';
        }
        function putContent(value){
        	console.log(value);
        	$("#modalBodyContent").html(value);
        } 
	</script>
</body>
</html>