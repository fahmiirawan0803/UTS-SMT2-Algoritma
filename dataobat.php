<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($curl);
curl_close($curl);

$data = json_decode($output, true);
//echo "<pre>"; print_r($data); echo "</pre>";

?>

<html>
    <head>
        <title>Daftar Obat</title>
    </head>
    <body>
        <div  class ="card-body">
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
        </div>
    </body>
</html>