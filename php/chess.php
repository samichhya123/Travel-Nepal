<!DOCTYPE html>
<html>
<head>
    <style>
        .chessboard {
            width: 400px;
            height: 400px;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
        }
        .square {
            width: 50px;
            height: 50px;
            background-color: #ffffff;
            border: 1px solid #000000;
        }

        .dark {
            background-color: #000000;
        }
    </style>
</head>
<body>
    <div class="chessboard">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            for ($col = 1; $col <= 8; $col++) {
                $isDark = ($row + $col) % 2 == 0;
                $class = $isDark ? 'square dark' : 'square';
                echo "<div class='$class'></div>";
            }
        }
        ?>
    </div>
</body>
</html>
