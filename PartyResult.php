<?php

namespace GO\Stemgedrag\Models;

class PartyResult
{
    /**
     * @var string
     */
    private $partyName;

    /**
     * @var integer
     */
    private $amountFor;

    /**
     * @var integer
     */
    private $amountAgainst;

    /**
     * @return string
     */
    public function getPartyName(): string
    {
        return $this->partyName;
    }

    /**
     * @param string $partyName
     */
    public function setPartyName(string $partyName): void
    {
        $this->partyName = $partyName;
    }

    /**
     * @return int
     */
    public function getAmountFor(): int
    {
        return $this->amountFor;
    }

    /**
     * @param int $amountFor
     */
    public function setAmountFor(int $amountFor): void
    {
        $this->amountFor = $amountFor;
    }

    /**
     * @return int
     */
    public function getAmountAgainst(): int
    {
        return $this->amountAgainst;
    }

    /**
     * @param int $amountAgainst
     */
    public function setAmountAgainst(int $amountAgainst): void
    {
        $this->amountAgainst = $amountAgainst;
    }

}