<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

            <aside class="main-sidebar">
                <section class="sidebar">
<?php if ($admin_prefs['user_panel'] == TRUE): ?>
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url($avatar_dir . '/m_001.png'); ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $user_login['firstname'].$user_login['lastname']; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> <?php echo lang('menu_online'); ?></a>
                        </div>
                    </div>

<?php endif; ?>
<?php if ($admin_prefs['sidebar_form'] == TRUE): ?>
                    <!-- Search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="<?php echo lang('menu_search'); ?>...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>

<?php endif; ?>
                    <!-- Sidebar menu -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('/'); ?>">
                                <i class="fa fa-home text-primary"></i> <span><?php echo lang('menu_access_website'); ?></span>
                            </a>
                        </li>

                        <li class="header text-uppercase"><?php echo lang('menu_main_navigation'); ?></li>
                        <li class="<?=active_link_controller('dashboard')?>">
                            <a href="<?php echo site_url('admin/dashboard'); ?>">
                                <i class="fa fa-dashboard"></i> <span><?php echo lang('menu_dashboard'); ?></span>
                            </a>
                        </li>


                        <li class="header text-uppercase"><?php echo lang('menu_administration'); ?></li>
                        <li class="<?=active_link_controller('users')?>">
                            <a href="<?php echo site_url('admin/users'); ?>">
                                <i class="fa fa-user"></i> <span><?php echo lang('menu_users'); ?></span>
                            </a>
                        </li>
                        <li class="<?=active_link_controller('groups')?>">
                            <a href="<?php echo site_url('admin/groups'); ?>">
                                <i class="fa fa-shield"></i> <span><?php echo lang('menu_security_groups'); ?></span>
                            </a>
                        </li>
                        <li class="treeview <?=active_link_controller('prefs')?>">
                            <a href="#">
                                <i class="fa fa-cogs"></i>
                                <span><?php echo lang('menu_preferences'); ?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?=active_link_function('interfaces')?>"><a href="<?php echo site_url('admin/prefs/interfaces/admin'); ?>"><?php echo lang('menu_interfaces'); ?></a></li>
                            </ul>
                        </li>
                        <li class="<?=active_link_controller('files')?>">
                            <a href="<?php echo site_url('admin/files'); ?>">
                                <i class="fa fa-file"></i> <span><?php echo lang('menu_files'); ?></span>
                            </a>
                        </li>
                        <li class="<?=active_link_controller('database')?>">
                            <a href="<?php echo site_url('admin/database'); ?>">
                                <i class="fa fa-database"></i> <span><?php echo lang('menu_database_utility'); ?></span>
                            </a>
                        </li>



                        <li class="header text-uppercase"><?php echo lang('menu_crud'); ?></li>
                        <li class="<?=active_link_controller('crud/employees_management')?>">
                            <a href="<?php echo site_url('admin/crud/employees_management'); ?>">
                                <i class="fa fa-id-card"></i> <span><?php echo lang('menu_employees'); ?></span>
                            </a>
                        </li>
                        <li class="<?=active_link_controller('crud/customers_management')?>">
                            <a href="<?php echo site_url('admin/crud/customers_management'); ?>">
                                <i class="fa fa-group"></i> <span><?php echo lang('menu_customers'); ?></span>
                            </a>
                        </li>
                        <li class="<?=active_link_controller('crud/offices_management')?>">
                            <a href="<?php echo site_url('admin/crud/offices_management'); ?>">
                                <i class="fa fa-building"></i> <span><?php echo lang('menu_offices'); ?></span>
                            </a>
                        </li>
                        <li class="<?=active_link_controller('crud/orders_management')?>">
                            <a href="<?php echo site_url('admin/crud/orders_management'); ?>">
                                <i class="fa fa-book"></i> <span><?php echo lang('menu_orders'); ?></span>
                            </a>
                        </li>
                        <li class="<?=active_link_controller('crud/products_management')?>">
                            <a href="<?php echo site_url('admin/crud/products_management'); ?>">
                                <i class="fa fa-barcode"></i> <span><?php echo lang('menu_products'); ?></span>
                            </a>
                        </li>
                        <li class="<?=active_link_controller('crud/film_management')?>">
                            <a href="<?php echo site_url('admin/crud/film_management'); ?>">
                                <i class="fa fa-film"></i> <span><?php echo lang('menu_film'); ?></span>
                            </a>
                        </li>
                        <!-- Buy theme at https://www.grocerycrud.com/bootstrap-theme - NOT TESTED! -->
                        <!--<li class="<?=active_link_controller('crud/film_management_twitter_bootstrap')?>">
                            <a href="<?php echo site_url('admin/crud/film_management_twitter_bootstrap'); ?>">
                                <i class="fa fa-twitter"></i> <span><?php echo lang('menu_film_bootstrap'); ?></span>
                            </a>
                        </li> -->
                        <li class="<?=active_link_controller('crud/multigrids')?>">
                            <a href="<?php echo site_url('admin/crud/multigrids'); ?>">
                                <i class="fa fa-th"></i> <span><?php echo lang('menu_multigrids'); ?></span>
                            </a>
                        </li>



                        <li class="header text-uppercase"><?php echo $title; ?></li>
                        <li class="<?=active_link_controller('license')?>">
                            <a href="<?php echo site_url('admin/license'); ?>">
                                <i class="fa fa-legal"></i> <span><?php echo lang('menu_license'); ?></span>
                            </a>
                        </li>
                        <li class="<?=active_link_controller('resources')?>">
                            <a href="<?php echo site_url('admin/resources'); ?>">
                                <i class="fa fa-cubes"></i> <span><?php echo lang('menu_resources'); ?></span>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>
