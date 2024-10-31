<div class="wrap">
    <h1 class="pw-page-header"><?php esc_html_e('Bell Settings', 'pushe-webpush'); ?></h1>
    <?php settings_errors() ?>

    <div class="pw-main">
        <form method="POST" action="options.php">
            <?php
            settings_fields('pushe_webpush_bell_options');
            do_settings_sections('pushe_bell_options');
            submit_button(null, 'primary', 'submit', true, null);
            ?>
        </form>
    </div>

</div>