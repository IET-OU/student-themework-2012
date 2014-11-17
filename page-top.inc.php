<!-- site specific head components -->

</head>

<body class="ou ou-blend ou-ia-learning sh-study <?php echo OUTemplates::bodyClass(); ?> <?php echo $OUNav->body_class(); ?>">

<div id="ou-org">

<?php include '/var/www/html/includes/headers-footers/ou-header.html'; ?>

<!-- StudentHome specific -->
<?php 
//include $_SERVER['DOCUMENT_ROOT'] . '/studentservices/inc/sh-header-2012.html';
include $_SERVER['DOCUMENT_ROOT'] . '/ldt_legacy/students/inc/sh-header-2012.html';
?>
<!-- End -->

<div id="ou-site">

<div id="ou-site-header">
<!-- ou-site-header-components -->
<?php if ($inc = OUTemplates::loadHeader()) require_once($inc); ?>

</div>

<div id="ou-site-body">

<div id="ou-page">

<div id="ou-region0">
<!-- ou-region0-components -->
<?php if ($inc = OUTemplates::loadBanner()) require_once($inc); ?>
</div>

<div id="ou-region1">

<!-- StudentHome specific -->
<div class="mobile-only on-this-page">           
<a href="#ou-region2">Menu &darr;</a>           
</div>
<h1><?php echo $OUNav->site_title(); ?></h1>
<!-- End -->


<div id="ou-content" class="ou-content">
<!-- ou-region1-components -->

<!-- StudentHome specific -->
<?php if (PAGE_NAME != "Index"): ?>
<h1><?php echo $OUNav->page_title(); ?></h1>
<?php endif; ?>
<!-- End -->