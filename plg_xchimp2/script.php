<?php
/*****************************************************************
 * @package Xchimp2
 * Version 1.1
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU/GPLv3 only
 *****************************************************************/

// No direct access
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Installer\InstallerAdapter;
use Joomla\CMS\Installer\InstallerScriptInterface;
use Joomla\CMS\Language\Text;
use Joomla\Database\DatabaseInterface;

return new class () implements InstallerScriptInterface {

    private string $minimumJoomla = '4.4.0';
    private string $minimumPhp    = '7.4.0';
    private DatabaseInterface $db;

    public function __construct()
    {
        $this->db = Factory::getContainer()->get(DatabaseInterface::class);
    }

    public function install(InstallerAdapter $adapter): bool {
        // Enable the plugin on installation
        $query = $this->db->getQuery(true)
            ->update($this->db->quoteName('#__extensions'))
            ->set($this->db->quoteName('enabled') . ' = 1')
            ->where($this->db->quoteName('type') . ' = ' . $this->db->quote('plugin'))
            ->where($this->db->quoteName('folder') . ' = ' . $this->db->quote($adapter->group))
            ->where($this->db->quoteName('element') . ' = ' . $this->db->quote($adapter->element));
        $this->db->setQuery($query)->execute();

        return true;
    }

    public function update(InstallerAdapter $adapter): bool {
        echo Text::_('PLG_USER_XCHIMP2_UPDATE') . "<br>";
        return true;
    }

    public function uninstall(InstallerAdapter $adapter): bool {
        echo Text::_('PLG_USER_XCHIMP2_UNINSTALL') . "<br>";
        return true;
    }

    public function preflight(string $type, InstallerAdapter $adapter): bool {

        if (version_compare(PHP_VERSION, $this->minimumPhp, '<')) {
            Factory::getApplication()->enqueueMessage(sprintf(Text::_('JLIB_INSTALLER_MINIMUM_PHP'), $this->minimumPhp), 'error');
            return false;
        }

        if (version_compare(JVERSION, $this->minimumJoomla, '<')) {
            Factory::getApplication()->enqueueMessage(sprintf(Text::_('JLIB_INSTALLER_MINIMUM_JOOMLA'), $this->minimumJoomla), 'error');
            return false;
        }

        return true;
    }

    public function postflight(string $type, InstallerAdapter $adapter): bool {
        echo Text::_('PLG_USER_XCHIMP2_POSTFLIGHT') . "<br>";
        return true;
    }
};
