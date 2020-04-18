<?php 

include 'route.php';
?>
 <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <?php foreach($menus as $menu){
                           if($menu['type'] == '1'){
                            ?>
                            <li class="sidebar-item"> 
                                <a class="sidebar-link" href="<?= $menu['link'];?>" aria-expanded="false">
                                    <i data-feather="tag" class="feather-icon"></i>
                                    <span class="hide-menu"><?= $menu['name'];?></span>
                                </a>
                            </li>
                            <?php
                           }else if($menu['type'] == '2'){
                            ?>
                             <li class="sidebar-item"> 
                                <a class="sidebar-link sidebar-link" href="<?= $menu['link'];?>"
                                    aria-expanded="false"><i data-feather="home" class="feather-icon"></i>
                                    <span class="hide-menu"><?=$menu['name'];?></span>
                                </a>
                            </li>
                            <?php
                           }else if($menu['type'] == '3'){
                            ?>                           
                                <li class="sidebar-item"> 
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                        aria-expanded="false">
                                        <i data-feather="file-text" class="feather-icon"></i>
                                        <spanclass="hide-menu"><?= $menu['name'];?>
                                        </span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                                        <?php foreach($menu['child'] as $child){
                                            ?>
                                            <li class="sidebar-item">
                                                <a href="<?= $child['link'];?>" class="sidebar-link">
                                                    <span class="hide-menu"> <?= $child['name'];?></span>
                                                </a>
                                            </li>
                                            <?php
                                        }?>
                                    </ul>
                                </li>
                            <?php
                           }else if($menu['type'] == '4'){
                            ?>
                                <li class="list-divider"></li>
                            <?php
                           }else{
                            ?>
                                <li class="nav-small-cap">
                                    <span class="hide-menu"><?= $menu['name'];?>
                                    </span>
                                </li>
                            <?php
                           }
                            ?>
                       
                            <?php
                        }?>
                    
                    </ul>
                </nav>
            </div>
        </aside>