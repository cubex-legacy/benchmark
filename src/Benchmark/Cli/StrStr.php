<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

class StrStr extends BenchmarkCommand
{
  public $safeCheck = false;

  public $string = 'weh9743h,frfregerw,gergewr,g45,gre,ger5438';
  public $char = ',';

  public function runTest()
  {
    if($this->safeCheck)
    {
      strstr($this->string, $this->char);
    }
    else
    {
      substr_count($this->string, $this->char);
    }
  }
}
