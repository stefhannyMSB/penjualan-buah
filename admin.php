<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin FShop</title>
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
                <span class="admin_name">Admin FShop</span>
            </div>
        </nav>
        <div class="home-content">
            <h1>Selamat Datang Admin</h1>
            <h2 id="text"></h2>
            <h3 id="date"></h3>
            <?php 
            include 'koneksi.php';
                
                // Menghitung jumlah data di jenis
                $sql_jenis = "SELECT COUNT(*) as total_jenis FROM tb_jenis";
                $result_jenis = $koneksi->query($sql_jenis);
                $total_jenis = $result_jenis->fetch_assoc()['total_jenis'];
                
                // Menghitung jumlah data di transaksi
                $sql_transaksi = "SELECT COUNT(*) as total_transaksi FROM tb_transaksi";
                $result_transaksi = $koneksi->query($sql_transaksi);
                $total_transaksi = $result_transaksi->fetch_assoc()['total_transaksi'];
            ?>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $total_jenis; ?></div>
                        <div class="cardName">jenis</div>
                    </div>
                    <div class="iconBx">
                        <i class='bx bx-cube-alt'></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $total_transaksi; ?></div>
                        <div class="cardName">transaks</div>
                    </div>
                    <div class="iconBx">
                        <i class='bx bx-archive'></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>

    <style>
        .cardBox {
            position: relative;
            width: 100%;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 50px;
        }
        .cardBox .card {
            position: relative;
            padding: 20px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.20);
        }
        .cardBox .card .numbers {
            position: relative;
            font-weight: 500;
            font-size: 2.5rem;
        }
        .cardBox .card .cardName {
            font-size: 1.3rem;
            margin-top: 5px;
        }
        .cardBox .card .iconBx {
            font-size: 4.5rem;
            color: darkslateblue;
        }
        .cardBox .card:hover {
            background: #c7c0e9;
        }
    </style>
</body>

</html>
