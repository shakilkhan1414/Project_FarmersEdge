  
<?php
$title= "Sunflower";
include('../header.php');
if(file_exists("../../controller/seed.json"))
{
	$myfile = fopen('../../controller/seed.json', 'r');
	$data = fread($myfile, filesize('../../controller/seed.json'));
	$user = json_decode($data, true);

	for ($i=0; $i < sizeof($user); $i++)
	{
		if($user[$i]['sname']=='sunflower')
		{
			?>

			<table border="1" cellspacing="0" style="width: 60%; margin: auto;">
				<tr>
					<td colspan="2">


						<table style="width: 100%">
							<tr>
								<td>
									<img style="height: 50px;" src="logo.png" alt="logo">
								</td>
								<td style=" float: right; margin-top: 0px">
									<p style="padding: 5px;">Logged in as <a href="viewprofile.php"><?php echo $_SESSION['username']
									;?></a> |
									<a style="padding: 5px;" href="logout.php">Logout</a></p>
								</td>
							</tr>
						</table>
					</td>

				</tr>
				<tr>
					<td style="width: 30%; height: 250px;" >
						<label style="padding-left: 15px;">Seeds Details</label>
						<hr>
						<ul style="padding-bottom: 60px; list-style-type: none;">
							<li><a href="paddy.php">Paddy</a></li>
							<li><a href="potato.php">Potato</a></li>
							<li><a href="corn.php">Corn</a></li>
							<li><a href="pepper.php">Pepper</a></li>
							<li><a href="wheat.php">Wheat</a></li>
							<li><a href="sunflower.php">Sunflower</a></li>
							<li><a href="../seeddetails.php">Back</a></li>
						</ul>
					</td>
					<td>
						<fieldset style="margin: 20px;">
							<legend>Seed</legend>
							<table width="100%">
								<tr>
									<td style="border-bottom: 1px solid gray; padding: 5px 0px;">Picture:</td>
									<td style="border-bottom: 1px solid gray; padding: 5px 0px;">
										<img style="width: 100%;" src="<?php echo "../../assets/"; echo $user[$i]['file']; ?>" alt="">
									</td>
								</tr>
								<tr>
									<td style="border-bottom: 1px solid gray; padding: 5px 0px; width: 50%">Seed Banker Id</td>
									<td style="border-bottom: 1px solid gray; padding: 5px 0px;">
										<input type="text" name="sname" value="<?php echo $user[$i]['userid']; ?>">
									</td>
								</tr>
								<tr>
									<td style="border-bottom: 1px solid gray; padding: 5px 0px;">Seed Name</td>
									<td style="border-bottom: 1px solid gray; padding: 5px 0px;">
										<input type="text" name="sname" value="<?php echo $user[$i]['sname']; ?>">
									</td>
								</tr>
								<tr>
									<td style="border-bottom: 1px solid gray; padding: 5px 0px;">Quantity(kg)</td>
									<td style="border-bottom: 1px solid gray; padding: 5px 0px;">
										<input type="num" name="quantity" value="<?php echo $user[$i]['quantity']; ?>">
									</td>
								</tr>
								<tr>
									<td style="border-bottom: 1px solid gray; padding: 5px 0px;">Price/kg</td>
									<td style="border-bottom: 1px solid gray; padding: 5px 0px;">
										<input type="num" name="price" value="<?php echo $user[$i]['price']; ?>">
									</td>
								</tr>
								<tr>
									<td>Date</td>
									<td>
										<input type="text" name="date" value="<?php echo $user[$i]['date'];?>">
									</td>
								</tr>
							</table>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<p>Copyright &copy; 2017</p>
					</td>
				</tr>
			</table>

			<?php
		}
	}
}
else{
	echo "file does not found....";
	echo "<br>";
	?>
	<a href="../view/seeddetails.php">back</a>

	<?php
}
?>
