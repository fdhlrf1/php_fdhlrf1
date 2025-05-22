    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "testdb");

    $query = "SELECT hobi, COUNT(person_id) as jumlah_person FROM hobi GROUP BY hobi ORDER BY jumlah_person DESC";
    $result = mysqli_query($koneksi, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    if (isset($_POST)) {
        // var_dump($_POST);
        $search = $_POST['search'] ?? '';
        $query_search = "SELECT hobi, COUNT(person_id) as jumlah_person FROM hobi WHERE hobi LIKE '%$search%' GROUP BY hobi ORDER BY jumlah_person DESC";
        $result_search = mysqli_query($koneksi, $query_search);

        $rows = [];

        while ($row = mysqli_fetch_assoc($result_search)) {
            $rows[] = $row;
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Soal A nomor 2</title>
    </head>

    <body>
        <h1>Soal A | SOAL 2</h1>

        <h4>Laporan Hobi</h4>

        <!-- <label for="search" id="search">Search by hobi</label> -->
        <form action="" method="POST">
            <input type="search" name="search" placeholder="Cari berdasarkan hobi">
            <button type="submit" name="submit">Cari</button>
            <!-- <button type="reset">Reset</button> -->
        </form>

        <br>

        <table border="1" cellspacing="2" cellpadding="5">


            <thead>
                <tr>
                    <th>Hobi</th>
                    <th>Jumlah Person</th>
                </tr>
            </thead>
            <?php foreach ($rows as $value) : ?>
            <tbody>
                <tr>
                    <td><?= $value['hobi']; ?></td>
                    <td><?= $value["jumlah_person"]; ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>

    </body>

    </html>