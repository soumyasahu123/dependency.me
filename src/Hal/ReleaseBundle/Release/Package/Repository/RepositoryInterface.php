<?php

namespace Hal\ReleaseBundle\Release\Package\Repository;
use \Hal\ReleaseBundle\Release\Package\PackageInterface;

interface RepositoryInterface
{

    public function getMatchingPackages($searchedTerm);

}
