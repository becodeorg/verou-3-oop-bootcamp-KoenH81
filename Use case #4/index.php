<?php
// create students
class Student
{
    public float $score;
    public float $group;
    public string $name;

    function __construct($name, $score, $group)
    {
        $this->name = $name;
        $this->score = $score;
        $this->group = $group;
    }
}
$person1 = new Student('Jaqen', 10, 1);
$person2 = new Student('Elvira', 20, 1);
$person3 = new Student('James', 30, 1);
$person4 = new Student('Kim', 40, 1);
$person5 = new Student('Puk', 60, 1);
$person6 = new Student('Wanda', 70, 1);
$person7 = new Student('Harry', 80, 1);
$person8 = new Student('Sjlep', 90, 1);
$person9 = new Student('Duns', 0, 1);
$person10 = new Student('Wim', 60, 1);
$person11 = new Student('Aaron', 10, 2);
$person12 = new Student('JayQuilin', 20, 2);
$person13 = new Student('Mike', 30, 2);
$person14 = new Student('Dimitri', 40, 2);
$person15 = new Student('Putin', 50, 2);
$person16 = new Student('Donald', 0, 2);
$person17 = new Student('Wodan', 60, 2);
$person18 = new Student('Ronny', 40, 2);
$person19 = new Student('Rudy', 30, 2);
$person20 = new Student('Roos', 70, 2);

// create array with students
$students = array($person1, $person2, $person3, $person4, $person5, $person6, $person7, $person8, $person9, $person10, $person11, $person12, $person13, $person14, $person15, $person16, $person17, $person18, $person19, $person20);

// calculate sum of scores per group
$sumGroup1 = 0;
$sumGroup2 = 0;
$membersGroup1 = 0;
$membersGroup2 = 0;

function sumScore($students, $sumGroup1, $sumGroup2, $membersGroup1, $membersGroup2)
{
    foreach ($students as $person) {
        if ($person->group == 1) {
            $sumGroup1 = $sumGroup1 + $person->score;
            $membersGroup1 = $membersGroup1 + 1;
        } else {
            $sumGroup2 = $sumGroup2 + $person->score;
            $membersGroup2 = $membersGroup2 + 1;
        }
    }
    return [$sumGroup1, $sumGroup2, $membersGroup1, $membersGroup2];
}
//calculate average score group 1
$averageScoreGroup1 = sumScore($students, $sumGroup1, $sumGroup2, $membersGroup1, $membersGroup2)[0] / sumScore($students, $sumGroup1, $sumGroup2, $membersGroup1, $membersGroup2)[2];
echo ('Average score group 1: ' . $averageScoreGroup1 . '<br>');
//calculate average score group 2
$averageScoreGroup2 = sumScore($students, $sumGroup1, $sumGroup2, $membersGroup1, $membersGroup2)[1] / sumScore($students, $sumGroup1, $sumGroup2, $membersGroup1, $membersGroup2)[3];
echo ('Average score group 2: ' . $averageScoreGroup2);
