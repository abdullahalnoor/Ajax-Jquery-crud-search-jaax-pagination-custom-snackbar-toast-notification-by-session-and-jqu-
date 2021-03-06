<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
      <p class="app-sidebar__user-name">John Doe</p>
      <p class="app-sidebar__user-designation">Frontend Developer</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item  @if(request()->path() == 'dashboard') active @endif " href="{{ route('dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

    {{--
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
        <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
        <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
        <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
      </ul>
    </li> --}}

    <li><a class="app-menu__item @if(request()->path() == 'category') active @endif" href="{{route('category')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Category</span></a></li>

    <li><a class="app-menu__item @if(request()->path() == 'text') active @endif" href="{{route('text')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">text</span></a></li>

  </ul>
</aside>