<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Milan Kataria</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="active treeview">

            <li class=""><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i>posts</a></li>
            <li class=""><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i>categories</a></li>
            <li class=""><a href="{{ route('tag.index') }}"><i class="fa fa-circle-o"></i>tags</a></li>
            <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i>users</a></li>

        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>