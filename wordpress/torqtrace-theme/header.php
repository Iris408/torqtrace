<?php
/**
 * Header template.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="torqtrace-site">
  <header class="tt-header">
    <div class="tt-container tt-header__inner">
      <a class="tt-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
        <span class="tt-logo__mark">TT</span>

        <span class="tt-logo__text">
          <span class="tt-logo__name">TorqTrace</span>
          <span class="tt-logo__sub">Vehicle Diagnostics</span>
        </span>
      </a>

      <nav class="tt-nav" aria-label="Primary navigation">
        <a href="#overview">Overview</a>
        <a href="#diagnostics">Diagnostics</a>
        <a href="#faults">Fault Codes</a>
        <a href="#maintenance">Maintenance</a>
      </nav>

      <div class="tt-header__status">
        <span class="tt-pulse" aria-hidden="true"></span>
        System Online
      </div>
    </div>
  </header>