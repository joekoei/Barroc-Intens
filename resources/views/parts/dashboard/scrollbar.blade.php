<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            @if(Auth::user()->role()->name == "sales")
                <li class="app-sidebar__heading">Sales</li>
                <li>
                    <a href="" id="home.side">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Contracten
                    </a>
                    <a href="" id="home.side">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Contact formulieren
                    </a>
                    <a href=""  id="klanten.side">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Producten (zien)
                    </a>
                </li>
            @endif
            @if(Auth::user()->role()->name == "maintenance")
                <li class="app-sidebar__heading" >Maintenance</li>
                <li>
                    <a href="" id="agenda.side">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Agenda
                    </a>
                    <a href="" id="agenda.side">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Overzicht klanten
                    </a>
                </li>
            @endif
            @if(Auth::user()->role()->name == "inkoop")
                <li class="app-sidebar__heading">Inkoop</li>
                <li>
                    <a href=""  id="klanten.side">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Producten
                    </a>
                </li>
            @endif
            @if(Auth::user()->role()->name == "finance")
            <li class="app-sidebar__heading">Finance</li>
            <li>
                <a href=""  id="factuur.side">
                    <i class="metismenu-icon pe-7s-display2"></i>
                    Facturen
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
