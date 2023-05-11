<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($curl);
curl_close($curl);

$data = json_decode($output, true);
//echo "<pre>"; print_r($data); echo "</pre>";
$onscreen = '<table class="table" width="100%">
                <thead>
                    <th>KODE BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>GROUP BARANG</th>
                    <th>HARGA JUAL</th>
                    <th>QUANTITY</th>
                    
                </thead>
            ';
foreach($response_array as $resp){
    if($resp['g_code'][0] === "B"){
        $onscreen .= '<tr>
                    <td>'.$resp['i_code'].'</td>
                    <td>'.$resp['i_name'].'</td>
                    <td>'.$resp['g_code'].'</td>
                    <td>'.$resp['i_sell'].'</td>
                    <td>'.$resp['i_qty'].'</td>
                </tr>';
    }
}
$onscreen .= '</table>';
echo $onscreen;

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