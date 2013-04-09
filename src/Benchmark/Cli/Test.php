<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

/**
 * Test Benchmarking, each test will run for 50 milliseconds
 *
 * @package Benchmark\Cli
 */
class Test extends BenchmarkCommand
{
  public function runTest()
  {
    //Sleep for 50ms
    msleep(50);
  }
}
