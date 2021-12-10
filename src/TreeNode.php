<?php

namespace BinaryTree;

class TreeNode
{
    /**
     * @var int
     */
    private $data;
    /**
     * @var TreeNode
     */
    private $left;
    /**
     * @var TreeNode
     */
    private $right;

    public function __construct($data)
    {
        $this->data  = $data;
    }

    public function setData(int $data): void
    {
        $this->data = $data;
    }

    public function getData(): int
    {
        return $this->data;
    }

    public function setLeft(TreeNode $data): void
    {
        $this->left = $data;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function setRight(TreeNode $data): void
    {
        $this->right = $data;
    }

    public function getRight()
    {
        return $this->right;
    }
}