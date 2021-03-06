<?php
include_once 'Node.php';
use TH\Node;
class LinkedList
{
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode == null) {
            $this->lastNode = $link;
            $this->count++;
        }
    }

    public function insertLast($data)
    {
        if ($this->firstNode !== null) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->firstNode;
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != null) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    public function insert($index, $data)
    {
        if ($index == 0) {
            $this->insertFirst($data);
        } else {
            $link = new Node($data);
            $previous = $this->firstNode;
            $current = $this->firstNode;
            for ($i = 0; $i < $index; $i++) {
                $previous = $current;
                $current = $current->next;
            }
            $link->next = $current;
            $previous->next = $link;
            $this->count++;
        }
    }

    function delete($index)
    {


        $current = $this->firstNode;
        $temp = $this->firstNode;

        for ($i = 0; $i < $index; $i++) {
            $temp = $current;
            $current = $current->next;
        }
        $temp->next = $current->next;
        $this->count--;
    }
}