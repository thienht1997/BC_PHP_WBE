<?php

class TennisGame
{
    public $score = '';

    public function findTheWinner($player1Name, $player2Name, $player1Score, $player2Score)
    {
        $tempScore=0;

        if ($player1Score==$player2Score) {
            switch ($player1Score)
            {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
        }
        else if ($player1Score>=4 || $player2Score>=4)
        {
            $minusResult = $player1Score-$player2Score;
            if ($minusResult==1) $this->score ="Advantage player1";
            else if ($minusResult ==-1) $this->score ="Advantage player2";
            else if ($minusResult>=2) $this->score = "Win for player1";
            else $this->score ="Win for player2";
        }
        else
        {
            for ($i=1; $i<3; $i++)
            {
                if ($i==1) $tempScore = $player1Score;
                else { $this->score.="-"; $tempScore = $player2Score;}
                switch($tempScore)
                {
                    case 0:
                        $this->score.="Love";
                        break;
                    case 1:
                        $this->score.="Fifteen";
                        break;
                    case 2:
                        $this->score.="Thirty";
                        break;
                    case 3:
                        $this->score.="Forty";
                        break;
                }
            }
        }
    }

    public function __toString()
    {
        return $this->score;
    }
}