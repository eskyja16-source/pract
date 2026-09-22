<?php

namespace App;

class Group
{
    public string $groupName;
    public array $students = [];

    public function __construct(string $groupName)
    {
        $this->groupName = $groupName;
    }

    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    public function getGroupAverage(): float
    {
        if (count($this->students) === 0) {
            return 0;
        }

        $total = 0;
        foreach ($this->students as $student) {
            $total += $student->getAverage();
        }

        return $total / count($this->students);
    }

    public function getBestStudent(): ?Student
    {
        if (count($this->students) === 0) {
            return null;
        }

        $bestStudent = $this->students[0];
        foreach ($this->students as $student) {
            if ($student->getAverage() > $bestStudent->getAverage()) {
                $bestStudent = $student;
            }
        }

        return $bestStudent;
    }
}
