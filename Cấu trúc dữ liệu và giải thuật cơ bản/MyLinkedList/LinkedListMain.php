<?php
include_once ('LinkedList.php');
$linkedList = new MyLinkList();
$linkedList->addFirst(11);
$linkedList->addFirst(22);
$linkedList->addLast(33);
$linkedList->addLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo $totalNodes."<br>";
echo implode ('-' , $linkData);