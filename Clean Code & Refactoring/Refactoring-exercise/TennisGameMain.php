<?php

include ('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->findTheWinner('player1', 'player2', 0, 0);

echo $tennisGame ."<br>";

$tennisGame1 = new TennisGame();

$tennisGame1->findTheWinner('player1', 'player2', 1, 0);

echo $tennisGame1;


