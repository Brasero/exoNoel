<?php

class CompteBancaire
{
    public float $solde;

    public function __construct(float $solde)
    {
        $this->solde = $solde;
    }
    public function getSolde()
    {
        return $this->solde;
    }

    public function déposer($cash)
    {
        return $this->solde += $cash;
    }

    public function retrait($cash)
    {
        if ($this->solde < $cash) {
            echo "BanqueRoute";
        } else return $this->solde -= $cash;
    }
}
