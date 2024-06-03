<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="admin.css" />
	<!-- Boxicons CDN Link -->
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>FShop Admin | jenis </title>
</head>

<body>
	<div class="sidebar">
		<div class="logo-details">
			<i class="bx bx-category"></i>
			<span class="logo_name">FShop</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="admin.php" class="active">
					<i class="bx bx-grid-alt"></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="jenis.php">
					<i class="bx bx-box"></i>
					<span class="links_name">jenis</span>
				</a>
			</li>
			<li>
				<a href="transaksi.php">
					<i class="bx bx-list-ul"></i>
					<span class="links_name">transaksi</span>
				</a>
			</li>
			<li>
				<a href="logout.php">
					<i class="bx bx-log-out"></i>
					<span class="links_name">Log out</span>
				</a>
			</li>
		</ul>
	</div>
	<section class="home-section">
		<nav>
			<div class="sidebar-button">
				<i class="bx bx-menu sidebarBtn"></i>
			</div>
			<div class="profile-details">
				<span class="admin_name">FShop Admin</span>
			</div>
		</nav>
		<div class="home-content">
			<h3>jenis</h3>
			<button type="button" class="btn btn-tambah">
				<a href="jenis-entry.php">Tambah Data</a>
			</button>
			<table class="table-data">
				<thead>
					<tr>
						<th>jenis</th>
						<th scope="col" style="width: 15%">harga</th>
						<th scope="col" style="width: 20%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include 'koneksi.php';
					$sql = "SELECT * FROM tb_jenis";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
			   <tr>
				<td colspan='5' align='center'>
                           Data Kosong
                        </td>
			   </tr>
				";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
                    <tr>
                      <td>$data[jenis]</td>
                      <td>$data[harga]</td>
                      <td >
                        <a class='btn-edit' href=jenis-edit.php?id=$data[id]>
                               Edit
                        </a> | 
                        <a class='btn-delete' href=jenis-hapus.php?id=$data[id]>
                            Hapus
                        </a>
                      </td>
                    </tr>
                  ";
					}
					?>
				</tbody>
			</table>
		</div>
	</section>
	<script>
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function() {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};
	</script>
</body>

</html>
