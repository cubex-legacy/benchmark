<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

class CommonPrefix extends BenchmarkCommand
{
  public $alt = false;
  /**
   * @valuerequired
   */
  public $s1 = 'server1';
  /**
   * @valuerequired
   */
  public $s2 = 'server2';

  public $intStop = false;

  public function runTest()
  {
    if($this->alt)
    {
      if($this->intStop)
      {
        $this->s1 = strtok($this->s1, "0123456789");
      }
      $prefix = strlen($this->s1 ^ $this->s2) -
      strlen(ltrim($this->s1 ^ $this->s2, chr(0)));
      return substr($this->s1, 0, $prefix);
    }
    else
    {
      $prefix = '';
      $i      = 0;
      while($this->s1[$i] == $this->s2[$i] && !($this->intStop && is_numeric(
        $this->s1[$i]
      )))
      {
        $prefix .= $this->s1[$i++];
      }
      return $prefix;
    }
  }
}
