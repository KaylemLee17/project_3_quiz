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

    $answer = array();

    $answers = array('C','B','C','C','B','A','D','D','D','D','D','B','D','A','A','C','A','C','B','A');
    
    $totalCorrect = 0;
    for ($i=0; $i < 20; $i++) { 
        $j = $i + 1;
        $answer[$i] = $answerArray[$_POST["question-$j-answers"]];
        if($answer[$i] == $answers[$i]){$totalCorrect++;}
    }

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