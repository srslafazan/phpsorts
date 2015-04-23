<?php 

class Node 
{
    public $value;
    public $next;
    public $prev;

    public function __construct ($val)
    {
        $this->value = $val;
    }
}

class DoublyLinkedList {

    public $head;
    public $tail;

    public function appendNode ($val)
    {
        $node = new Node($val);
        if (!$this->head)
            {
                $this->head = $node;
                $this->tail = $node;
            }
        $this->tail->next = $node;
        $this->tail = $node;
    }

    public function deleteNode($val)
    {
        $current = $this->head;

        while($current->value != $val)
        {
            $current = $current->next;
        }

        if($current->prev == null)
        {
            $this->head = $current->next;
            $current->next->prev = null;
        }

        elseif ($current->next == null) 
        {
            $this->tail = $current->prev;
            $current->prev->next = null;
        }

        else
        {
            $current->prev->next = $current->next;
            $current->next->prev = $current->prev;
        }
    }

    public function insertNode($prevVal, $newVal)
    {
    $current = $this->head;

        while($current->value !== $prevVal) 
        {

            $current = $current->next;
        }

        $node = new Node($newVal);

        if($current == $this->tail)
        {
            $this->tail = $node;
            $node->next = null;
            $node->prev = $current;
            $current->next = $node;
        }

        else
        {
            $node->prev = $current;
            $node->next = $current->next;
            $current->next = $node;
            $node->next->prev = $node;
        }
    }

}

$list = new DoublyLinkedList;

$list->appendNode('first');
$list->appendNode('second');
$list->appendNode('third');
$list->appendNode('fourth');
$list->appendNode('sixth');
$list->insertNode('fourth','fifth');

var_dump($list);

 ?>