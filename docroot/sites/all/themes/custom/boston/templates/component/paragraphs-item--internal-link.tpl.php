<?php
/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
$field_title = $content['field_title'][0]['#markup'];
?>
<a href="<?php print $internal_link_path; ?>" title="Go to <?php print ((!empty($field_title) ? $field_title : $internal_link_title)); ?>" class="<?php print $link_icon["classes"]["container"]; ?>">
  <span<?php print((isset($link_icon["classes"]["icon"]) ? ' class="' . $link_icon["classes"]["icon"] . '"' : '')); ?>><img src="<?php print $link_icon["image"] ?>" /></span>
  <span<?php print((isset($link_icon["classes"]["text"]) ? ' class="' . $link_icon["classes"]["text"] . '"' : '')); ?>><?php print ((!empty($field_title) ? $field_title : $internal_link_title)); ?></span>
</a>
