<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl); // bentuk JSON
echo $response;
?>

<html>
    <head>
        <title>Daftar Obat</title>
    </head>
    <body>
        <h1>Data Obat</h1>
        <table border="1" style="width: 100%">
            <tr>
                <td>Kode Barang</td>
                <td>Nama Barang</td>
                <td>Grup Barang</td>
                <td>Harga Jual</td>
            </tr>


        <?php foreach($data as $obat) : ?>
            <tr>
                <td><?= $obat['i_code'] ?></td>
                <td><?= $obat['i_name'] ?></td>
                <td><?= $obat['g_code'] ?></td>
                <td><?= $obat['i_sell'] ?></td>
            </tr>

        <?php endforeach ?>
        </table>
    </body>
</html>