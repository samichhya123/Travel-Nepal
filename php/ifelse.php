<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Operators</title>
</head>
<body>
<?php
$score = 85;
// if statement
if ($score >= 60) {
    echo "You passed with a score of $score.<br>";
}
// if...else statement
if ($score >= 60) {
    echo "You passed with a score of $score.<br>";
} else {
    echo "You did not pass with a score of $score.<br>";
}
$grade = '';
// if...elseif...else statement
if ($score >= 90) {
    $grade = 'A+';
} elseif ($score >= 75) {
    $grade = 'A';
} elseif ($score >= 60) {
    $grade = 'B';
} else {
    $grade = 'F';
}
echo "Your grade is $grade.<br>";
?>
</body>
</html>