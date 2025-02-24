<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px; 
        }
        td {
            width: 30px; 
            height: 30px; 
            text-align: center;
            background-color: #FF6F61; 
            border: 1px solid black; 
        }
    </style>
</head>
<body>
    <table>
        <?php
       
        $rows = 10;

        
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            
            for ($j = 1; $j <= $rows - $i + 1; $j++) {
                echo "<td>$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>