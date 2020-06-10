<?php
if(isset($_POST['kirim'])){
echo '<table>';
echo '<tr><td>'.'NIM: '.'</td><td>'.$_POST['nim'].'</td></tr>';
echo '<tr><td>'.'Nama: '.'</td><td>'.$_POST['nama'].'</td></tr>';
echo '<tr><td>'.'Jenis Kelamin: '.'</td><td>'.$_POST['kelamin'].'</td></tr>';
echo '<tr><td>'.'Alamat: '.'</td><td>'.$_POST['alamat'].'</td></tr>';
echo '<tr><td>'.'Program Studi: '.'</td><td>'.$_POST['programstudi'].'</td></tr>';
echo '<tr><td>'.'Bahasa Pemrograman yang dikuasai: '.'</td><td>';
if (isset($_POST['Pascal/Delphi'])) echo $_POST['Pascal/Delphi']."<br />";
if (isset($_POST['C/C++'])) echo $_POST['C/C++']."<br />";
if (isset($_POST['Visual_Basic'])) echo $_POST['Visual_Basic']."<br />";
echo '</table>';
}
?>