<?php
/*****************************************************************
 * @package Xchimp2
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU/GPLv3 only
 *****************************************************************/

\defined('_JEXEC') or die; //No direct access
 
use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Event\DispatcherInterface;
use Naftee\Plugin\User\Xchimp2\Extension\Xchimp2;

    return new class() implements ServiceProviderInterface
    {
        public function register(Container $container)
        {
            $container->set(
                PluginInterface::class,
                function (Container $container) {
    
                    $config = (array) PluginHelper::getPlugin('user', 'xchimp2');
                    $subject = $container->get(DispatcherInterface::class);
                    $app = Factory::getApplication();
                    
                    $plugin = new Xchimp2($subject, $config);
                    $plugin->setApplication($app);
    
                    return $plugin;
                }
            );
        }
    };