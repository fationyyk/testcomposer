<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2018/11/28
 * Time: 23:31
 */
namespace Fationyyk\Testcomposer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class TemplateInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new PluginInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}