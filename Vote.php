<?php

/**
 *
 * Class Vote
 */
class Vote
{
    /**
     * @var integer
     */
    private $id;

    /**
     * True if voter is voting yes
     * False if voter is voting no
     * @var boolean
     */
    private $isFor;

    /**
     * Name of the voter
     *
     * @var string
     */
    private $personName;

    /**
     * Name of the party the voter belongs to.
     *
     * @var string
     */
    private $partyName;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return bool
     */
    public function isFor(): bool
    {
        return $this->isFor;
    }

    /**
     * @param bool $isFor
     */
    public function setIsFor(bool $isFor): void
    {
        $this->isFor = $isFor;
    }

    /**
     * @return string
     */
    public function getPersonName(): string
    {
        return $this->personName;
    }

    /**
     * @param string $personName
     */
    public function setPersonName(string $personName): void
    {
        $this->personName = $personName;
    }

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
}
