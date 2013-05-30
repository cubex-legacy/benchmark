<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

use Cubex\Core\Http\Request;

class GetNamespace extends BenchmarkCommand
{
  public $reflect = false;
  public $strchr = false;

  public function runTest()
  {
    $source = '\Request';

    if(!$this->reflect)
    {
      if($this->strchr)
      {
        $result = substr($source, 0, strchr($source, '\\'));
      }
      else
      {
        $source = explode('\\', $source);
        array_pop($source);
        $result = implode('\\', $source);
      }
    }
    else
    {
      $sourceObjectRefelction = new \ReflectionClass($source);
      $result                 = $sourceObjectRefelction->getNamespaceName();
    }

    var_dump($result);
    return $result;
  }
}
