    <!-- Sidebar Menu -->
    <div class="offcanvas offcanvas-start sidebarWrapper" tabindex="-1" id="appSidebar">
        <div class="offcanvas-body">
            <nav class="sidebar">
                <div class="profilebox">
                    <img src="/template/assets/img/sample/avatar.jpg" alt="avatar" class="avatar">
                    <h2 class="title">{{auth()->user()->name}}</h2>
                    <h5 class="lead">
                        <i class="icon ion-ios-mail me-1"></i>
                        {{auth()->user()->email}}
                    </h5>
                    <div class="sidebutton">
                        <a href="#">
                            <i class="icon ion-ios-settings"></i>
                        </a>
                    </div>
                </div>
                <div class="sidebarGroup">
                    <ul class="sidebarMenu">
                        <li>
                            <a href="/home">
                                <i class="icon ion-ios-home"></i>
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="{{route('frontend.blogs.index')}}">
                                <i class="icon ion-ios-paper"></i>
                                Noticias
                            </a>
                        </li>
                        <li>
                            <a href="{{route('frontend.appointments.index')}}">
                                <i class="icon ion-ios-calendar"></i>
                                Citas
                            </a>
                        </li>
                        <li>
                            <a href="{{route('frontend.profile.index')}}">
                                <i class="icon ion-ios-person"></i>
                                Mi Perfil
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="icon ion-ios-lock" style="color: red;"></i>
                                Logout
                            </a>
                        </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </ul>
                </div>


            </nav>
        </div>
    </div>