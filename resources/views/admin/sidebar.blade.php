<aside class="sidebar-wrapper ">
    <nav class="sidebar-nav">
       <ul class="metismenu" id="menu1">
          <li class="single-nav-wrapper">
              <a href="{{url('admin/dashboard')}}" class="menu-item">
                  <span class="left-icon"><i class="fas fa-home"></i></span>
                  <span class="menu-text">home</span>
              </a>
            </li>
          
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                  <span class="left-icon"><i class="fas fa-table"></i></span>
                    <span class="menu-text">Personne Agé</span>
                </a>
                  <ul class="dashboard-menu">
                    <li><a href="{{route('show.old')}}">Table</a></li>
                  </ul>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                  <span class="left-icon"><i class="fas fa-chart-line"></i></span>
                  <span class="menu-text">Proche</span>
                </a>
                  <ul class="dashboard-menu">
                  <li><a href="{{route('show.proche')}}">Table</a></li>
                   
                 </ul>
            </li>
            <li class="single-nav-wrapper">
              <a class="has-arrow menu-item" href="#" aria-expanded="false">
                <span class="left-icon"><i class="fas fa-chart-line"></i></span>
                <span class="menu-text">visualisation</span>
              </a>
                <ul class="dashboard-menu">
                <li><a href="{{route('show.hero')}}">Hero</a></li>
                <li><a href="{{route('show.about')}}">About</a></li>
                <li><a href="{{route('show.visu')}}">Visualisation</a></li>
                <li><a href="{{route('show.team')}}">Team</a></li>
                <li><a href="{{route('show.logo')}}">Logo</a></li>





                 
               </ul>
          </li>
          </ul>
    </nav>
  </aside>