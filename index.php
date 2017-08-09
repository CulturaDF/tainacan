<?php
get_header();
get_template_part("partials/setup","header");
?>

<div id="main_part" class="home">
    <?php if(has_action('alter_home_page')): ?>
        <?php do_action('alter_home_page') ?>
    <?php else: ?>
        <div class="row container-fluid">
            <div class="project-info">
                <h1> <?php bloginfo('name') ?> </h1>
                <h3> <?php bloginfo('description') ?> </h3>
            </div>
            <div id="searchBoxIndex" class="col-md-3 col-sm-12 center">
                <form id="formSearchCollections" role="search">
                    <div class="input-group search-collection search-home">
                        <input style="color:white;" type="text" class="form-control" name="search_collections" id="search_collections" onfocus="changeBoxWidth(this)" placeholder="<?php _e('Find', 'tainacan') ?>"/>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"  onclick="redirectAdvancedSearch('#search_collections');"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </form>
                <a onclick="redirectAdvancedSearch(false);" href="javascript:void(0)" class="col-md-12 adv_search">
                    <span class="white"><?php _e('Advanced search', 'tainacan') ?></span>
                </a>
             </div>
        </div>

        <?php include_once "views/collection/collec_share.php"; ?>
    <?php endif; ?>
</div>

<?php if (is_front_page()) { echo '</header>'; } ?>

    <!-- TAINACAN: esta div (AJAX) recebe html e está presente tanto na index quanto no single, pois algumas views da administracao sao carregadas aqui -->
    <div id="configuration"  class="col-md-12 no-padding"></div>

<?php if (has_nav_menu("menu-ibram")):
    get_template_part("partials/home","ibram");
    else: ?>
        <div id="display_view_main_page" class="container-fluid"></div>
        <div id="loader_collections">
            <img src="<?php echo get_template_directory_uri() . '/libraries/images/new_loader.gif' ?>" width="64px" height="64px" />
            <h3> <?php _e('Loading Collections...', 'tainacan') ?> </h3>
        </div>
<?php endif; ?>

<div id='container-fluid-configuration' class="container-fluid no-padding">
    <div id="users_div"></div> <!-- classe de users_div -->
</div>

<?php require_once (dirname(__FILE__) . '/extras/routes/routes.php'); ?>

<?php get_footer(); ?>