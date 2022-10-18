<?php

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
