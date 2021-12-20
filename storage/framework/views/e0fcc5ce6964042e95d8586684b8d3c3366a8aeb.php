<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Olá <?php echo e(Auth::user()->name); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo e(route("admin.home")); ?>" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-tachometer-alt">

                            </i>
                            <span><?php echo e(trans('global.dashboard')); ?></span>
                        </p>
                    </a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('atendimento_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.atendimentos.index")); ?>" class="nav-link <?php echo e(request()->is('admin/atendimentos') || request()->is('admin/atendimentos/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-user-md">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.atendimento.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paciente_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.pacientes.index")); ?>" class="nav-link <?php echo e(request()->is('admin/pacientes') || request()->is('admin/pacientes/*') ? 'active' : ''); ?>">
                            <i class="fa-fw far fa-user">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.paciente.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                    <li class="nav-item has-treeview <?php echo e(request()->is('admin/permissions*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/roles*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/users*') ? 'menu-open' : ''); ?>">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-users">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.userManagement.title')); ?></span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.permissions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            <span><?php echo e(trans('cruds.permission.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.roles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span><?php echo e(trans('cruds.role.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.users.index")); ?>" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-user">

                                        </i>
                                        <p>
                                            <span><?php echo e(trans('cruds.user.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
                <!-- <li class="nav-item">
                    <a href="<?php echo e(route("admin.systemCalendar")); ?>" class="nav-link <?php echo e(request()->is('admin/system-calendar') || request()->is('admin/system-calendar/*') ? 'active' : ''); ?>">
                        <i class="fas fa-fw fa-calendar">

                        </i>
                        <p>
                            <span><?php echo e(trans('global.systemCalendar')); ?></span>
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt">

                            </i>
                            <span><?php echo e(trans('global.logout')); ?></span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH D:\Irroba\Consultorio\resources\views/partials/menu.blade.php ENDPATH**/ ?>