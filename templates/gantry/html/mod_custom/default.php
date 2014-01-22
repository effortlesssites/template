<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


<div class="custom">
	<?php if ($params->get('backgroundimage')) : ?>
	<div class="module-content-top">
		<?php if ($params->get('link') || $params->get('hyperlink')) : ?>
                        <?php if ($params->get('link')) : ?>
                                <a href="index.php?Itemid=<?php echo $params->get('link');?>"><img class="full-width" src="<?php echo $params->get('backgroundimage');?>" /></a>
                        <?php else : ?>
                                <a target="_blank" href="<?php echo $params->get('hyperlink');?>"><img class="full-width" src="<?php echo $params->get('backgroundimage');?>" /></a>
                        <?php endif;?>
                <?php else :?>
                        <img class="full-width" src="<?php echo $params->get('backgroundimage');?>" />
                <?php endif;?>
	</div>
	<?php endif;?>
	<div class="module-content-main">
		<?php echo $module->content;?>
	</div>
	<?php if ($params->get('link') || $params->get('hyperlink')) : ?>
		<div class="module-content-bottom">
		<?php if ($params->get('link')) : ?>
			<a href="index.php?Itemid=<?php echo $params->get('link');?>" class="btn btn-default">Read More</a>
		<?php else : ?>
			<a target="_blank" href="<?php echo $params->get('hyperlink');?>" class="btn btn-default">Read More</a>
		<?php endif;?>
		</div>
	<?php endif;?>
</div>