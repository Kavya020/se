<html>
<head>
<title> abc </title>
<style>
table,tr,td{
border:none;
}
tr,td{
font-size:24px;
color:powder blue;
}
h1{
text-align:center;
color:greeen;
}
</style>
<script>
function myFunction() {
    document.getElementById("demo1").innerHTML ="Room alloted";
}
</script>
</head>
<body bgcolor="#808080">
<h1> Room Allocation</h1>
<form id="demo1" action="123.php" method="post" >
<table>
<tr><td>Name 1</td><td><input type="text" name="name" required pattern="^[a-zA-Z]{5,20}$"></td> <td></td><td></td><td></td> <td> Regno 1 </td><td><input type="text" name="num" required pattern="^[a-zA-Z0-9]{9,9}$" </td></tr>
<tr><td>Name 2</td><td><input type="text" name="name" required pattern="^[a-zA-Z]{5,20}$"></td><td></td><td></td><td></td> <td> Regno 2</td><td><input type="text" name="num" required pattern="^[a-zA-Z0-9]{9,9}$"</td></tr> 

</table>
<button type="button" onclick="myFunction()">Submit</button>
</form>
</body>
</html>
