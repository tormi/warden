<?php

namespace Deeson\SiteStatusBundle\Managers;

use Deeson\SiteStatusBundle\Document\Module;

class ModuleManager extends BaseManager {

  /**
   * Returns a boolean of whether a module with this name already exists.
   *
   * @param string $name
   *
   * @return bool
   */
  public function nameExists($name) {
    $result = $this->getRepository()->findBy(array('projectName' => $name));
    return $result->count() > 0;
  }

  /**
   * @return string
   *   The type of this manager.
   */
  public function getType() {
    return 'Module';
  }

  /**
   * Create a new empty type of the object.
   *
   * @return Site
   */
  public function makeNewItem() {
    return new Module();
  }

  /**
   * Find module by name.
   *
   * @param $name
   *
   * @return object
   * @throws EntityNotFoundException
   */
  public function findByProjectName($name) {
    return $this->getEntityBy(array('projectName' => $name));
  }

}