<div class="col-lg-4">
    <aside class="right-sidebar">
        <div class="widget">
            <form class="form-search">
                <input class="form-control" type="text" placeholder="Search..">
            </form>
        </div>
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <aside id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </aside>
        <?php endif; ?>
    </aside>
</div>