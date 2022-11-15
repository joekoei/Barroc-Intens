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
{{--                    <a href="" id="home.side" class="db-force">--}}
{{--                        <i class='bx bx-comment-detail'></i>--}}
{{--                        Offertes--}}
{{--                    </a>--}}
                    <a href="{{route('contact')}}" id="home.side" class="db-force">
                        <i class='bx bxs-contact'></i>
                        Contact formulieren
                    </a>
                    <a href="{{route('products.index')}}" id="home.side" class="db-force">
                        <i class='bx bx-coffee-togo' ></i>
                        Producten
                    </a>
                    <a href="{{route('klant.index')}}" id="home.side" class="db-force">
                        <i class='bx bx-comment-detail'></i>
                        Klanten
                    </a>
                </li>
            @endif
            @if(Auth::user()->role()->name == "maintenance" || Auth::user()->role()->name == "head-maintenance")
                <li class="app-sidebar__heading db-color-yellow" >Maintenance</li>
                <li>
                    @if(Auth::user()->role()->name == "head-maintenance")
                        <a href="{{route('meetings.create')}}" id="agenda.side" class="db-force">
                            <i class='bx bxs-calendar' ></i>
                            Plan afspraken in
                        </a>
                    @endif
                    <a href="{{route('meetings.index')}}" id="agenda.side" class="db-force">
                        <i class='bx bxs-calendar' ></i>
                        Agenda
                    </a>
                    <a href="" id="agenda.side" class="db-force">
                        <i class='bx bxs-user-account' ></i>
                        Overzicht klanten
                    </a>
                        <a href="{{route('workorders.index')}}" id="agenda.side" class="db-force">
                            <i class='bx bxs-user-account' ></i>
                            Werk bonnen
                        </a>
                </li>
            @endif
            @if(Auth::user()->role()->name == "inkoop" || Auth::user()->role()->name == "head-inkoop")
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
                <a href="{{route('invoices.index')}}"  id="factuur.side" class="db-force">
                    <i class='bx bx-money'></i>
                    Facturen
                </a>
                <a href="{{route('leasecontracts.index')}}"  id="factuur.side" class="db-force">
                    <i class='bx bxs-book-content'></i>
                    Leasecontracten
                </a>
            </li>
            @endif
            @if(Auth::user()->role()->name == "klant")
                <li class="app-sidebar__heading db-color-yellow">Klant</li>
                <li>
                    <a href="{{route('personal.products')}}"  id="klanten.side" class="db-force">
                        <i class="bx bx-coffee-togo"></i>
                        Lease apparaten
                    </a>
                    <a href="{{route('personal.lease.contract')}}"  id="factuur.side" class="db-force">
                        <i class='bx bxs-book-content'></i>
                        Mijn leasecontracten
                    </a>
                    <a href="{{route('personal.invoices')}}"  id="klanten.side" class="db-force">
                        <i class="bx bx-money"></i>
                        Mijn facturen
                    </a>
                    <a href="{{route('personal.storingen')}}"  id="klanten.side" class="db-force">
                        <i class='bx bxs-user-account'></i>
                        Mijn storingen
                    </a>
                    <a href="{{route('personal.data')}}"  id="klanten.side" class="db-force">
                        <i class="bx bx-comment-detail"></i>
                        Mijn gegevens
                    </a>
                    <a href="{{route('personal.bestellingen')}}"  id="klanten.side" class="db-force">
                        <i class="bx bx-cart"></i>
                        Mijn bestellingen
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
