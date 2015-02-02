<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <?php foreach(UeeAdmin::getUserSidebar() as $menu): ?>

                    <li  >
                        <a href="<?php eh($menu['Url']);?>" <?php if ($m==$menu['Name']): ?>class="active" <?php endif; ?> >
                            <i class="fa <?php eh($menu['Icon']);?>"></i>
                            <span><?php eh($menu['ShowName']);?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
