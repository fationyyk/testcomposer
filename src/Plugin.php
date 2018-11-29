<?php

namespace fationyyk\testcomposer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        echo '111111';
        $installer = new PluginInstaller($io, $composer);
        var_dump($installer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
