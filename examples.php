<?php

require_once 'src/BinaryTree.php';
require_once 'src/TreeNode.php';

use BinaryTree\BinaryTree;

$tree = new BinaryTree(78);
$tree->add(60);
$tree->add(24);
$tree->add(97);
$tree->add(37);
$tree->add(3);
$tree->add(73);
$tree->add(41);
$tree->add(38);
$tree->add(36);
$tree->add(50);
$tree->add(65);
$tree->add(12);
$tree->add(70);
$tree->add(76);
$tree->add(98);
$tree->add(8);
$tree->add(20);
$tree->add(68);
$tree->add(91);
$tree->add(31);
$tree->add(64);
$tree->add(83);
$tree->add(77);
$tree->add(55);

$sorted = $tree->sort($tree->getRootInstance());

print_r($sorted);