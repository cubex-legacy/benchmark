<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

/**
 * Numeric Checking
 */
class Numeric extends BenchmarkCommand
{
  /**
   * @valuerequired
   */
  public $check = 'numeric';

  /**
   * @valuerequired
   */
  public $string = '42';

  public function runTest()
  {
    if($this->check == 'numeric')
    {
      $pass = is_numeric($this->string);
    }
    else
    {
      $pass = ctype_digit($this->string);
    }
    return $pass;
  }
}
