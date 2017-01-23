<footer class="footer">
    <div class="container">
        <?php
        $theme_options = get_option('ju_opts');
        echo stripslashes_deep($theme_options['footer']);
        ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>