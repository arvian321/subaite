<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  mod_menu
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Language\Text;

$doc       = $app->getDocument();
$class     = $enabled ? 'nav flex-column main-nav' : 'nav flex-column main-nav disabled';

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $doc->getWebAssetManager();
$wa->getRegistry()->addExtensionRegistryFile('com_cpanel');
$wa->useScript('metismenujs')
    ->registerAndUseScript('mod_menu.admin-menu', 'mod_menu/admin-menu.min.js', [], ['defer' => true], ['metismenujs'])
    ->useScript('com_cpanel.admin-system-loader');

// Recurse through children of root node if they exist
if ($root->hasChildren()) {
    echo '<nav class="main-nav-container" aria-label="' . Text::_('MOD_MENU_ARIA_MAIN_MENU') . '">';
    echo '<ul id="menu' . $module->id . '" class="' . $class . '">' . "\n";
    echo '<li class="item item-level-1"><a class="no-dropdown" href="index.php" aria-label="Home Dashboard"><span class="icon-home icon-fw" aria-hidden="true"></span><span class="sidebar-item-title">Home Dashboard</span></a></li>';
    echo '<li class="item parent item-level-1"><a class="has-arrow mm-collapsed" href="#" aria-label="Users" aria-expanded="false"><span class="icon-users icon-fw" aria-hidden="true"></span><span class="sidebar-item-title">Users</span></a><span class="menu-dashboard"><a href="/administrator/index.php?option=com_cpanel&amp;view=cpanel&amp;dashboard=users"><span class="icon-th-large" title="Users Dashboard" aria-hidden="true"></span><span class="visually-hidden">Users Dashboard</span></a></span><ul id="collapse4" class="collapse-level-1 mm-collapse" style="">
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_users&amp;view=users" aria-label="Manage"><span class="sidebar-item-title">Manage</span></a><span class="menu-quicktask"><a href="index.php?option=com_users&amp;task=user.add"><span class="icon-plus" title="Add User" aria-hidden="true"></span><span class="visually-hidden">Add User</span></a></span></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_users&amp;view=groups" aria-label="Groups"><span class="sidebar-item-title">Groups</span></a></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_users&amp;view=levels" aria-label="Access Levels"><span class="sidebar-item-title">Access Levels</span></a></li>
		<li class="divider item-level-2" role="presentation"><span></span></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_fields&amp;view=fields&amp;context=com_users.user" aria-label="Fields"><span class="sidebar-item-title">Fields</span></a></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_fields&amp;view=groups&amp;context=com_users.user" aria-label="Field Groups"><span class="sidebar-item-title">Field Groups</span></a></li>
		<li class="divider item-level-2" role="presentation"><span></span></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_users&amp;view=notes" aria-label="User Notes"><span class="sidebar-item-title">User Notes</span></a></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_categories&amp;view=categories&amp;extension=com_users" aria-label="User Note Categories"><span class="sidebar-item-title">User Note Categories</span></a></li>
		<li class="divider item-level-2" role="presentation"><span></span></li>
		<li class="item parent item-level-2"><a class="has-arrow" href="#" aria-label="Privacy" aria-expanded="false"><span class="sidebar-item-title">Privacy</span></a><span class="menu-dashboard"><a href="/administrator/index.php?option=com_cpanel&amp;view=cpanel&amp;dashboard=privacy"><span class="icon-th-large" title="Privacy Dashboard" aria-hidden="true"></span><span class="visually-hidden">Privacy Dashboard</span></a></span><ul class="mm-collapse collapse-level-2">
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_privacy&amp;view=requests" aria-label="Requests"><span class="sidebar-item-title">Requests</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_privacy&amp;view=capabilities" aria-label="Capabilities"><span class="sidebar-item-title">Capabilities</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_privacy&amp;view=consents" aria-label="Consents"><span class="sidebar-item-title">Consents</span></a></li>
		</ul>
		</li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_actionlogs&amp;view=actionlogs" aria-label="User Actions Log"><span class="sidebar-item-title">User Actions Log</span></a></li>
		<li class="divider item-level-2" role="presentation"><span></span></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_users&amp;view=mail" aria-label="Mass Mail Users"><span class="sidebar-item-title">Mass Mail Users</span></a></li>
		<li class="item parent item-level-2"><a class="has-arrow" href="index.php?option=com_messages" aria-label="Messaging" aria-expanded="false"><span class="sidebar-item-title">Messaging</span></a><ul class="mm-collapse collapse-level-2">
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_messages&amp;view=messages" aria-label="Private Messages"><span class="sidebar-item-title">Private Messages</span></a><span class="menu-quicktask"><a href="index.php?option=com_messages&amp;task=message.add"><span class="icon-plus" title="New Item" aria-hidden="true"></span><span class="visually-hidden">New Item</span></a></span></li>
		</ul>
		</li>
		</ul>
		</li>';
	echo '<li class="item parent item-level-1"><a class="has-arrow" href="#" aria-label="Components" aria-expanded="false"><span class="icon-puzzle-piece icon-fw" aria-hidden="true"></span><span class="sidebar-item-title">Components</span></a><span class="menu-dashboard"><a href="/administrator/index.php?option=com_cpanel&amp;view=cpanel&amp;dashboard=components"><span class="icon-th-large" title="Components Dashboard" aria-hidden="true"></span><span class="visually-hidden">Components Dashboard</span></a></span><ul id="collapse3" class="collapse-level-1 mm-collapse">
		<li class="item parent item-level-2"><a class="has-arrow" href="index.php?option=com_banners" aria-label="Banners" aria-expanded="false"><span class="sidebar-item-title">Banners</span></a><ul id="menu-2" class="mm-collapse collapse-level-2">
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_banners&amp;view=banners" aria-label="Banners"><span class="sidebar-item-title">Banners</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_categories&amp;view=categories&amp;extension=com_banners" aria-label="Categories"><span class="sidebar-item-title">Categories</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_banners&amp;view=clients" aria-label="Clients"><span class="sidebar-item-title">Clients</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_banners&amp;view=tracks" aria-label="Tracks"><span class="sidebar-item-title">Tracks</span></a></li>
		</ul>
		</li>
		<li class="item parent item-level-2"><a class="has-arrow" href="index.php?option=com_contact" aria-label="Contacts" aria-expanded="false"><span class="sidebar-item-title">Contacts</span></a><ul id="menu-7" class="mm-collapse collapse-level-2">
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_contact&amp;view=contacts" aria-label="Contacts"><span class="sidebar-item-title">Contacts</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_categories&amp;view=categories&amp;extension=com_contact" aria-label="Categories"><span class="sidebar-item-title">Categories</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_fields&amp;context=com_contact.contact" aria-label="Fields"><span class="sidebar-item-title">Fields</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_fields&amp;view=groups&amp;context=com_contact.contact" aria-label="Field Groups"><span class="sidebar-item-title">Field Groups</span></a></li>
		</ul>
		</li>
		<li class="item parent item-level-2"><a class="has-arrow" href="index.php?option=com_newsfeeds" aria-label="News Feeds" aria-expanded="false"><span class="sidebar-item-title">News Feeds</span></a><ul id="menu-10" class="mm-collapse collapse-level-2">
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_newsfeeds&amp;view=newsfeeds" aria-label="Feeds"><span class="sidebar-item-title">Feeds</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_categories&amp;view=categories&amp;extension=com_newsfeeds" aria-label="Categories"><span class="sidebar-item-title">Categories</span></a></li>
		</ul>
		</li>
		<li class="item parent item-level-2"><a class="has-arrow" href="index.php?option=com_finder" aria-label="Smart Search" aria-expanded="false"><span class="sidebar-item-title">Smart Search</span></a><ul id="menu-13" class="mm-collapse collapse-level-2">
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_finder&amp;view=index" aria-label="Index"><span class="sidebar-item-title">Index</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_finder&amp;view=maps" aria-label="Content Maps"><span class="sidebar-item-title">Content Maps</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_finder&amp;view=filters" aria-label="Filters"><span class="sidebar-item-title">Filters</span></a></li>
		<li class="item item-level-3"><a class="no-dropdown" href="index.php?option=com_finder&amp;view=searches" aria-label="Search Terms"><span class="sidebar-item-title">Search Terms</span></a></li>
		</ul>
		</li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_tags&amp;view=tags" aria-label="Tags"><span class="sidebar-item-title">Tags</span></a></li>
		</ul>
		</li>';

	echo '<li class="item parent item-level-1 mm-active open"><a class="has-arrow" href="#" aria-label="Content" aria-expanded="true"><span class="icon-file-alt icon-fw" aria-hidden="true"></span><span class="sidebar-item-title">Content</span></a><span class="menu-dashboard"><a href="/administrator/index.php?option=com_cpanel&amp;view=cpanel&amp;dashboard=content"><span class="icon-th-large" title="Content Dashboard" aria-hidden="true"></span><span class="visually-hidden">Content Dashboard</span></a></span><ul id="collapse1" class="collapse-level-1 mm-collapse mm-show" style="">
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_content&amp;view=articles" aria-label="Articles"><span class="sidebar-item-title">Articles</span></a><span class="menu-quicktask"><a href="index.php?option=com_content&amp;task=article.add"><span class="icon-plus" title="Add Article" aria-hidden="true"></span><span class="visually-hidden">Add Article</span></a></span></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_categories&amp;view=categories&amp;extension=com_content" aria-label="Categories"><span class="sidebar-item-title">Categories</span></a><span class="menu-quicktask"><a href="index.php?option=com_categories&amp;extension=com_content&amp;task=category.add"><span class="icon-plus" title="Add Category" aria-hidden="true"></span><span class="visually-hidden">Add Category</span></a></span></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_content&amp;view=featured" aria-label="Featured Articles"><span class="sidebar-item-title">Featured Articles</span></a></li>
		<li class="divider item-level-2" role="presentation"><span></span></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_fields&amp;view=fields&amp;context=com_content.article" aria-label="Fields"><span class="sidebar-item-title">Fields</span></a></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_fields&amp;view=groups&amp;context=com_content.article" aria-label="Field Groups"><span class="sidebar-item-title">Field Groups</span></a></li>
		<li class="divider item-level-2" role="presentation"><span></span></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_media" aria-label="Media"><span class="sidebar-item-title">Media</span></a></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_modules&amp;view=modules&amp;client_id=0" aria-label="Site Modules"><span class="sidebar-item-title">Site Modules</span></a><span class="menu-quicktask"><a href="index.php?option=com_modules&amp;view=select&amp;client_id=0"><span class="icon-plus" title="Add Site Module" aria-hidden="true"></span><span class="visually-hidden">Add Site Module</span></a></span></li>
		<li class="item item-level-2"><a class="no-dropdown" href="index.php?option=com_modules&amp;view=modules&amp;client_id=1" aria-label="Administrator Modules"><span class="sidebar-item-title">Administrator Modules</span></a><span class="menu-quicktask"><a href="index.php?option=com_modules&amp;view=select&amp;client_id=1"><span class="icon-plus" title="Add Administrator Module" aria-hidden="true"></span><span class="visually-hidden">Add Administrator Module</span></a></span></li>
		</ul>
		</li>';
    // WARNING: Do not use direct 'include' or 'require' as it is important to isolate the scope for each call
    //$menu->renderSubmenu(ModuleHelper::getLayoutPath('mod_menu', 'default_submenu'), $root);

    echo "</ul></nav>\n";
}
