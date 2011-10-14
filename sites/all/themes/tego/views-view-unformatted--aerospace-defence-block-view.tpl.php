<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php //echo "<PRE>"; print_r($view->result); die(); ?>

<div class="resource-sec">
<h3 class="block1">Aerospace & Defence</h3>
<ul class="resources">
<?php foreach($view->result as $result){ ?>
	<?php global $base_url; ?>
	<li class="<?php print strtolower($result->term_data_name); ?>"><a href="<?php print $base_url.'/node/'.$result->nid; ?>" target="_blank"><?php print $result->node_title; ?>:</a><?php print substr($result->node_data_field_discriotion_field_field_discriotion_field_value, 0, 35).'...'; ?></li>	
<?php } ?>
</ul>
</div>
