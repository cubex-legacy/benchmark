<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark;

class Project extends \Cubex\Core\Project\Project
{
  /**
   * Project Name
   *
   * @return string
   */
  public function name()
  {
    return "Cubex Benchmark";
  }

  /**
   * @return \Cubex\Core\Application\Application
   */
  public function defaultApplication()
  {
    return null;
  }
}
