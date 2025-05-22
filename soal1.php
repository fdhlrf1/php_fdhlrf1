<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal A</title>
</head>

<body>

    <form action="" method="POST">
        <h2>Tampilan No. 1</h2>

        <table>
            <tr>
                <td>
                    <label for="baris" id="baris">Inputkan Jumlah Baris:</label>
                </td>
                <td>
                    <input type="number" id="baris" name="baris">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="kolom" id="kolom">Inputkan Jumlah Kolom:</label>
                </td>
                <td>
                    <input type="number" id="kolom" name="kolom">
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" name="submit_pertama">Submit</button>
                </td>
            </tr>
        </table>


        <h2>Tampilan No. 2</h2>

        <?php
        if (isset($_POST['submit_pertama'])) {
            $baris = $_POST['baris'];
            $kolom = $_POST['kolom'];

            echo "<form action='' method='POST'>";

            echo '<table>';

            for ($i = 1; $i <= $baris; $i++) {
                echo '<tr>';
                for ($j = 1; $j <= $kolom; $j++) {

                    echo '<td>';
                    echo "{$i}.{$j}: <input type='text' name='data[$i][$j]'>";
                    echo '</td>';
                }
                echo '</tr>';
            }

            echo '<tr>';
            echo '<td>';
            echo "<button type='submit' name='submit_kedua'>Submit</button>";
            echo '</td>';
            echo '</tr>';

            echo '</table>';
            echo "</form>";
        }
        ?>

    </form>

    <h2>Tampilan No. 3</h2>
    <?php
    if (isset($_POST['submit_kedua'])) {
        $data = $_POST['data'];

        foreach ($data as $key1 => $row) {
            foreach ($row as $key2 => $isi) {
                echo "{$key1}.{$key2} : $isi<br>";
            }
        }
    }
    ?>


</body>

</html>