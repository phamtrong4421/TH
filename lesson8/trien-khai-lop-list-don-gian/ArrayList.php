<?php


class ArrayList
{
    public $arrayList;

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }

    public function add($obj)
    {
        return array_push($this->arrayList, $obj);
    }

    public function size()
    {
        return count($this->arrayList);
    }
    public function get($index)
    {
        if ($this->isInteger($index)&& $index < $this->size() )
            return $this->arrayList[$index];
        else
            return "Error in ArrayList.get";
    }

    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

}