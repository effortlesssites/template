<?php
/**
 * @version   $Id: item.php 10885 2013-05-30 06:31:41Z btowles $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

/**
 * @var $item RokSprocket_Item
 */
?>

<li class="sprocket-features-index-<?php echo $index;?>">
	<?php
		;
		if (($image = $item->getPrimaryImage())):
	?>
	<div class="sprocket-features-img-container" data-slideshow-image>
		<?php if ($item->getPrimaryLink()) : ?>
			<a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><img src="<?php echo $image->getSource(); ?>" alt="" style="max-width: 100%; height: auto;" /></a>
		<?php else: ?>
			<img src="<?php echo $image->getSource(); ?>" alt="" style="max-width: 100%; height: auto;" />
		<?php endif; ?>
	</div>
	<?php endif; ?>
	<div class="rt-container absolute">
		<div id="banner-content" class="sprocket-features-content" data-slideshow-content>
			<?php if ($parameters->get('features_show_title') && $item->getTitle()) : ?>
				<h2 class="title span5">
					<?php echo $item->getTitle(); ?>
				</h2>
			<?php endif; ?>
			<?php if ($parameters->get('features_show_article_text') && ($item->getText() || $item->getPrimaryLink())) : ?>
					<p class="banner-text span5">
						<?php echo $item->getText(); ?>
					</p>
					<?php if ($item->getPrimaryLink()) : ?>
					<div id="banner-btn">
						<a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>" class="btn"><span><?php rc_e('READ_MORE'); ?></span></a>
					</div>
					<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</li>
