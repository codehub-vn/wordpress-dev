<?php
function ju_theme_opts_page() {
    $theme_options = get_option('ju_opts');
?>
<div class="wrap">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="pnel-title">
                <?php _e('Udemy Them Seetings', 'udemy'); ?>
            </h3>
        </div>
        <div class="panel-body">
            <?php if (isset($_GET['status']) && ($_GET['status'] == 1)): ?>
                <div class="alert alert-success"><?= _e('Success', 'udemy'); ?></div>
            <?php endif; ?>
            <form method="POST" action="admin-post.php">
                <input type="hidden" name="action" value="ju_save_options">
                <?php wp_nonce_field('ju_options_verify'); ?>
                <h4><?php _e('Social Icons', 'udemy'); ?></h4>
                <div class="form-group">
                    <label for="ju_inputTwitter">
                        <?php _e('Twitter', 'udemy'); ?>
                    </label>
                    <input type="text" id="ju_inputTwitter" class="form-control" name="ju_inputTwitter" value="<?= $theme_options['twitter']; ?>">
                </div>
                <div class="form-group">
                    <label for="ju_inputFacebook">
                        <?php _e('Facebook', 'udemy'); ?>
                    </label>
                    <input type="text" id="ju_inputFacebook" class="form-control" name="ju_inputFacebook" value="<?= $theme_options['facebook']; ?>">
                </div>
                <div class="form-group">
                    <label for="ju_inputYoutube">
                        <?php _e('Youtube', 'udemy'); ?>
                    </label>
                    <input type="text" id="ju_inputYoutube" class="form-control" name="ju_inputYoutube" value="<?= $theme_options['youtube']; ?>">
                </div>
                <h4><?php _e('Logo', 'udemy'); ?></h4>
                <div class="form-group">
                    <label for="ju_inputLogoType">
                        <?php _e('Logo Type', 'udemy'); ?>
                    </label>
                    <select name="ju_inputLogoType" id="ju_inputLogoType" class="form-control">
                        <option value="1"><?php _e('Site Name', 'udemy'); ?></option>
                        <option value="2"<?= $theme_options['logo_type'] == 2 ? 'selected' : '' ?>><?php _e('Image', 'udemy'); ?></option>
                    </select>
                </div>
                <h4><?php _e('Footer', 'udemy'); ?></h4>
                <div class="form-group">
                    <label for="ju_inputFooter">
                        <?php _e('Footer Text (HTML Allowed)', 'udemy'); ?>
                    </label>
                    <textarea type="text" id="ju_inputFooter" class="form-control" name="ju_inputFooter"><?= stripslashes_deep($theme_options['footer']); ?></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit"><?php _e('Submit', 'udemy'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
