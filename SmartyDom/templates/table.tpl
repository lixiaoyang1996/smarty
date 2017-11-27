<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图书信息</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
       <a style="margin-top: 50px" href="table.php?do=add" class="btn btn-success">增加</a>
  <table class="table table-bordered" style="margin-top: 50px">
    <tr>
      <th>书号</th>
      <th>书名</th>
      <th>出版社</th>
      <th>价格</th>
      <th>日期</th>
      <th>状态</th>
      <th>操作1</th>
      <th>操作2</th>
    </tr>

    {foreach $book as $books}
        <tr>
          <td>{$books.id}</td>
          <td>{$books.name}</td>
          <td>{$books.publish}</td>
          <td>{$books.price}</td>
          <td>{$books.timeDate}</td>
          <td>
        {if $books.flag == 0}
          <a href="" class="btn btn-danger">禁用</a>
        {else}
          <a href="" class="btn btn-success">启用</a>
        {/if}

        </td>
          <td>
            <a href="table.php?do=edit&id={$books.id}" class="btn btn-primary">修改</a>
        </td>
        <td>
            <a class="btn btn-warning" href="table.php?do=del&id={$books.id}">删除</a>
        </td>
        </tr>
    {/foreach}
  </table> 
    </div>
  </div>
</body>
</html>
