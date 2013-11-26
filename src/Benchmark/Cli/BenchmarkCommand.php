<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

use Cubex\Cli\CliCommand;

abstract class BenchmarkCommand extends CliCommand
{
  /**
   * @valuerequired
   */
  public $runs = 3;
  /**
   * @valuerequired
   */
  public $perRun = 5;

  public function execute()
  {
    echo "\n";
    $format = "%6s%18s%18s%25s%25s\n";
    echo sprintf(
      $format,
      "Run ID",
      "Avg Time",
      "Total Time",
      "Raw Avg Time",
      "Raw Total Time"
    );
    echo "\n";
    $total            = [];
    $total['avgtest'] = $total['runtime'] = $total['runs'] = 0;

    for($runi = 0; $runi < $this->runs; $runi++)
    {
      $runStartTime = microtime(true);
      $tests        = [];
      for($testi = 0; $testi < $this->perRun; $testi++)
      {
        $testStartTime = microtime(true);
        $this->runTest();
        $tests[] = microtime(true) - $testStartTime;
      }
      $run['runtime'] = microtime(true) - $runStartTime;
      $run['avgtest'] = array_sum($tests) / count($tests);

      echo sprintf(
        $format,
        $runi,
        (number_format(($run['avgtest'] * 1000), 3) . ' ms'),
        (number_format(($run['runtime'] * 1000), 3) . ' ms'),
        $run['avgtest'],
        $run['runtime']
      );

      $total['avgtest'] += $run['avgtest'];
      $total['runtime'] += $run['runtime'];
      $total['runs']++;
    }

    echo "\n";
    echo sprintf(
      $format,
      "Total",
      (number_format(($total['avgtest'] / $total['runs'] * 1000), 3) . ' ms'),
      (number_format(($total['runtime'] * 1000), 3) . ' ms'),
      ($total['avgtest'] / $total['runs']),
      ($total['runtime'])
    );

    echo "\n";
    echo "Total Tests Run: " . number_format($this->runs * $this->perRun, 0);
    echo "\n";

    $this->shutdown();
  }

  abstract public function runTest();

  public function shutdown()
  {
  }
}
