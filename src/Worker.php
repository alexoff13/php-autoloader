<?php

namespace persons;

class Worker
{
    private string $name;
    private int $age;
    private string $city;

    /**
     * @param string $name Имя
     * @param int $age Возраст
     * @param string $city Город
     */
    public function __construct(string $name, int $age, string $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }

    /**
     * @return string Имя
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int Возраст
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string Город
     */
    public function getCity(): string
    {
        return $this->city;
    }

    public function info()
    {
        echo "Name: $this->name; <br>
        Age: $this->age;<br>
        City: $this->city;<br><br>";
    }
}