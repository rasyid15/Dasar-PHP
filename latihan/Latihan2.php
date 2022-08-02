<?php
// $array = ['One', 'Two', 'Three'];
// $array_length = count($array);
 
// for ($i = 0; $i < $array_length; ++$i) {
// echo $array[$i];
// echo '<br>';
// }
$siswa = array(
    ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'], 
    ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'], 
    ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'], 
    ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'], 
);
$array_length = count($siswa);
for($i = 0; $i < $array_length; $i++){
echo $siswa[0][1];
echo '<br>';
}
?>