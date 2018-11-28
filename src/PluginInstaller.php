<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2018/11/28
 * Time: 23:33
 */
namespace Fationyyk\Testcomposer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class PluginInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getPackageBasePath(PackageInterface $package)
    {
        $prefix = ($package->getPrettyName());
        return './data/templates/'.substr($package->getPrettyName(), 13);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'fation-test' == $packageType;
    }
}