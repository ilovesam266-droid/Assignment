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
    new Student(id: 1, name: 'Huy', age: 20, score: 8.5),
    new Student(id: 2, name: 'Lan', age: 19, score: 7.8),
    new Student(id: 3, name: 'Minh', age: 21, score: 9.2),
    new Student(id: 4, name: 'Hoa', age: 20, score: 6.5),
    new Student(id: 5, name: 'Tùng', age: 22, score: 8.0),
];

$maxStudent = null;
foreach ($students as $student){
    if(!$maxStudent || $maxStudent->score < $student->score){
        $maxStudent = $student;
    }
}
print_r($maxStudent);

// $countStudent = count($students);
// for($i = 0; $i < $countStudent-1; $i++){
//     for($j = 0; $j < $countStudent-$i-1; $j++){
//         if($students[$j]->age > $students[$j+1]->age){
//             $tempData = $students[$j];
//             $students[$j] = $students[$j+1];
//             $students[$j+1] = $tempData;
//         }
//     }
// }

$sortedStudent = $students;
usort($sortedStudent, fn(Student $student1, Student $student2) => $student1->age > $student2->age ? 1 : -1 );

print_r($sortedStudent);


