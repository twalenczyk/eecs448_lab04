<html>
<body>

Thank you for your purchase!
<br>
<br>Your password is: <?php echo $_POST["password"]; ?><br>

<br>Your receipt:<br>
<div class="receipt">
	<table>
		<thead>
			<tr>
				<th>Item</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Bananas</td>
				<td>$0.25</td>
				<td><?php echo $_POST["ban_q"]; ?></td>
				<td><?php $sub_ban = $_POST["ban_q"] * .25; echo $sub_ban; ?></td>  
			</tr>
			<tr>
                                <td>Apples</td>
				<td>$0.35</td>
                                <td><?php echo $_POST["app_q"]; ?></td>
				<td><?php $sub_app = $_POST["app_q"] * .35; echo $sub_app; ?></td> 
                        </tr>
			<tr>
                                <td>Oranges</td>
				<td>$0.30</td>
                                <td><?php echo $_POST["or_q"]; ?></td>
                        	<td><?php $sub_or = $_POST["or_q"] * .25; echo $sub_or; ?></td> 
			</tr>
		<tbody>
	</table>
	<br>
	Total: <?php $tot = $sub_ban + $sub_app + $sub_or; echo $tot; ?>
</div>

</body>
</html>
