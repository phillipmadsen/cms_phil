<!-- start: MAIN MENU TOGGLER BUTTON -->
<div class="navigation-toggler">
    <i class="clip-chevron-left"></i>
    <i class="clip-chevron-right"></i>

</div>
<!-- Sidebar user panel -->
{{--     <div class="user-panel">
        <div class="pull-left image">
            <img src="{!! gravatarUrl(Sentinel::getUser()->email) !!}" class="img-circle" alt="User Image" />

        </div>
        <div class="pull-left info">
            <p>{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
<br style="clear:both" /> --}}

<ul class="main-navigation-menu">

    @include('backend.layout.partials.menu.adminitems', ['items'=> $menu_adminsidebar->roots()])

</ul>

