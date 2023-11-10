<div class="breadcrumbs">
    <img src="<?= get_template_directory_uri() . '/src/img/images/breadcrumbs.png'?>" alt="banner mask" class="decoration"/>
    <div class="container">
        <?php if (function_exists('yoast_breadcrumb')) :
            yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumbs-content">', '</p>');
        endif; ?>
    </div>
</div>