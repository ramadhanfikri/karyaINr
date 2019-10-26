<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  margin-top: 20px;
  font-size: 15px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

ul {
  list-style-type: none;
  margin-left: 150px;
  margin-top: -10px;
  overflow: hidden;
  background-color: #333;
}


li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  height: 30px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
</style>
</head>
<body>
<ul>
  <li></li>
  <li></li>
  <li></li>
  <li><a href="#about"></a></li>
</ul>

<div class="sidenav">
  <a href="#about">Home</a>
  <a href="#services">About</a>
  <a href="#clients">Puisi</a>
  <a href="#contact">Pantun</a>
  <a href="#contact">Novel</a>
</div>

<div class="main">
<table>
  <a href="tambah_data.php"><button class="button button2" style="margin-left: 86.5%;">Tambah</button></a>
  <tr>
    <th colspan="3" height="50px">Home</th>
    <th></th>
  </tr>
  <tr>
    <td>Judul</td>
    <td>content</td>
    <td>Foto</td>
    <td style="width: 200px;">Ket</td>
  </tr>

    <?php 
      include "connect.php";
            $sql = mysqli_query($connect, "select * from tbl_home");
            if (mysqli_num_rows($sql)) {
                foreach ($sql as $data) { ?>
                    <tr >
                        <td><?=$data['judul']?></td>
                        <td><?=$data['content']?></td>
                        <td><?=$data['foto']?></td>
                        <td>
                            <a href="hapus.php?kode=<?=$data['id']?>">Hapus</a> |
                            <a href="edit.php?kode=<?=$data['id']?>">Edit</a>
                        </td>
                    </tr>
                <?php
                } 
            }
        ?>
 
</table>

</div>

   
</body>
</html>