    </div>
    <div class="js-ajax-loader">Loading</div>
  </div>

    <!--[if lte IE 8]>
        <script type="text/javascript" src="<?php echo ASSETS_URL; ?>/js/selectivizr.js"></script>
    <![endif]-->
    <?php if(!ENV_DEV): ?>
        <script>
            var _gaq=[['_setAccount','UA-164644-9'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    <?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>