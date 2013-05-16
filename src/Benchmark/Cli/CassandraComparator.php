<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

use Cubex\KvStore\Cassandra\DataType\LongType;
use Cubex\Mapper\Cassandra\CassandraMapper;

class CassandraComparator extends BenchmarkCommand
{
  public $rev;
  public $reverse;

  public function runTest()
  {
    $cf    = $this->_getCF();
    $slice = $cf->getSlice("lookup", "", "", (bool)$this->reverse, 1);
  }

  public function populate()
  {
    $columns = [];
    for($i = 0; $i < 10000; $i++)
    {
      $columns[$i] = md5($i);
    }
    $cf = $this->_getCF();
    $cf->insert("lookup", $columns);
  }

  protected function _getCF()
  {
    $comparator = new ComparatorTest1();
    $comparator->setTableName("Comparator" . ($this->rev ? 'Rev' : ''));
    $cf = $comparator->getCf();
    $cf->setColumnDataType(new LongType());
    return $cf;
  }
}

class ComparatorTest1 extends CassandraMapper
{
  protected $_tbl;

  public function setTableName($table)
  {
    $this->_tbl = $table;
  }

  public function getTableName()
  {
    return $this->_tbl;
  }
}
