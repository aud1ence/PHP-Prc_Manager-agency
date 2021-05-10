<?php


class EmployeeManager
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    function getDataToFile()
    {
        $dataJson = file_get_contents($this->filePath);     //get data from file
        return json_decode($dataJson, true);        //convert to datatype stdClass

    }

    function setDataToFile($newData)
    {
        $dataJson = json_encode($newData);      //encode associa array to obj json
        file_put_contents($this->filePath, $dataJson);      //ghi du lieu vao file
    }

    function getAll()
    {
        $data = $this->getDataToFile();
        $staffs = [];
        foreach ($data as $item) {
            $staff = new Employee($item);
            $staffs[] = $staff;
        }
        return $staffs;
    }

    function deleteStaff($index)
    {
        $data = $this->getDataToFile();
        array_splice($data, $index, 1);
        $this->setDataToFile($data);
        var_dump($data);
    }

    function addStaff($newStaff) {
        $data = $this->getDataToFile();
        array_push($data,$newStaff);
        $this->setDataToFile($data);
    }
}