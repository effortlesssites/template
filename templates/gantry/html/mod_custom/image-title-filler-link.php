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


<div class="module-image-title-link image-container custom">
        <img class="full-width" src="<?php echo $params->get('backgroundimage');?>" />
        <?php if ($params->get('link')) : ?>
                <a href="index.php?Itemid=<?php echo $params->get('link');?>" class="filler">#</a>
        <?php else : ?>
                <a target="_blank" href="<?php echo $params->get('hyperlink');?>" class="filler">#</a>
        <?php endif;?>
        <div class="image-title module-title">
                <h2 class="title"><?=$module->title?></h2>
        </div>
</div>