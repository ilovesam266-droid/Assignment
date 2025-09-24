<?php
class Student{
    
    public int $id;
    public string $name;
    public int $age;
    public float $score;

    function __construct($id, $name, $age, $score){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->score = $score;
    }
}

$students = [
    new Student(1, 'Huy', 20, 8.5),
    new Student(2, 'Lan', 19, 7.8),
    new Student(3, 'Minh', 21, 9.2),
    new Student(4, 'Hoa', 20, 6.5),
    new Student(5, 'Tùng', 22, 8.0),
];

$maxStudent = null;
foreach ($students as $student){
    if($maxStudent==null || $maxStudent->score < $student->score){
        $maxStudent = $student;
    }
}
print_r($maxStudent);

$countStudent = count($students);
for($i = 0; $i < $countStudent-1; $i++){
    for($j = 0; $j < $countStudent-$i-1; $j++){
        if($students[$j]->age > $students[$j+1]->age){
            $tempData = $students[$j];
            $students[$j] = $students[$j+1];
            $students[$j+1] = $tempData;
        }
    }
}

print_r($students);


