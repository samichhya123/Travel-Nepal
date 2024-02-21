<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Case</title>
</head>
<body>
<?php
$score = 85;
switch (true) {
    case $score >= 90:
      
        $grade = 'A';
        break;
    case $score >= 80:
        $grade = 'B';
        break;
    case $score >= 70:
        $grade = 'C';
        break;
    case $score >= 60:
        $grade = 'D';
        break;
    default:
        $grade = 'F';
}
echo "Your score is $score, grade = $grade.";
?>
</body>
</html>