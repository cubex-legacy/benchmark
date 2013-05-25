<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

use Cubex\Core\Interfaces\INamespaceAware;
use Cubex\Core\Traits\NamespaceAwareTrait;

/**
 * Which is faster, method_exists, or instanceof
 * - InstanceOf is :)
 */
class InstanceOrMethod extends BenchmarkCommand
{
  public $checkMethod = false;

  public function runTest()
  {
    $tester = new TestMethod();
    if($this->checkMethod)
    {
      $result = method_exists($tester, "getNamespace");
    }
    else
    {
      $result = $tester instanceof INamespaceAware;
    }
    return $result;
  }
}


class TestMethod implements INamespaceAware
{
  use NamespaceAwareTrait;
}
