<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

class StrSplit extends BenchmarkCommand
{
  public $safeCheck = false;
  /**
   * @valuerequired
   */
  public $testString = 'testing203975r0219375029317402937yjhkdiweh0kfej qwhef ;qweh g;klqhwe glkhqwe gklhqwlheg lqwhe glkqweh gklhwqegkl h  wlkehg lwqheg lkhqwegl khwqegk hqlweh glkqweh lgkhwqek ghqwh glkqweh klghwq lkhgweqlkh gewlkh 9437';
  /**
   * @valuerequired
   */
  public $explode = 10;

  public function runTest()
  {
    if($this->safeCheck)
    {
      /*$p1 = substr($this->testString, 0, $this->explode);
      $p2 = substr($this->testString, $this->explode);*/
      $parts = str_split($this->testString, $this->explode);
      return [array_shift($parts), implode("", $parts)];
    }
    else
    {
      $parts = str_split($this->testString, $this->explode);
      $p1    = array_shift($parts);
      $p2    = implode("", $parts);
      return [$p1, $p2];
    }
  }
}
