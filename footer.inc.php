<div id="ou-page-footer">
<?php if ($inc = OUTemplates::loadPaged()) require_once($inc); ?>
</div>
</div>
</div>

<div id="ou-region2">
<!-- ou-region2-components -->
<?php if ($inc = OUTemplates::loadSidebar()) require_once($inc); ?>
</div>
</div>
</div>


<div id="ou-site-footer">
<!-- ou-site-footer-components -->
<?php if ($inc = OUTemplates::loadFooter()) require_once($inc); ?>
<p>This website is developed and maintained by Learning Design & Technology (SS/TLS/LDT). <?php echo "This page was last updated on "; $temp = pathinfo($_SERVER['PHP_SELF']);
echo strftime("%A %B %d, %Y", filemtime($temp["basename"])); echo "";?>.</p>
</div>
</div>

<?php include '/var/www/html/includes/headers-footers/ou-footer.html'; ?>

</div>
<?php include '/var/www/html/includes/ouice/3/ou-foot.html'; ?>
<!-- site specific scripts -->

<?php if ($inc = OUTemplates::loadScripts()) require_once($inc); ?>
</body>
</html>