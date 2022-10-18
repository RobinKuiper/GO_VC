<?php

class Sender
{
  public function send()
  {
    $bbVoter = new BitterbalVoter();
    $bbVoter->calculate();
    $briefs = $bbVoter->niks();

    $newbriefs = 0;

    while ($briefs > 10) {
      $newbriefs += $briefs / 10;
      $briefs = $briefs / 10;
    }

    echo $newbriefs . " zijn verzonden.";
  }
}
