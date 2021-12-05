<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap');

* {
    box-sizing: border-box;
}

body {
    min-height: 100vh;
    display: flex;
    font-family: 'Roboto', sans-serif;
}

.table_responsive {
    max-width: 1000px;
    background-color: #efefef33;
    padding: 15px;
    overflow: auto;
    margin: auto;
    border-radius: 4px;
}

table {
    width: 100%;
    font-size: 13px;
    color: #444;
    white-space: nowrap;
    border-collapse: collapse;
}

table>thead {
    background-color: #04befe;
    color: #fff;
}

table>thead th {
    padding: 15px;
}

table th,
table td {
    border: 1px solid #00000017;
    padding: 10px 15px;
}

table>tbody>tr>td>img {
    display: inline-block;
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 2px 6px #0003;
}


.action_btn {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.action_btn>a {
    text-decoration: none;
    color: #444;
    background: #fff;
    border: 1px solid;
    display: inline-block;
    padding: 7px 20px;
    font-weight: bold;
    border-radius: 3px;
    transition: 0.3s ease-in-out;
}

.action_btn>a:nth-child(1) {
    border-color: #26a69a;
}

.action_btn>a:nth-child(2) {
    border-color: orange;
}

.action_btn>a:hover {
    box-shadow: 0 3px 8px #0003;
}


table>tbody>tr {
    background-color: #fff;
    transition: 0.3s ease-in-out;
}


table>tbody>tr:nth-child(even) {
    background-color: rgb(238, 238, 238);
}

table>tbody>tr:hover{
    filter: drop-shadow(0px 2px 6px #0002);
}
    }
</style>

<body>
<div class="table_responsive">
    <table>
    <thead>
            <th># </th>
            <th>Foto Facility</th>
            <th>Request Facilitiy</th>
            <th>Nomor Facility</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Status</th>
    </thead>
   <?php  
        $i = 1;
        foreach ($reqlist as $row) {
        $base_url = base_url();
        $detail = $base_url;
        $cek = $row['status'];
        if($cek == 0){
             $status = 'Waiting for approval';
        } else if ($cek == 1){
             $status = 'Approved';
        } else {
             $status = "Rejected";
        }
    ?>
        <tbody>
            <tr>
                <td><?= $i; ?> </td>
                <td><img src="<?=  base_url('images/fasilitas/'). $row['gambar_kamar']; ?>" alt="" width=200px  height="100px"> </td>
                <td><?=  $row['nama_kamar'];?> </td>
                <td><?=  $row['nomor_kamar'];?> </td>
                <td><?=  $row['tanggal_book'];?> </td>
                <td><?=  $row['tanggal_out'];?> </td>
                <td><?=  $status; ?> </td>
            <tr>
        </tbody>
        <?php $i++; } ?>
    </table>
    </div>
</body>

</html>