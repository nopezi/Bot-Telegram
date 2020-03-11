<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot telegram</title>
</head>
<body>
    <form action="" method="post">
        <select name="request">
            <option>GET</option>
            <option>POST</option>
        </select><br>
        <select name="method">
            <option value="/getMe">getMe</option>
            <option value="/getUpdates">getUpdates</option>
            <option value="/sendMessage">sendMessage</option>
        </select><br>
        <input type="text" name="id_chat" placeholder="id chat"><br>
        <textarea name="pesan" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="tombol" value="Simpan">
        <input type="submit" name="tombol" value="hapus">
    </form>
</body>
</html>
<?php
require 'function/Kumpul.php';

if($_POST['tombol'] == "hapus"){
    unset($_POST);
}else{
    $method = $_POST['method'];
    $request = $_POST['request'];
    $kirim_data = array(
        'chat_id' => $_POST['id_chat'],
        'text'    => $_POST['pesan'],
    );
    // $method = '/getUpdates';
    // $request = 'GET';
    // $kirim_data = '';
    // echo '<pre>';
    $hasil = $ambil->api($method, $request, $kirim_data);
    print_r($hasil);
    // echo $hasil['ok'];
    // echo '</pre>';
}