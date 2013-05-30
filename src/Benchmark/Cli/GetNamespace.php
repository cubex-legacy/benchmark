<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

use Cubex\Core\Http\Request;

class GetNamespace extends BenchmarkCommand
{
  public $reflect = false;
  public $stringRun = false;

  public function runTest()
  {
    if($this->stringRun)
    {
      $source = 'Cubex\Core\Http\Request';

      if(!$this->reflect)
      {
        $source = explode('\\', $source);
        array_pop($source);
        $result = implode('\\', $source);
      }
      else
      {
        $refelction = new \ReflectionClass($source);
        $result     = $refelction->getNamespaceName();
      }
    }
    else
    {
      $source = new Request();

      if(!$this->reflect)
      {
        $source = is_object($source) ? get_class($source) : $source;
        $source = explode('\\', $source);
        array_pop($source);
        $result = implode('\\', $source);
      }
      else
      {
        $refelction = new \ReflectionObject($source);
        $result     = $refelction->getNamespaceName();
      }
    }

    return $result;
  }
}
