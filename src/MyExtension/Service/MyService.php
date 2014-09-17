<?php
/**
 * Extend any Rubedo Service or create your own
 */

namespace MyExtension\Service;
use Rubedo\Update\Install;

class Myservice extends Install
{

    public function __construct ()
    {
      return parent::__construct();
    }

}