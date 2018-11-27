<!-- <?php
include('inc/results.php');
?> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaylem's quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>
<body>
    <form action="inc/results.php" method="post" id="quiz">
    <!-- Intro to quiz -->
    <div>
        <h1>Quiz</h1>
    </div>
    <div>
        <h2>This is a simple multiple choices quiz. There are a total of 20 questions, each with only one correct answer. Choose the correct answer from the 4 options given.</h2>
    </div>
<!-- PHP script for questions array -->
    <?php
        $Questions = array(
            'question-1-answers' => array(
                    'question' => 'Before Mount Everest was discovered, what was the highest point on Earth?',
                    'A) Mount Kilomanjaro',
                    'B) The Eiffel Tower',
                    'C) Mount Everest',
                    'D) Table Mountain'
            ),
            'question-2-answers' => array(
                    'question' => 'What is the longest running anime to date?',
                    'A) Naruto',
                    'B) One Piece',
                    'C) Hellsing',
                    'D) Bleach'
            ),
            'question-3-answers' => array(
                    'question' => 'Audi owns the rights to many car companies, select the one they DON\'T own',
                    'A) Lamborghini',
                    'B) Bently',
                    'C) Alfa Romeo',
                    'D) Porsche'
            ),
            'question-4-answers' => array(
                    'question' => 'An ex cop lost his house, his car and his family, what did he lose first?',
                    'A) His car',
                    'B) His house',
                    'C) His job',
                    'D) His family'
            ),
            'question-5-answers' => array(
                    'question' => 'Your parents knocks at your door at 3am for breakfast. You have milk, cheese and eggs, what do you open first?',
                    'A) The door',
                    'B) Your eyes',
                    'C) The fridge',
                    'D) The milk'
            ),
            'question-6-answers' => array(
                    'question' => 'What is the common name for the chemical compound NaCl?',
                    'A) Table salt',
                    'B) Chlorine',
                    'C) Nitrogen Chloride',
                    'D) Pool acid'
            ),
            'question-7-answers' => array(
                    'question' => 'What is the percentage that a baby\'s brain grows from the time of conception until the age of 2 years?',
                    'A) 20%',
                    'B) 50%',
                    'C) 75%',
                    'D) 80%'
            ),
            'question-8-answers' => array(
                    'question' => 'A bald man walks in the rain, he\'s soaking wet from head to toe. What didn\'t get wet?',
                    'A) His toes',
                    'B) His body',
                    'C) His bag',
                    'D) His hair'
            ),
            'question-9-answers' => array(
                    'question' => 'Which car brand has won the World Rally Championship the most times?',
                    'A) Ferrari',
                    'B) Lamborghini',
                    'C) Ford',
                    'D) Subaru'
            ),
            'question-10-answers' => array(
                    'question' => 'What is the most poweful storms on earth called?',
                    'A) Thunderstorm',
                    'B) Hurricane',
                    'C) Cyclone',
                    'D) Supercell'
            ),
            'question-11-answers' => array(
                    'question' => 'What is the most abundant element on Earth?',
                    'A) Oxygen',
                    'B) Sulphur',
                    'C) Magnisuim',
                    'D) Iron'
            ),
            'question-12-answers' => array(
                    'question' => 'What is the deepest point on Earth?',
                    'A) Tonga trench',
                    'B) Marianas trench',
                    'C) Philppine trench',
                    'D) Kuril-Kamchatka Trench'
            ),
            'question-13-answers' => array(
                    'question' => 'What do you call a bicycle with a large front wheel and a small back wheel?',
                    'A) Uni-cycle',
                    'B) Tri-cylce',
                    'C) Bisycle',
                    'D) Penny farthing'
            ),
            'question-14-answers' => array(
                    'question' => 'What do you call the process of little balls of fluff forming on clothing?',
                    'A) Pilling',
                    'B) Abrasion',
                    'C) Duribility',
                    'D) Elastisity'
            ),
            'question-15-answers' => array(
                    'question' => 'What is the smallest bone in your body?',
                    'A) Ear bone',
                    'B) Knuckle',
                    'C) Ankle',
                    'D) Tooth'
            ),
            'question-16-answers' => array(
                    'question' => 'How many bones are there in a fully grown human?',
                    'A) 305',
                    'B) 290',
                    'C) 206',
                    'D) 329'
            ),
            'question-17-answers' => array(
                    'question' => 'How many facial muscles does it take to speak one word?',
                    'A) 100',
                    'B) 88',
                    'C) 72',
                    'D) 92'
            ),
            'question-18-answers' => array(
                    'question' => 'What is the earlierst form of a clock used in ancient times?',
                    'A) Obelisk',
                    'B) Sun dail',
                    'C) Sand stick',
                    'D) Wather clock'
            ),
            'question-19-answers' => array(
                    'question' => 'In which year was the religion of Islam founded?',
                    'A) 585 A.D',
                    'B) 570 A.D',
                    'C) 590 A.D',
                    'D) 550 A.D'
            ),
            'question-20-answers' => array(
                    'question' => 'What is the name of the first mobile phone invented?',
                    'A) Motorola',
                    'B) Nokia',
                    'C) Siemens',
                    'D) Sony Erricson'
            ),
        ); 
        
    ?>
<!-- End of PHP array for questions-->

<!-- Foreach loop for questions  -->
    <?php
        foreach ($Questions as $x => $q) { 
    ?>
    

    <h2><?php echo implode(array_splice($q, 0, 1)) ?></h2>   
        <?php 
        foreach ($q as $n => $answer) {
        ?> 
            <div>                       
                    <input type="radio" name="<?php echo $x; ?>" id="question-1-answer" value="<?php echo $n; ?>">
                    <label for="<?php echo $x; ?>"><?php echo $answer;?></label> 
                    
            </div>
        <?php
        }
    }   
                ?>

    <br>

<!-- end of foreach loop for questions -->

<!-- Submit button for quiz -->

    <br>
        <input type="submit" value="submit quiz" class="button">

        </form>


</body>
</html>