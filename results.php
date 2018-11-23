<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text" href="css/styles.css">
    <title>Kalyem's quiz</title>
    <style>
        body {
            background-image: url(../img/black.jpg);
            border-bottom: double 3px;
            border-bottom-color: aqua;
        }
        h3 {
            color: aqua;
        }
        .button {
            background-color: aqua;
            border-radius: 4px;
            transition-duration: .5s;
            font-size: 24px;
            margin-left: 5%;
        }
    </style>
</head>
<body>

    <?php
    // convert numbers to string
    $answerArray = array('A', 'B', 'C', 'D');

    $answer1 = $answerArray[$_POST['question-1-answer']];
    $answer2 = $answerArray[$_POST['question-2-answer']];
    $answer3 = $answerArray[$_POST['question-3-answer']];
    $answer4 = $answerArray[$_POST['question-4-answer']];
    $answer5 = $answerArray[$_POST['question-5-answer']];
    $answer6 = $answerArray[$_POST['question-6-answer']];
    $answer7 = $answerArray[$_POST['question-7-answer']];
    $answer8 = $answerArray[$_POST['question-8-answer']];
    $answer9 = $answerArray[$_POST['question-9-answer']];
    $answer10 = $answerArray[$_POST['question-10-answer']];
    $answer11 = $answerArray[$_POST['question-11-answer']];
    $answer12 = $answerArray[$_POST['question-12-answer']];
    $answer13 = $answerArray[$_POST['question-13-answer']];
    $answer14 = $answerArray[$_POST['question-14-answer']];
    $answer15 = $answerArray[$_POST['question-15-answer']];
    $answer16 = $answerArray[$_POST['question-16-answer']];
    $answer17 = $answerArray[$_POST['question-17-answer']];
    $answer18 = $answerArray[$_POST['question-18-answer']];
    $answer19 = $answerArray[$_POST['question-19-answer']];
    $answer20 = $answerArray[$_POST['question-20-answer']];

    $totalCorrect = 0;

    if ($answer1 == "C") {$totalCorrect++;}
    if ($answer2 == "B") {$totalCorrect++;}
    if ($answer3 == "C") {$totalCorrect++;}
    if ($answer4 == "C") {$totalCorrect++;}
    if ($answer5 == "B") {$totalCorrect++;}
    if ($answer6 == "A") {$totalCorrect++;}
    if ($answer7 == "D") {$totalCorrect++;}
    if ($answer8 == "D") {$totalCorrect++;}
    if ($answer9 == "D") {$totalCorrect++;}
    if ($answer10 == "B") {$totalCorrect++;}
    if ($answer11 == "D") {$totalCorrect++;}
    if ($answer12 == "D") {$totalCorrect++;}
    if ($answer13 == "B") {$totalCorrect++;}
    if ($answer14 == "D") {$totalCorrect++;}
    if ($answer15 == "A") {$totalCorrect++;}
    if ($answer16 == "C") {$totalCorrect++;}
    if ($answer17 == "A") {$totalCorrect++;}
    if ($answer18 == "C") {$totalCorrect++;}
    if ($answer19 == "B") {$totalCorrect++;}
    if ($answer20 == "A") {$totalCorrect++;}

    // Total amount correct

    echo "<h3>$totalCorrect / 20</h3>";

    // answering logic

    switch ($totalCorrect) {
        case ($totalCorrect <= 4):
            echo "<h3>Go do lots of homework and come take my quiz again</h3>";
            break;
        case ($totalCorrect >= 5 && $totalCorrect <= 10):
            echo "<h3>Go do some more homework and come take my quiz again</h3>";
            break;
        case ($totalCorrect >= 11 && $totalCorrect <= 15):
            echo "<h3>You barely passed my quiz, there's still room for improvement though</h3>";
            break;
        case ($totalCorrect >= 16 && $totalCorrect <= 20):
            echo "<h3>Well done, this score is very Jesse-like!</h3>";
            break;
        
    }
    
    ?>

    <br>
    <br>

    <a class="button" href="http://quiz/">Retake quiz</a>
    
</body>
</html>