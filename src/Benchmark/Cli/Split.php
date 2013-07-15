<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

class Split extends BenchmarkCommand
{
  public $string = 'weh9743h,frfregerw,gergewr,g45,gre,ger5438';
  public $char = ',';

  public function runTest()
  {
    split($this->char, $this->string);
  }
}
