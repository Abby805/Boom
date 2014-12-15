<!DOCTYPE html>
<html class="no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body<?php print $attributes;?>>

  <?php print $page_top; ?>
  <a href="#main" class="skip-link" id="skip-to-main"><?php print t('Skip to main content'); ?></a>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
