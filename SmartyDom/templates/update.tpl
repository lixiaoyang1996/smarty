<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>
		更新
	</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<form class="form-horizontal" role="form" method="post" action="table.php?do=doEdit">
	 		<input type="hidden" name="idw" value="{$books.id}"/>
	<div class="form-group" style="margin-top: 75px">
		<label for="firstname" class="col-sm-2 control-label">书名</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="firstname" value="{$books.name}" name="name" >
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">出版社</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="firstname" value="{$books.publish}" name="publish"> 
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">价格</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="firstname" value="{$books.price}" name="price" >
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">日期</label>
		<div class="col-sm-6">
			<input type="date" class="form-control" id="firstname" value="{$books.timeDate}" name="timeDate">
		</div>
	</div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <input type="hidden" name="id" value="">
            <button type="submit"  class="btn btn-primary btn-lg btn-block">
			更新
            </button>
        </div>
    </div>
</form>

</body>
</html>