<?php
/*  加载Smarty类库文件    */
require 'libs/ORG/Smarty/Smarty.class.php';
/*  实例化一个Smarty对象  */
$smarty = new Smarty;
/*  定义各个目录的路径    */
/*  定义模板目录存储位置    */
$smarty->template_dir = 'templates';
/*  定义编译目录存储位置    */
$smarty->compile_dir = 'templates_c';
/*  定义configs文件存储位置    */
$smarty->config_dir = 'config';
/*  定义模板缓存目录    */
$smarty->cache_dir = 'cache';
//smarty模板有高速缓存的功能，如果这里是true的话即打开caching，但是会造成网页不立即更新的问题
$smarty->caching = false;
$smarty->left_delimiter = "{"; //重新定义边界，因为默认边界“{}“符，在html页面中嵌入js脚本文件编写代码段时使用的就是”{}“符，自定义边界符还可以是<{ }>, {/ /} 等
$smarty->right_delimiter = "}";

$conn = mysqli_connect("localhost","root","") or die("error connecting");
mysqli_query($conn,"set names 'utf8'");

mysqli_select_db($conn,"bookInfo");

//模拟路由功能
	if(!$_GET){
		loginview($conn);
	}elseif($_GET['do'] == 'doLogin'){
		doLogin($conn);
	}elseif($_GET['do'] == 'show'){
		show($conn);
	}elseif($_GET['do'] == 'del'){
		del($conn);
	}elseif($_GET['do'] == 'add'){
		addview($conn);
	}elseif($_GET['do'] == 'doAdd'){
		doAdd($conn);
	}elseif($_GET['do'] == 'edit'){
		editview($conn);
	}elseif($_GET['do'] == 'doEdit'){
		doEdit($conn);
	}


	function loginview($conn){
		$smarty = new Smarty();
		$smarty->display("login.html");
	}

	function doLogin($conn){
		$userName = $_POST['userName'];
		$pwd = $_POST['pwd'];

		$sql = "select * from admin where userName = 'admin'";
		$rs = mysqli_query($conn,$sql);
		// print_r($rs);
		if(mysqli_num_rows($rs)==0){
			header("Location:table.php");
		}else{
			$arr = mysqli_fetch_array($rs);
			if($arr['userName']==$userName&&$arr['pwd']==$pwd){
				// header("Location:table.php?do=show");
				echo "<script> alert('登录成功');parent.location.href='table.php?do=show'; </script>"; 
			}else{
				header("Location:table.php");
			}
		}
	}
	function show($conn){
	$smarty = new Smarty;

	$sql = "select * from book";
	$rs = mysqli_query($conn,$sql);

	$book = array();
	while ($row = mysqli_fetch_array($rs)) {
		array_push($book,$row);
	}
	// print_r($book);

	$smarty->assign("book",$book);
	$smarty->display("table.tpl");
	}

	function addview(){
		$smarty = new Smarty;
		$smarty->display("add.html");
	}
	
	function doAdd($conn){
	$name = $_POST['name'];
	$publish = $_POST['publish'];
	$price = $_POST['price'];
	$timeDate = $_POST['timeDate'];

	$sql = "insert into book (name,publish,price,timeDate) values('$name','$publish','$price','$timeDate');";
	//echo $sql; exit();
	mysqli_query($conn,$sql);
	header("Location:table.php?do=show");
	}

	function editview($conn){
		$id = (int)$_GET['id'];
		$sql = "select * from book where id=".$id;

		$rs = mysqli_query($conn,$sql);
		$books = mysqli_fetch_array($rs); 

		$smarty = new Smarty;

		$smarty->assign('books',$books);
		$smarty->display("update.tpl");
	}

	function doEdit($conn){
		$id =$_POST['idw'];
		$name = $_POST['name'];
		$publish = $_POST['publish'];
		$price = $_POST['price'];
		$timeDate = $_POST['timeDate'];

		$sql = "update book set name='$name', publish='$publish',price='$price',timeDate='$timeDate' where id='$id'";
		// echo $sql;
		// exit();
		mysqli_query($conn,$sql);
		header("Location:table.php?do=show");
	}
	function del($conn){
	$id = (int)$_GET['id'];
	$sql = "delete from book where id =".$id;
	mysqli_query($conn,$sql);
	header("Location:table.php?do=show");
}


