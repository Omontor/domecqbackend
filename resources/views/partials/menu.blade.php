<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li>
                    <select class="searchable-field form-control">

                    </select>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('client_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/clients*") ? "menu-open" : "" }} {{ request()->is("admin/regions*") ? "menu-open" : "" }} {{ request()->is("admin/places*") ? "menu-open" : "" }} {{ request()->is("admin/zones*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon far fa-building">

                            </i>
                            <p>
                                {{ trans('cruds.clientManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('client_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.clients.index") }}" class="nav-link {{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fab fa-adversal">

                                        </i>
                                        <p>
                                            {{ trans('cruds.client.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('region_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.regions.index") }}" class="nav-link {{ request()->is("admin/regions") || request()->is("admin/regions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.region.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('place_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.places.index") }}" class="nav-link {{ request()->is("admin/places") || request()->is("admin/places/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.place.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('zone_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.zones.index") }}" class="nav-link {{ request()->is("admin/zones") || request()->is("admin/zones/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.zone.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('visit_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/witnesses*") ? "menu-open" : "" }} {{ request()->is("admin/checkins*") ? "menu-open" : "" }} {{ request()->is("admin/checkouts*") ? "menu-open" : "" }} {{ request()->is("admin/visit-reports*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-map-pin">

                            </i>
                            <p>
                                {{ trans('cruds.visitManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('witness_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.witnesses.index") }}" class="nav-link {{ request()->is("admin/witnesses") || request()->is("admin/witnesses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-camera">

                                        </i>
                                        <p>
                                            {{ trans('cruds.witness.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('checkin_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.checkins.index") }}" class="nav-link {{ request()->is("admin/checkins") || request()->is("admin/checkins/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-map-marked-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.checkin.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('checkout_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.checkouts.index") }}" class="nav-link {{ request()->is("admin/checkouts") || request()->is("admin/checkouts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-map-marked-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.checkout.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('visit_report_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.visit-reports.index") }}" class="nav-link {{ request()->is("admin/visit-reports") || request()->is("admin/visit-reports/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-signal">

                                        </i>
                                        <p>
                                            {{ trans('cruds.visitReport.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('product_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/product-categories*") ? "menu-open" : "" }} {{ request()->is("admin/brands*") ? "menu-open" : "" }} {{ request()->is("admin/variantes*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-boxes">

                            </i>
                            <p>
                                {{ trans('cruds.productManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('product_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.product-categories.index") }}" class="nav-link {{ request()->is("admin/product-categories") || request()->is("admin/product-categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-prescription-bottle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.productCategory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('brand_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.brands.index") }}" class="nav-link {{ request()->is("admin/brands") || request()->is("admin/brands/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-wine-glass">

                                        </i>
                                        <p>
                                            {{ trans('cruds.brand.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('variante_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.variantes.index") }}" class="nav-link {{ request()->is("admin/variantes") || request()->is("admin/variantes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-wine-glass-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.variante.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('system_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/witness-categories*") ? "menu-open" : "" }} {{ request()->is("admin/segments*") ? "menu-open" : "" }} {{ request()->is("admin/clasifications*") ? "menu-open" : "" }} {{ request()->is("admin/groups*") ? "menu-open" : "" }} {{ request()->is("admin/providers*") ? "menu-open" : "" }} {{ request()->is("admin/statuses*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-mobile-alt">

                            </i>
                            <p>
                                {{ trans('cruds.systemManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('witness_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.witness-categories.index") }}" class="nav-link {{ request()->is("admin/witness-categories") || request()->is("admin/witness-categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-camera">

                                        </i>
                                        <p>
                                            {{ trans('cruds.witnessCategory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('segment_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.segments.index") }}" class="nav-link {{ request()->is("admin/segments") || request()->is("admin/segments/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-bars">

                                        </i>
                                        <p>
                                            {{ trans('cruds.segment.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('clasification_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.clasifications.index") }}" class="nav-link {{ request()->is("admin/clasifications") || request()->is("admin/clasifications/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fab fa-wpforms">

                                        </i>
                                        <p>
                                            {{ trans('cruds.clasification.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('group_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.groups.index") }}" class="nav-link {{ request()->is("admin/groups") || request()->is("admin/groups/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-hospital-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.group.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('provider_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.providers.index") }}" class="nav-link {{ request()->is("admin/providers") || request()->is("admin/providers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.provider.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.statuses.index") }}" class="nav-link {{ request()->is("admin/statuses") || request()->is("admin/statuses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-check-double">

                                        </i>
                                        <p>
                                            {{ trans('cruds.status.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }} {{ request()->is("admin/audit-logs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.auditLog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_alert_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.user-alerts.index") }}" class="nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-bell">

                            </i>
                            <p>
                                {{ trans('cruds.userAlert.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="{{ route("admin.systemCalendar") }}" class="nav-link {{ request()->is("admin/system-calendar") || request()->is("admin/system-calendar/*") ? "active" : "" }}">
                        <i class="fas fa-fw fa-calendar nav-icon">

                        </i>
                        <p>
                            {{ trans('global.systemCalendar') }}
                        </p>
                    </a>
                </li>
                @php($unread = \App\Models\QaTopic::unreadCount())
                    <li class="nav-item">
                        <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "active" : "" }} nav-link">
                            <i class="fa-fw fa fa-envelope nav-icon">

                            </i>
                            <p>{{ trans('global.messages') }}</p>
                            @if($unread > 0)
                                <strong>( {{ $unread }} )</strong>
                            @endif

                        </a>
                    </li>
                    @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                        @can('profile_password_edit')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                    <i class="fa-fw fas fa-key nav-icon">
                                    </i>
                                    <p>
                                        {{ trans('global.change_password') }}
                                    </p>
                                </a>
                            </li>
                        @endcan
                    @endif
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <p>
                                <i class="fas fa-fw fa-sign-out-alt nav-icon">

                                </i>
                                <p>{{ trans('global.logout') }}</p>
                            </p>
                        </a>
                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>