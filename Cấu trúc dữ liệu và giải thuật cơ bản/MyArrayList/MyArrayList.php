<?php
class MyList
{
    private $arrayList;
    private $capacity;

    public function __construct($array = array("Hello"), $capacity = 1)
    {
        $this->arrayList = $array;
        $this->capacity = $capacity;
    }

    //addLast;
    public function add($value)
    {
        array_push($this->arrayList, $value);
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);
            $this->arrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function clone(){
        $newArray = $this->arrayList;
        return $newArray;
    }

    public function contains($value){
        for($i=0; $i<= count($this->arrayList) ; $i++){
            if($value == $this->arrayList[i]){
                echo("Value is in array");
            }
            else
                echo("Value is not in array");
        }
    }
    
    public function indexOf($value){
        for($i=0; $i <  count($this->arrayList) ; $i++){
            if($value === $this->arrayList[$i]){
                echo("Index of " .$value ." is " . $i ."<br>");
            }
        }
        
    }

    public function ensureCapacity()
    {
       return $this->capacity;
    }

    public function get($index)
    {
        if (is_integer($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
}
?>