<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Poppins'/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/list-siswa.css"/>
</head>

<body>
    <header class="d-flex justify-content-center">
        <h1>Data Siswa</h1>
    </header>

    <div class="d-block mx-5">
        <nav class="mx-5 d-flex justify-content-between">
            <nav class="mx-5 d-flex">
                <a href="index.php" class="mt-4 mx-5 btn btn-danger"><< Back</a>
            </nav>
            <nav class="mx-5 d-flex justify-content-end">
                <a href="form_simpan.php" class="btn btn-primary mt-4 mx-5">[+] Tambah</a>
            </nav>
        </nav>

        <br>
        <div class="d-flex justify-content-center">
            <table border="1">
            <thead>
                <tr class="text-center col-md-2">
                    <th class="text-center col-md-2">Foto</th>
                    <th class="text-center col-md-2">NIS</th>
                    <th class="text-center col-md-2">Nama</th>
                    <th class="text-center col-md-2">Jenis Kelamin</th>
                    <th class="text-center col-md-2">No Telp</th>
                    <th class="text-center col-md-2">Alamat</th>
                    <th class="text-center col-md-2">Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include "koneksi.php";
                $sql = $pdo->prepare("SELECT * FROM siswa");
                $sql->execute();

                while($data = $sql->fetch()){
                    echo "<tr>";
                    echo "<td class='col-md-2 text-center'><img src='images/".$data['foto']."' width='100' height='100'></td>";
                    echo "<td class='col-md-2'>".$data['nis']."</td>";
                    echo "<td class='col-md-2'>".$data['nama']."</td>";
                    echo "<td class='col-md-2'>".$data['jenis_kelamin']."</td>";
                    echo "<td class='col-md-2'>".$data['telp']."</td>";
                    echo "<td class='col-md-2'>".$data['alamat']."</td>";

                    echo "<td class='text-center col-md-2'>";
                    echo "<a href='form_ubah.php?id=".$data['id']."' class='btn-sm btn-info mx-1'>Edit</a>";
                    echo "<a href='proses_hapus.php?id=".$data['id']."' class='btn-sm btn-danger mx-1'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>

            </tbody>
            </table>
        </div>
    </div>
</body>
</html>