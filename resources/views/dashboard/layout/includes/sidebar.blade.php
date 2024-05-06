<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">

    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li class="{{ Request::route()->getName() == 'dash.index' ? 'active' : '' }}">
                    <a href="{{ route('dash.index') }}" class="waves-effect">

                        <i class="dripicons-home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
               
                <li class="{{ Request::route()->getName() == 'contacts.index' ? 'active' : '' }}">
                    <a href="{{ route('contacts.index') }}">

                        <i class="ion ion-md-call  "></i>
                        <span>Contact us </span>
                    </a>
                </li>
        
                <li class=" {{ Request::route()->getName() == 'abouts.index' ? 'active' : '' }}">

                    <a href="{{ route('abouts.index') }}"><i class="dripicons-briefcase"></i>
                        <span> About </span>
                    </a>

                </li>
       
                <li class=" {{ Request::route()->getName() == 'socials.index' ? 'active' : '' }}">

                    <a href="{{ route('socials.index') }}"><i class="fas fa-mail-bulk "></i>
                        <span> Social Media</span>
                    </a>

                </li>
                <li class=" {{ Request::route()->getName() == 'companies.index' ? 'active' : '' }}">

                    <a href="{{ route('companies.index') }}"><i class="typcn typcn-th-list-outline  "></i>
                        <span>Company </span>
                    </a>

                </li>
                <li class=" {{ Request::route()->getName() == 'categories.index' ? 'active' : '' }}">

                    <a href="{{ route('categories.index') }}"><i class="typcn typcn-flow-merge "></i>
                        <span>Category </span>
                    </a>

                </li>

                <li class=" {{ Request::route()->getName() == 'products.index' ? 'active' : '' }}">

                    <a href="{{ route('products.index') }}"><i class="fas fa-gem  "></i>
                        <span>Products</span>
                    </a>

                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner
  -->
</div>
