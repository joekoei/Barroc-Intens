<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading db-color-yellow">Algemeen</li>
            <li>
                <a href="{{route('dashboard')}}" class="db-force">
                    <i class='bx bxs-home' ></i>
                    Homepage
                </a>
            </li>
            @if(Auth::user()->role()->name == "sales")
                <li class="app-sidebar__heading db-color-yellow">Sales</li>
                <li>
                    <a href="" id="home.side" class="db-force">
                        <i class='bx bx-comment-detail'></i>
                        Contracten
                    </a>
                    <a href="" id="home.side" class="db-force">
                        <i class='bx bxs-contact'></i>
                        Contact formulieren
                    </a>
                    <a href="{{route('products.index')}}" id="home.side" class="db-force">
                        <i class='bx bx-coffee-togo' ></i>
                        Producten
                    </a>
                </li>
            @endif
            @if(Auth::user()->role()->name == "maintenance")
                <li class="app-sidebar__heading db-color-yellow" >Maintenance</li>
                <li>
                    <a href="{{route('meetings.index')}}" id="agenda.side" class="db-force">
                        <i class='bx bxs-calendar' ></i>
                        Agenda
                    </a>
                    <a href="" id="agenda.side" class="db-force">
                        <i class='bx bxs-user-account' ></i>
                        Overzicht klanten
                    </a>
                </li>
            @endif
            @if(Auth::user()->role()->name == "inkoop")
                <li class="app-sidebar__heading db-color-yellow">Inkoop</li>
                <li>
                    <a href="{{route('products.index')}}"  id="klanten.side" class="db-force">
                        <i class='bx bx-coffee-togo' ></i>
                        Producten
                    </a>
                </li>
            @endif
            @if(Auth::user()->role()->name == "finance")
            <li class="app-sidebar__heading db-color-yellow">Finance</li>
            <li>
                <a href=""  id="factuur.side" class="db-force">
                    <i class="metismenu-icon pe-7s-display2"></i>
                    Facturen
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
