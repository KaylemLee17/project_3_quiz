<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalyem's quiz</title>
</head>
<body>

    <?php
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];
    $answer9 = $_POST['question-9-answers'];
    $answer10 = $_POST['question-10-answers'];
    $answer11 = $_POST['question-11-answers'];
    $answer12 = $_POST['question-12-answers'];
    $answer13 = $_POST['question-13-answers'];
    $answer14 = $_POST['question-14-answers'];
    $answer15 = $_POST['question-15-answers'];
    $answer16 = $_POST['question-16-answers'];
    $answer17 = $_POST['question-17-answers'];
    $answer18 = $_POST['question-18-answers'];
    $answer19 = $_POST['question-19-answers'];
    $answer20 = $_POST['question-20-answers'];

    $totalCorrect = 0;

    if ($answer1 == "B") {$totalCorrect++;}
    if ($answer2 == "B") {$totalCorrect++;}
    if ($answer3 == "B") {$totalCorrect++;}
    if ($answer4 == "B") {$totalCorrect++;}
    if ($answer5 == "B") {$totalCorrect++;}
    if ($answer6 == "B") {$totalCorrect++;}
    if ($answer7 == "B") {$totalCorrect++;}
    if ($answer8 == "B") {$totalCorrect++;}
    if ($answer9 == "B") {$totalCorrect++;}
    if ($answer10 == "B") {$totalCorrect++;}
    if ($answer11 == "B") {$totalCorrect++;}
    if ($answer12 == "B") {$totalCorrect++;}
    if ($answer13 == "B") {$totalCorrect++;}
    if ($answer14 == "B") {$totalCorrect++;}
    if ($answer15 == "B") {$totalCorrect++;}
    if ($answer16 == "B") {$totalCorrect++;}
    if ($answer17 == "B") {$totalCorrect++;}
    if ($answer18 == "B") {$totalCorrect++;}
    if ($answer19 == "B") {$totalCorrect++;}
    if ($answer20 == "B") {$totalCorrect++;}

    echo "div id='results'>$totalCorrect / 20 correct </div>";
    
    ?>
    
</body>
</html>