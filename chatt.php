<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot telegram</title>
</head>
<body>
<?php
require 'function/Kumpul.php'; 
$hasil = $ambil->api('/getUpdates', 'GET', null);
$hasil = json_decode($hasil);
print_r($hasil->result);
?>
    <!-- <form action="" method="post">
        <input type="text" name="id_chat" placeholder="id chat"><br>
        <textarea name="pesan" id="" cols="100" rows="1"></textarea><br>
        <input type="submit" name="tombol" value="Simpan">
        <input type="submit" name="tombol" value="hapus">
    </form>
</body>
</html> -->
<?php
// require 'function/Kumpul.php';

// if($_POST['tombol'] == "hapus"){
//     unset($_POST);
// }else{
//     $method = 'POST';
//     $request = '/sendMessage';
//     $kirim_data = array(
//         'chat_id' => $_POST['id_chat'],
//         'text'    => $_POST['pesan'],
//     );
//     // $method = '/getUpdates';
//     // $request = 'GET';
//     // $kirim_data = '';
//     // echo '<pre>';
//     $hasil = $ambil->api($method, $request, $kirim_data);
//     print_r($hasil);
//     // echo $hasil['ok'];
//     // echo '</pre>';
// }