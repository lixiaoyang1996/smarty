<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>
		{{$title}}
	</title>
	<style type="text/css">
		p{
			color:{{$color}};
		}
	</style>
</head>
<body>
	<p>what is Smarty!</p>
	
	{if $c == "vip"}
	{{$time|test:"Y-m-d H:s"}}	
	{else}
	{{$hello|cat:"!!!Isfalse"}}
	{/if}


</body>
</html>