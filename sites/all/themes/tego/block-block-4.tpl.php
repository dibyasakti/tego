<?php
// $Id: block.tpl.php,v 1.4.2.4 2010/06/19 19:50:54 jarek Exp $

/**
 * @file block.tpl.php
 *
 * Theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $block->content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: This is a numeric id connected to each module.
 * - $block->region: The block region embedding the current block.
 *
 * Helper variables:
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 */
?>
<div class="block">
	<?php global $base_url; ?>
	<h3 class="block2"><?php print $block->subject; ?></h3>
	<img src="<?php print $base_url.'/'; print path_to_theme(); ?>/images/medical_img.jpg" width="220" height="90" alt="" />
	<?php print $block->content; ?>
</div>