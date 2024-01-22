<!DOCTYPE html>
<html lang="en">
    @include('includeadmin.adminhead')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-car"></i></i> <span>Rent Car Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include('includeadmin.adminprofile')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('includeadmin.adminsidebar')
					<!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('includeadmin.adminmenufoot')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('includeadmin.adminnavigation')
        <!-- /top navigation -->


        @yield('content')


        @include('includeadmin.adminfooter')
        <!-- /footer content -->
      </div>
    </div>
    @include('includeadmin.adminjscat')
</body>
</html>
