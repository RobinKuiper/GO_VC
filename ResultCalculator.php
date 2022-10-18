<?php

use GO\Stemgedrag\Models\PartyResult;

class ResultCalculator
{

  /**
   * @param Vote[] $votes
   *
   * @return string
   */
  public function calculateResult(array $votes): string
  {
    $totalResult = new TotalResult();

    $parties = array_map(function ($vote) {
      return $vote->getPartyName();
    }, $votes);

    $partyResults = array();
    foreach ($parties as $party) {
      $for =
        count(array_filter($votes, function ($vote) {
          global $party;
          return $vote->isFor() && $vote->getPartyName() === $party;
        }));

      $against
        = count(array_filter($votes, function ($vote) {
          global $party;
          return !$vote->isFor() &&
            $vote->getPartyName() === $party;
        }));

      $partyResults[$party] = new PartyResult();
      $partyResults[$party]->setPartyName($party);
      $partyResults[$party]->setAmountFor($for);
      $partyResults[$party]->setAmountAgainst($against);
    }

    $totalResult->setPartyResults($partyResults);

    $for
      = count(array_filter($votes, function ($vote) {
        return $vote->isFor();
      }));
    $against
      = count(array_filter($votes, function ($vote) {
        return !$vote->isFor();
      }));

    $totalResult->setIsAccepted($for > $against);

    if ($totalResult->isAccepted()) {
      $result = "aangenomen";
    } else {
      $result = "afgewezen";
    }

    echo "Deze stemming is " . $result . ".";
  }
}
