<ul class="nav sidebar-menu">
    <li class="sidebar-label pt20">Menu</li>

    <li>

        <a class="accordion-toggle menu-open" href="javascript:void(0)">
            <span class="glyphicons glyphicons-folder_new"></span>
            <span class="sidebar-title">Administration</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li class="${param.active=='org' ? 'active' : ''}">
                <a href="admin/organisation/departement/list">
                    <span class="glyphicons glyphicons-notes_2"></span> Organisation entreprise</a>
            </li>
            <li class="${param.active=='param' ? 'active' : ''}">
                <a href="manager/parameter/energie">
                    <span class="glyphicons glyphicons-edit"></span> Paramètrage </a>
            </li>
            <li class="${param.active=='veh' ? 'active' : ''}">
                <a href="admin/vehicule/carrosserie">
                    <span class="glyphicons glyphicons-edit"></span> Catégories véhicules </a>
            </li>

        </ul>

    </li>

    

</ul>
