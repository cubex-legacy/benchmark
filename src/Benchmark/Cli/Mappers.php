<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

use Cubex\Mapper\Cassandra\CassandraMapper;
use Cubex\Mapper\DataMapper;
use Cubex\Mapper\Database\RecordMapper;

/**
 * Initialise mapper and write to a property
 */
class Mappers extends BenchmarkCommand
{
  /**
   * Mapper Type (Data|Record|Cassandra)
   * @valuerequired
   */
  public $mapperType = 'Data';

  public function runTest()
  {
    $class       = __NAMESPACE__ . '\Test' . $this->mapperType . 'Mapper';
    $x           = new $class();
    $x->property = "thefirstvalue";
    $x->property = "anothervalue";
    return $x->property;
  }
}

class TestDataMapper extends DataMapper
{
  public $property;
}

class TestRecordMapper extends RecordMapper
{
  public $property;
}

class TestCassandraMapper extends CassandraMapper
{
  public $property;
}
