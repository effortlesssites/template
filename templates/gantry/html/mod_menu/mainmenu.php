<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
?>
<?php // The menu class is deprecated. Use nav instead. ?>


<nav class="navbar">
	<div class="navbar-inner">
 
		<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</a>
		
		<!-- Everything you want hidden at 940px or less, place within here -->
		<div class="nav-collapse collapse navbar-responsive-collapse">
			<ul class="<?php echo $class_sfx;?> nav"<?php
		
	$tag = '';
	if ($params->get('tag_id') != null)
	{
		$tag = $params->get('tag_id').'';
		echo ' id="'.$tag.'"';
	}
?>>
<?php
foreach ($list as $i => &$item) :
	$role = '';
	$class = 'item-'.$item->id;
	if ($item->id == $active_id)
	{
		$class .= '';
	}

	if (in_array($item->id, $path))
	{
		$class .= ' active';
	}
	elseif ($item->type == 'alias')
	{
		$aliasToId = $item->params->get('aliasoptions');
		if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
		{
			$class .= ' active';
		}
		elseif (in_array($aliasToId, $path))
		{
			$class .= ' alias-parent-active';
		}
	}

	if ($item->type == 'separator')
	{
		$class .= ' divider';
		$role = 'presentation';
	}
	
	if ($item->type == 'heading')
	{
		$class .= ' nav-header';
		$role = 'presentation';
	}

	if ($item->deeper)
	{
		$class .= '';
	}

	if ($item->parent)
	{
		$class .= ' dropdown';
	}

	if (!empty($class))
	{
		$class = ' class="'.trim($class) .'"';
	}
	
	if (!empty($role))
	{
		$role = ' role="'.trim($role) .'"';
	}
	
	

	echo '<li'.$class.$role.'>';

	// Render the menu item.
	switch ($item->type) :
		case 'separator':
		case 'url':
		case 'component':
		case 'heading':
			require JModuleHelper::getLayoutPath('mod_menu', 'mainmenu_'.$item->type);
			break;

		default:
			require JModuleHelper::getLayoutPath('mod_menu', 'mainmenu_url');
			break;
	endswitch;

	// The next item is deeper.
	if ($item->deeper)
	{
		echo '<ul role="menu" class="dropdown-menu">';
	}
	// The next item is shallower.
	elseif ($item->shallower)
	{
		echo '</li>';
		echo str_repeat('</ul></li>', $item->level_diff);
	}
	// The next item is on the same level.
	else {
		echo '</li>';
	}
endforeach;

?>
                </ul>
        </div>
	</div>
</nav>
