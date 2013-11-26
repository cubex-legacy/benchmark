<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

use Cubex\Queue\CallableQueueConsumer;
use Cubex\Queue\IQueue;
use Cubex\Queue\StdQueue;

class Queue extends BenchmarkCommand
{
  protected $_queue;
  protected $_message;
  protected $_consumer;

  public function init()
  {
    $this->_queue    = new StdQueue("benchmark");
    $this->_consumer = new CallableQueueConsumer([$this, "consumer"]);
  }

  public function runTest()
  {
    \Cubex\Facade\Queue::push($this->_queue, $this->_message);
    \Cubex\Facade\Queue::consume($this->_queue, $this->_consumer);
  }

  public function consumer(IQueue $queue, $data)
  {
    return true;
  }
}
