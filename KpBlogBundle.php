<?php

namespace Kp\Bundle\BlogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Sylius\Bundle\ResourceBundle\DependencyInjection\Compiler\ResolveDoctrineTargetEntitiesPass;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

class KpBlogBundle extends Bundle
{
    public static function getSupportedDrivers()
    {
        return array(
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM
        );
    }

    public function build(ContainerBuilder $container)
    {
        $interfaces = array(
            'Kp\Bundle\BlogBundle\Model\BlogInterface'         => 'kp.model.blog.class',
        );

        $container->addCompilerPass(new ResolveDoctrineTargetEntitiesPass('kp_blog', $interfaces));
    }
}
