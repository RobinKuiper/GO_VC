<?php

class BitterbalVoter
{
  private $wel = 0;
  private $niet = 0;
  private $welniet = 0;
  private $niks = 0;
  private $inwoners = 20000;

  public function niks()
  {
    return $this->niks;
  }

  public function calculate(): void
  {
    for ($i = 1; $i < $this->inwoners; $i++) {
      if ($i % 4 === 0 && $i % 7 === 0) {
        $this->welniet++;
      } elseif ($i % 4 === 0) {
        $this->wel++;
      } elseif ($i % 7 === 0) {
        $this->niet++;
      } else {
        $this->niks++;
      }
    }
  }
}
