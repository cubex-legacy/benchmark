<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

class StrPos extends BenchmarkCommand
{
  public $safeCheck = false;
  public $testString = 'testing';

  public function runTest()
  {
    if($this->safeCheck)
    {
      if(!strstr($this->testString, "\n"))
      {
        return true;
      }
    }
    return str_replace(
      array("\r\n", "\r"),
      array("\n", "\n"),
      (string)$this->testString
    );
  }
}
