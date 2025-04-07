<?php
if (isset($_GET['angka']) && is_numeric($_GET['angka'])) {
    $angka = intval($_GET['angka']);
} else {
    $angka = 10;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6a.php</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
        }

        .row {
            display: flex;
            gap: 5px;
            margin-bottom: 5px;
        }

        .box {
            padding: 10px;
            font-size: 20px;
            text-align: center;
            width: 20px;
            border: 2px solid black;
        }

        .yellow {
            background-color: yellow;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        for ($i = $angka; $i > 0; $i--) {
            echo '<div class="row">';
            for ($j = 0; $j < $i; $j++) {
                $class = ($i % 2 == 0) ? 'box yellow' : 'box';
                echo '<div class="' . $class . '">' . $i . '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>