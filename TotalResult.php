<?php

class TotalResult
{
    /**
     * Final result of all partyResults added up.
     *
     * @var boolean
     */
    private $isAccepted;

    /**
     * @var PartyResult[]
     */
    private $partyResults;

    /**
     * @return bool
     */
    public function isAccepted(): bool
    {
        return $this->isAccepted;
    }

    /**
     * @param bool $isAccepted
     */
    public function setIsAccepted(bool $isAccepted): void
    {
        $this->isAccepted = $isAccepted;
    }

    /**
     * @return PartyResult[]
     */
    public function getPartyResults(): array
    {
        return $this->partyResults;
    }

    /**
     * @param PartyResult[] $partyResults
     */
    public function setPartyResults(array $partyResults): void
    {
        $this->partyResults = $partyResults;
    }

}