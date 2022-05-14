<?php

namespace persons;

class Student
{
    private string $name;
    private int $school_level;
    private string $city;

    /**
     * @param string $name Имя студента
     * @param int $school_level Номер курса, на котором учится студент
     * @param string $city Город, в котором учится студент
     */
    public function __construct(string $name, int $school_level, string $city)
    {
        $this->name = $name;
        $this->school_level = $school_level;
        $this->city = $city;
    }

    /**
     * @return string Имя студента
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int Номер курса, на котором учится студент
     */
    public function getSchoolLevel(): int
    {
        return $this->school_level;
    }

    /**
     * @return string Город, в котором учится студент
     */
    public function getCity(): string
    {
        return $this->city;
    }

    public function info()
    {
        echo "Name: $this->name; <br>
        School level: $this->school_level;<br>
        City: $this->city;<br><br>";
    }

}