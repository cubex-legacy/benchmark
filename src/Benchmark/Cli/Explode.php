<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

class Explode extends BenchmarkCommand
{
  public $string = 'weh9743h,frfregerw,gergewr,g45,gre,ger5438';
  public $char = ',';

  public function runTest()
  {
    explode($this->char, $this->string);
  }
}
