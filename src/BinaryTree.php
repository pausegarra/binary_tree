<?php

namespace BinaryTree;

use BinaryTree\TreeNode;

class BinaryTree
{
    /**
     * @var TreeNode
     */
    private $root;
    /**
     * @var array
     */
    private $sorted = [];

    public function __construct(int $root = null)
    {
        $this->root = new TreeNode($root);
    }

    public function getRoot(): int
    {
        return $this->root->getData();
    }
    
    public function getRootInstance(): TreeNode
    {
        return $this->root;
    }
    
    public function add(int $data): void
    {
        $node = new TreeNode($data);
        
        if ($this->root->getData() == null) {
            $this->root = $node;
        } else {
            $current = $this->getRootInstance();
            
            while (true) {
                $parent = $current;

                if ($data < $current->getData()) {
                    $current = $current->getLeft();
                    
                    if ($current == null) {
                        $parent->setLeft($node);
                        break;
                    }
                } else {
                    $current = $current->getRight();
                    
                    if ($current == null) {
                        $parent->setRight($node);
                        break;
                    }
                }
            }
        }
    }

    public function sort($data,$reverse = false): array
    {
        if($data != null){
            $this->sort($data->getLeft());
            array_push($this->sorted,$data->getData());
            $this->sort($data->getRight());
        }
        return ($reverse)
            ? array_reverse($this->sorted,true)
            : $this->sorted;
    }
}