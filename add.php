<html>
<head>
	<title>Add Review</title>
</head>

<body>
	<h2>Add Review</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Order No:</td>
				<td><input type="text" name="orderNo"></td>
			</tr>
			<tr> 
				<td>Comment</td>
				<td><input type="text" name="rcomment"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>

