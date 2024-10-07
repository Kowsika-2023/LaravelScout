<style>
    .nav-main-link-name {
        font-size: 110%;
        line-height: 1.2em;
    }
</style>

<!-- Sidebar -->
<nav id="sidebar" class="sidebarbg2" aria-label="Main Navigation">
    <div class="content-header bg-white-5">
        <a class="font-w600 text-dual" href="#">
            <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide font-size-h5 tracking-wider ml-2">
                <img src="{{ asset('assets/img/everestlogo.webp') }}" width="120px" height="50px" class="my-1">
            </span>
        </a>
        <div>
            <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close"
                href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
        </div>
    </div>

    <div class="js-sidebar-scroll sidebarbg3">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">


                    <li class="nav-main-item">
                        <a class="nav-main-link {{ Request::routeIs('post*.*') ? 'active' : '' }} "
                            href="{{ route('posts.index') }}">
                            <i class="nav-main-link-icon fa fa-user"></i>
                            <span class="nav-main-link-name">Post</span>
                        </a>
                    </li>


            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->
