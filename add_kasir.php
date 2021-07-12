<?php include('header.php');?>
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_kasir.php" method="post" name="form1">
		<table width="25%" border="0">
			
			<tr> 
				<td>Nama</td>
				<td><input type="text" class="input" name="nama"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" class="input" name="alamat"></td>
			</tr>
			<tr>
				<td>No TELP</td>
				<td><input type="text" class="input" name="no_telp"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add Kasir"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
	
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
		
		// include database connection file
		include("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO kasir(id_kasir,nama,alamat,no_telp) 
		VALUES('','$nama','$alamat','$no_telp')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>