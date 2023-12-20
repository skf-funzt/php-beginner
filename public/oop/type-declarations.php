<pre>
<?php
class Person {
  private string $name;
  private int $age;

  public function __construct(string $name, int $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getAge(): int {
    return $this->age;
  }
}

$person = new Person("John Doe", 25);
echo "Name: " . $person->getName() . "\n";
echo "Age: " . $person->getAge() . "\n";

class Student extends Person {
  private string $studentId;

  public function __construct(string $name, int $age, string $studentId) {
    parent::__construct($name, $age);
    $this->studentId = $studentId;
  }

  public function getStudentId(): string {
    return $this->studentId;
  }
}

$student = new Student("Jane Doe", 20, "123456");
echo "Name: " . $student->getName() . "\n";
echo "Age: " . $student->getAge() . "\n";

class Teacher extends Person {
  private string $teacherId;

  public function __construct(string $name, int $age, string $teacherId) {
    parent::__construct($name, $age);
    $this->teacherId = $teacherId;
  }

  public function getTeacherId(): string {
    return $this->teacherId;
  }
}

$teacher = new Teacher("Jack Doe", 30, "654321");
echo "Name: " . $teacher->getName() . "\n";
echo "Age: " . $teacher->getAge() . "\n";

class Course {
  private string $name;
  private string $description;
  private array $students;
  private Teacher $teacher;

  public function __construct(string $name, string $description, Teacher $teacher) {
    $this->name = $name;
    $this->description = $description;
    $this->teacher = $teacher;
    $this->students = [];
  }

  public function getName(): string {
    return $this->name;
  }

  public function getDescription(): string {
    return $this->description;
  }

  public function getTeacher(): Teacher {
    return $this->teacher;
  }

  public function addStudent(Student $student): void {
    $this->students[] = $student;
  }

  public function getStudents(): array {
    return $this->students;
  }
}

$course = new Course("PHP", "Learn PHP", $teacher);
for($i = 0; $i < 10; $i++) {
  $course->addStudent(new Student("Student " . $i, 20 + $i, "123456" . $i));
}


echo "Course: " . $course->getName() . "\n";
echo "Description: " . $course->getDescription() . "\n";
echo "Teacher: " . $course->getTeacher()->getName() . "\n";
echo "Students: \n";
foreach ($course->getStudents() as $student) {
  echo "  - " . $student->getName() . "\n";
}

?>
</pre>
