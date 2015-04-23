<?php 

class Node 
{
    public $value;
    public $next;

    public function __construct ($val)
    {
        $this->value = $val;
    }
}

class SinglyLinkedList {

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

        if ($current->value === $val)
        {
            $this->head = $current->next;
        }
        else
        {

            while($current->next->value != $val)
            {
                $current = $current->next;
            }

            if($current->next->next != null)
            {
                $current->next = $current->next->next;
            }
            else 
            {
                $current->next = null;
            }
        }
    }

    public function insertNode($prevVal, $newVal)
    {
        $current = $this->head;
        $node = new Node($newVal);

        while($current->value !== $prevVal) 
        {
            $current = $current->next;
        }

        if($current == $this->tail)
        {
            $this->tail->next = $node;
            $this->tail = $node;
            $node->next = null;
        }

        else
        {
            $node->next = $current->next;
            $current->next = $node;
        }
    }

}

$list = new SinglyLinkedList;

$list->appendNode('first');
$list->appendNode('second');
$list->appendNode('third');
$list->appendNode('fourth');
$list->appendNode('sixth');
$list->insertNode('fourth','fifth');

var_dump($list);

 ?>