<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur 5x5</title>
    <style>
        table {
            border-collapse: collapse;
            width: 250px; /* Menyesuaikan ukuran keseluruhan */
            height: 250px; /* Menyesuaikan ukuran keseluruhan */
        }
        td {
            width: 50px;  /* Ukuran masing-masing kotak */
            height: 50px; /* Ukuran masing-masing kotak */
            border: 1px solid gray; /* Tambahkan garis border */
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($row = 0; $row < 5; $row++) {
            echo '<tr>';
            for ($col = 0; $col < 5; $col++) {
                $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
                echo "<td class='{$color}'></td>";
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>