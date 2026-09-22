<?php

namespace App;

class Student
{
    public string $lastName;
    public string $firstName;
    public string $patronymic;
    public array $grades = [];

    public function __construct(string $lastName, string $firstName, string $patronymic)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->patronymic = $patronymic;
    }

    public function addGrade(int $grade): void
    {
        $this->grades[] = $grade;
    }

    public function getAverage(): float
    {
        if (count($this->grades) === 0) {
            return 0;
        }

        return array_sum($this->grades) / count($this->grades);
    }
}
