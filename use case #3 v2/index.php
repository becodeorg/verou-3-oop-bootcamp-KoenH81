<?php
require './group1.php';
require './group2.php';

$students = [
    new Group1('Jaqen', 10),
    new Group1('Elvira', 20),
    new Group1('James', 30),
    new Group1('Kim', 40),
    new Group1('Puk', 60),
    new Group1('Wanda', 70),
    new Group1('Harry', 80),
    new Group1('Sjlep', 90),
    new Group1('Duns', 0),
    new Group1('Wim', 60),
    new Group2('Aaron', 10),
    new Group2('JayQuilin', 20),
    new Group2('Mike', 30),
    new Group2('Dimitri', 40),
    new Group2('Putin', 50),
    new Group2('Donald', 0),
    new Group2('Wodan', 60),
    new Group2('Ronny', 40),
    new Group2('Rudy', 30),
    new Group2('Roos', 70),
];
function averageScore1($students)
{
    $totalScore = 0;
    $totalStudents = 0;
    foreach ($students as $group) {
        if ($group instanceof Group1) {
            $totalScore = $totalScore + $group->score;
            $totalStudents = $totalStudents + 1;
            //echo ($totalScore . '<br>');
        }
    }
    $averageScore = $totalScore / $totalStudents;
    return ($averageScore);
}
function averageScore2($students)
{
    $totalScore = 0;
    $totalStudents = 0;
    foreach ($students as $group) {
        if ($group instanceof Group2) {
            $totalScore = $totalScore + $group->score;
            $totalStudents = $totalStudents + 1;
            //echo ($totalScore . '<br>');
        }
    }
    $averageScore = $totalScore / $totalStudents;
    return ($averageScore);
}
echo 'Average score of group 1 = ' . averageScore1($students) . '<br>';
echo 'Average score of group 2 = ' . averageScore2($students) . '<br>';
