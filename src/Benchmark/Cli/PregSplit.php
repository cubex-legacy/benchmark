<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

class PregSplit extends BenchmarkCommand
{
  public $string = 'weh9743h,frfregerw,gergewr,g45,gre,ger5438';
  public $char = ',';

  public function runTest()
  {
    preg_split("/$this->char/", $this->string);
  }
}
