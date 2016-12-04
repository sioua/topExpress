<ul class="nav sidebar-menu">
    <li class="sidebar-label pt20">Menu</li>
    
    
    <li>

            <a class="accordion-toggle menu-open" href="javascript:void(0)">
                <span class="glyphicons glyphicons-more_items"></span>
                <span class="sidebar-title">Remisages véhicules</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li class="${param.active=='recep' ? 'active' : ''}">
                    <a href="default/remisage/reception">
                        <span class="glyphicons glyphicons-list"></span> Les remisages (en cours) </a>
                </li>

                <li class="${param.active=='create' ? 'active' : ''}">
                    <a href="default/remisage/create">
                        <span class="glyphicons glyphicons-book_open"></span> Enregistrer un remisage </a>
                </li>

                <li class="${param.active=='search' ? 'active' : ''}">
                    <a href="default/remisage/search">
                        <span class="glyphicons glyphicons-search"></span> Rechercher remisage </a>
                </li>
            </ul>

        </li>


</ul>

                    
                    
                