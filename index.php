<?php
    include results.php;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaylem's quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    


    
</head>
<body>
    <div>
        <h1>Quiz</h1>
    </div>
    <div>
        <h2>This is a simple multiple choices quiz. There are a total of 20 questions, each with only one correct answer. Choose the correct answer from the 4 options given.</h2>
    </div>

    <div class="">
        <form action="results.php" method="post" id="quiz">
        <ol class="list">
            <li>
               <h3>question1</h3>
               <div>
                   <input type="radio" name="question-1-answer" id="question-1-answer-A" value="A"/>
                   <label for="question-1-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-1-answer" id="question-1-answer-B" value="B"/>
                   <label for="question-1-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-1-answer" id="question-1-answer-C" value="C"/>
                   <label for="question-1-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-1-answer" id="question-1-answer-D" value="D"/>
                   <label for="question-1-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question2</h3>
               <div>
                   <input type="radio" name="question-2-answer" id="question-2-answer-A" value="A"/>
                   <label for="question-2-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-2-answer" id="question-2-answer-B" value="B"/>
                   <label for="question-2-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-2-answer" id="question-2-answer-C" value="C"/>
                   <label for="question-2-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-2-answer" id="question-2-answer-D" value="D"/>
                   <label for="question-2-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question3</h3>
               <div>
                   <input type="radio" name="question-3-answer" id="question-3-answer-A" value=""/>
                   <label for="question-3-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-3-answer" id="question-3-answer-B" value="B"/>
                   <label for="question-3-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-3-answer" id="question-3-answer-C" value="C"/>
                   <label for="question-3-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-3-answer" id="question-3-answer-D" value="D"/>
                   <label for="question-3-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question4</h3>
               <div>
                   <input type="radio" name="question-4-answer" id="question-4-answer-A" value="A"/>
                   <label for="question-4-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-4-answer" id="question-4-answer-B" value="B"/>
                   <label for="question-4-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-4-answer" id="question-4-answer-C" value="C"/>
                   <label for="question-4-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-4-answer" id="question-4-answer-D" value="D"/>
                   <label for="question-4-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question5</h3>
               <div>
                   <input type="radio" name="question-5-answer" id="question-5-answer-A" value="A"/>
                   <label for="question-5-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-5-answer" id="question-5-answer-B" value="B"/>
                   <label for="question-5-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-5-answer" id="question-5-answer-C" value="C"/>
                   <label for="question-5-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-5-answer" id="question-5-answer-D" value="D"/>
                   <label for="question-5-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question6</h3>
               <div>
                   <input type="radio" name="question-6-answer" id="question-6-answer-A" value="A"/>
                   <label for="question-6-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-6-answer" id="question-6-answer-B" value="B"/>
                   <label for="question-6-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-6-answer" id="question-6-answer-C" value="C"/>
                   <label for="question-6-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-6-answer" id="question-6-answer-D" value="A"/>
                   <label for="question-6-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question7</h3>
               <div>
                   <input type="radio" name="question-7-answer" id="question-7-answer-A" value="A"/>
                   <label for="question-7-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-7-answer" id="question-7-answer-B" value="B"/>
                   <label for="question-7-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-7-answer" id="question-7-answer-C" value="C"/>
                   <label for="question-7-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-7-answer" id="question-7-answer-D" value="D"/>
                   <label for="question-7-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question8</h3>
               <div>
                   <input type="radio" name="question-8-answer" id="question-8-answer-A" value="A"/>
                   <label for="question-8-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-8-answer" id="question-8-answer-B" value="B"/>
                   <label for="question-8-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-8-answer" id="question-8-answer-C" value="C"/>
                   <label for="question-8-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-8-answer" id="question-8-answer-D" value="D"/>
                   <label for="question-8-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question9</h3>
               <div>
                   <input type="radio" name="question-9-answer" id="question-1-answer-A" value="A"/>
                   <label for="question-9-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-9-answer" id="question-9-answer-B" value="B"/>
                   <label for="question-9-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-9-answer" id="question-9-answer-C" value="C"/>
                   <label for="question-9-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-9-answer" id="question-9-answer-D" value="D"/>
                   <label for="question-9-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question10</h3>
               <div>
                   <input type="radio" name="question-10-answer" id="question-10-answer-A" value="A"/>
                   <label for="question-10-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-10-answer" id="question-10-answer-B" value="B"/>
                   <label for="question-10-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-10-answer" id="question-10-answer-C" value="C"/>
                   <label for="question-10-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-10-answer" id="question-10-answer-D" value="D"/>
                   <label for="question-10-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question11</h3>
               <div>
                   <input type="radio" name="question-11-answer" id="question-11-answer-A" value="A"/>
                   <label for="question-11-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-11-answer" id="question-11-answer-B" value="B"/>
                   <label for="question-11-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-11-answer" id="question-11-answer-C" value="C"/>
                   <label for="question-11-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-11-answer" id="question-11-answer-D" value="D"/>
                   <label for="question-11-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question12</h3>
               <div>
                   <input type="radio" name="question-12-answer" id="question-12-answer-A" value="A"/>
                   <label for="question-12-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-12-answer" id="question-12-answer-B" value="B"/>
                   <label for="question-12-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-12-answer" id="question-12-answer-C" value="C"/>
                   <label for="question-12-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-12-answer" id="question-12-answer-D" value="D"/>
                   <label for="question-12-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question13</h3>
               <div>
                   <input type="radio" name="question-13-answer" id="question-13-answer-A" value="A"/>
                   <label for="question-13-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-13-answer" id="question-13-answer-B" value="B"/>
                   <label for="question-13-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-13-answer" id="question-13-answer-C" value="C"/>
                   <label for="question-13-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-13-answer" id="question-13-answer-D" value="D"/>
                   <label for="question-13-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question14</h3>
               <div>
                   <input type="radio" name="question-1-answer" id="question-14-answer-A" value="A"/>
                   <label for="question-14-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-14-answer" id="question-14-answer-B" value="B"/>
                   <label for="question-14-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-14-answer" id="question-14-answer-C" value="C"/>
                   <label for="question-14-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-14-answer" id="question-14-answer-D" value="D"/>
                   <label for="question-14-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question15</h3>
               <div>
                   <input type="radio" name="question-15-answer" id="question-15-answer-A" value="A"/>
                   <label for="question-15-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-15-answer" id="question-15-answer-B" value="B"/>
                   <label for="question-15-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-15-answer" id="question-15-answer-C" value="C"/>
                   <label for="question-15-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-15-answer" id="question-15-answer-D" value="D"/>
                   <label for="question-15-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question16</h3>
               <div>
                   <input type="radio" name="question-16-answer" id="question-16-answer-A" value="A"/>
                   <label for="question-16-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-16-answer" id="question-16-answer-B" value="B"/>
                   <label for="question-16-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-16-answer" id="question-16-answer-C" value="C"/>
                   <label for="question-16-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-16-answer" id="question-16-answer-D" value="D"/>
                   <label for="question-16-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question17</h3>
               <div>
                   <input type="radio" name="question-17-answer" id="question-17-answer-A" value="A"/>
                   <label for="question-17-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-17-answer" id="question-17-answer-B" value="B"/>
                   <label for="question-17-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-17-answer" id="question-17-answer-C" value="C"/>
                   <label for="question-17-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-17-answer" id="question-17-answer-D" value="D"/>
                   <label for="question-17-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question18</h3>
               <div>
                   <input type="radio" name="question-18-answer" id="question-18-answer-A" value="A"/>
                   <label for="question-18-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-18-answer" id="question-18-answer-B" value="B"/>
                   <label for="question-18-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-18-answer" id="question-18-answer-C" value="C"/>
                   <label for="question-18-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-18-answer" id="question-18-answer-D" value="D"/>
                   <label for="question-18-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question19</h3>
               <div>
                   <input type="radio" name="question-19-answer" id="question-19-answer-A" value="A"/>
                   <label for="question-19-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-19-answer" id="question-19-answer-B" value="B"/>
                   <label for="question-19-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-19-answer" id="question-19-answer-C" value="C"/>
                   <label for="question-19-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-19-answer" id="question-19-answer-D" value="D"/>
                   <label for="question-19-D">D) answer</label>
               </div>
            </li>
            <li>
               <h3>question20</h3>
               <div>
                   <input type="radio" name="question-20-answer" id="question-20-answer-A" value="A"/>
                   <label for="question-20-A">A) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-20-answer" id="question-20-answer-B" value="B"/>
                   <label for="question-20-B">B) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-20-answer" id="question-20-answer-C" value="C"/>
                   <label for="question-20-C">C) answer</label>
               </div>
               <div>
                   <input type="radio" name="question-20-answer" id="question-20-answer-D" value="D"/>
                   <label for="question-20-D">D) answer</label>
               </div>
            </li>
        </ol>
        <input type="submit" value="submit quiz" class="button">
        </form>
        
    </div>
</body>
</html>