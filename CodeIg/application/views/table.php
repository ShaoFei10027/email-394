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
		<h3>- Email -</h3>
		<div id="kinds">
			<select style="width:150px;height:34px;">
				<option value="-1">All Type</option>
				<option value="0">实时预警</option>
				<option value="1">定时预警</option>
			</select>
			<select style="width:150px;height:34px;">
				<option value="all">All Module</option>
				<option value="banner campaign">banner campaign</option>
				<option value="data campaign">data campaign</option>
			</select>
		</div>
		<table id="table" data-toggle="table">
		</table>
	</div>
	<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap-table.min.css">
	<script type="text/javascript" src="assets/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-table.min.js"></script>
	<script type="text/javascript">
	updateTable();
		function updateTable(){
			console.log('abc');
			$("#table").bootstrapTable('destroy'); 
			$('#table').bootstrapTable({
			url:"index.php/Home/getres",
			method: 'get', 
			datatype:'json',
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
			sidePagination: "client", 
			showRefresh: true,
			showToggle:true,
			iconsPrefix:'glyphicon',
			toolbar:"#kinds",
			//queryParamsType:"",
			queryParams:getSelectVal(),
			columns: [
				{
					title: 'id',
					field: 'id',
					sortable:true
				},
				{
					title: 'type',
					field: 'type',
				},
				{
					title: 'module',
					field: 'module'
				},
				{
					title: 'content',
					field: 'content'
				},
				{
					title: 'time',
					field: 'time'
				},
				{
					title: 'expire-time',
					field: 'expire-time'
				},
				{
					title: 'is_del',
					field: 'is_del'
				}
			]
		});
		}
		
		function getSelectVal(){
			var str1 = $("#kinds select:first-child").val();
			var str2 = $("#kinds select:last-child").val();
			return "type="+str1+"&"+"module="+str2;
		}

		$("#kinds").change(function(){
			updateTable();
		});
	</script>
</body>
</html>