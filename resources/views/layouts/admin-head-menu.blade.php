<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-light navbar-shadow">
        <div class="navbar-wrapper">
          <div class="navbar-header">
            <ul class="nav navbar-nav">
              <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
              <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo" src="{{ asset('img/HUTECH.png')}}" data-expand="{{ asset('img/HUTECH.png')}}" data-collapse="{{ asset('img/HUTECH.png')}}" class="brand-logo" width="80%"></a></li>
              <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
            </ul>
          </div>
          <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
              <ul class="nav navbar-nav">
                <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
              </ul>
              <ul class="nav navbar-nav float-xs-right">
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="user-name">{{auth()->user()->full_name}}</span></a>
                  <div class="dropdown-menu dropdown-menu-right"><a href="/admin/info/edit" class="dropdown-item"><i class="icon-head"></i> Thông tin</a>
                    <div class="dropdown-divider"></div><a href="/logout" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>