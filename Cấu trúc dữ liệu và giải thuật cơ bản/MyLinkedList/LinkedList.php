<?php
include_once ('Node.php');
class MyLinkList
{
    /* Link to the first node in the list */
    private $firstNode;
    /* Link to the last node in the list */
    private $lastNode;
    /* Total nodes in the list */
    private $numNodes;
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->numNodes = 0;
    }
    public function addFirst($data)
    {
        $head = new Node($data);
        $head->next = $this->firstNode;
        $this->firstNode = $head;
        /* If this is the first node inserted in the list
           then set the lastNode pointer to it.
        */
        if($this->lastNode == NULL)
            $this->lastNode = $head;
        $this->numNodes++;
    }
    public function addLast($data)
    {
        if($this->firstNode != NULL)
        {
            $head = new Node($data);
            $this->lastNode->next = $head;
            $head->next = NULL;
            $this->lastNode = $head;
            $this->numNodes++;
        }
        else
        {
            $this->addFirst($data);
        }
    }
    public function totalNodes()
    {
        return $this->numNodes;
    }
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}