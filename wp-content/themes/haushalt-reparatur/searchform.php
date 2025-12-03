<?php
/**
 * Search form template
 *
 * @package Haushalt_Reparatur
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>" style="display: flex; gap: 10px;">
    <label style="flex: 1;">
        <span class="screen-reader-text"><?php echo _x('Suche nach:', 'label', 'haushalt-reparatur'); ?></span>
        <input 
            type="search" 
            class="search-field" 
            placeholder="<?php echo esc_attr_x('Suche...', 'placeholder', 'haushalt-reparatur'); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s"
            style="width: 100%; padding: 12px 16px; border: 2px solid var(--border-color); border-radius: var(--border-radius); font-size: 15px;"
        />
    </label>
    <button 
        type="submit" 
        class="search-submit btn btn-primary"
        style="padding: 12px 30px;"
    >
        <?php echo esc_html_x('Suchen', 'submit button', 'haushalt-reparatur'); ?>
    </button>
</form>
