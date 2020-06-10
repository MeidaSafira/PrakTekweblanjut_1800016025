<?php
if(isset($_POST['simpan'])){
echo '<table>';
echo '<tr><td>'.'NIM '.'</td><td>'.$_POST['NIM'].'</td></tr>';
echo '<tr><td>'.'Nama: '.'</td><td>'.$_POST['nama'].'</td></tr>';
echo '<tr><td>'.'Jenis Kelamin: '.'</td><td>'.$_POST['jns_klmin'].'</td></tr>';
echo '<tr><td>'.'Program Studi: '.'</td><td>'.$_POST['programstudi'].'</td></tr>';
echo '</table>';
}
?>