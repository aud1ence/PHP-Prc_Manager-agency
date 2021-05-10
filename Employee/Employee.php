<?php


class Employee
{
    public string $first;
    public string $last;
    public string $date;
    public string $address;
    public string $position;

    public function __construct($data)
    {
        $this->first = $data['FirstName'];
        $this->last = $data['LastName'];
        $this->date = $data['Date'];
        $this->address = $data['Address'];
        $this->position = $data['Position'];
    }

    /**
     * @return mixed|string
     */
    public function getFirst() : string
    {
        return $this->first;
    }

    /**
     * @return mixed|string
     */
    public function getLast(): string
    {
        return $this->last;
    }

    /**
     * @return mixed|string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return mixed|string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return mixed|string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

}