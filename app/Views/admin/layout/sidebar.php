<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link mt-5" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <?php foreach($menu as $key=>$menu1){ ?>
                <a class="nav-link collapsed" href="<?php echo $menu1['link'] ?>" data-bs-toggle="collapse" data-bs-target="<?php echo '#'.$key ?>" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="<?php echo $menu1['icon'] ?>"></i></div>
                    <?php echo $menu1['name'] ?>
                    <?php if(count($menu1['sub_menu'])>0){?>
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    <?php } ?>
                </a>
                    <?php if(count($menu1['sub_menu'])>0){
                        foreach($menu1['sub_menu'] as $key2 => $menu2){ ?>
                            <div class="collapse" id="<?php echo $key ?>" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo $menu2['link'] ?>"><?php echo $menu2['name'] ?></a>
                                </nav>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>