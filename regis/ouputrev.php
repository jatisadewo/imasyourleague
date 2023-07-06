<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM PENDAFTARAN</title>
        <link rel="stylesheet" href="stylerev.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
</head>
<body>
      
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>IMASYOURLEAGUE</a></div><img class=menu-icon src="img/menu.png" onclick=menutoggle()>
            <div class="menu">
                <ul id="menuicon">
                    <li><a href="../index.html#home">Home</a></li>
                    <li><a href="../index.html#about">About</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Info</a>
                        <div class="dropdown-content">
                            <a href="../index.html#lat">Jadwal Latihan</a>
                            <a href="../index.html#lok">Lokasi</a>
                            <a href="../index.html#rules">Peraturan Anggota</a>
                        </div>
                    </li>
                    <li><a href="../index.html#gallery">Gallery</a></li>
                    <li><a href="../index.html#contact">Contact</a></li>
                    <li><a href="regisrev.html">Join US!</a></li>
                </ul>
                <script>
                    var menuicon = document.getElementById("menuicon");
                    menuicon.style.maxHeight = "0px";
            
                    function menutoggle() {
                        if (menuicon.style.maxHeight == "0px") {
                            menuicon.style.maxHeight = "600px";
                        } else {
                            menuicon.style.maxHeight = "0px";
                        }
                    }
                </script>
            </div>
        </div>
    </nav>

    <div class="container1">
        <table>
        <tr>
        <div class="judul"><h1> Selamat Anda telah terdaftar sebagai Anggota</h1></div>
        <br>
        </tr>
        <table width="500" border="0">
        <?php
            error_reporting(0);
            $name=$_POST['name'];
            $gender=$_POST['gender'];
            $place=$_POST['place'];
            $date=$_POST['date'];
            $hp=$_POST['hp'];
            $parent=$_POST['parent'];
            $telp=$_POST['telp'];
            $prov=$_POST['prov'];
            $kota=$_POST['kota'];
            $kec=$_POST['kec'];
            $des=$_POST['des'];
            $addres=$_POST['addres'];
            $email=$_POST['email'];
            ?>
            <tr>
                <td>Nama Anak : </td>
                <td>
                    <?php
                    echo $name;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Gender  : </td>
                <td>
                    <?php
                    echo $gender;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir : </td>
                <td>
                    <?php
                    echo $place;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir : </td>
                <td>
                    <?php
                    echo $date;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Telepon Pribadi : </td>
                <td>
                    <?php
                    echo $hp;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Nama Orang Tua : </td>
                <td>
                    <?php
                    echo $parent;
                    ?>
                </td>
            </tr>
            <tr>
                <td>No. HP Orang tua : </td>
                <td>
                    <?php
                    echo $telp;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Provinsi : </td>
                <td>
                    <?php
                    echo $prov;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Kota : </td>
                <td>
                    <?php
                    echo $kota;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Kecamatan : </td>
                <td>
                    <?php
                    echo $kec;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Kelurahan/Desa : </td>
                <td>
                    <?php
                    echo $des;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td>
                    <?php
                    echo $addres;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Email : </td>
                <td>
                    <?php
                    echo $email;
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="tombol"> <a href="imasyourleauge.html">home</a></button>
                </td>
            </tr>
        </table>
        </div>
       
        <div>
        <br>
        <br>
    </div>
    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <h2 class="deskripsi">Contact</h2>
                <div class="footer-section">
                    <p class="c">Contact Us</p>
                    <a class="add" href="https://www.google.com/maps/dir/-6.2211353,107.0185126/-6.2395539,106.882773/@-6.2397812,106.8795216,12z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0">Jl. Inspeksi Saluran Kali Malang No.3A, RT.1/RW.1, Cipinang Besar Sel., Kecamatan Jatinegara</a>
                    <p>Kode Pos: 13620</p>
                </div>
                <div class="footer-section">
                    <p class="d">Follow Us</p>
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/imasyourleague"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/imasyourleague/"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/iMasyour/featured"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-google"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/iMasyourLeague"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/iMasyourLeague"><i class="fab fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    </body>
</html>