<?php ?>
<ul class="nav sidebar-menu">
    <li class="sidebar-label pt20">Menu</li>

    <li class="${param.active=='home' ? 'active' : ''}">
        <a href="/web/WEB-INF/view/manager/accueil.php">
            <span class="glyphicons glyphicons-home"></span>
            <span class="sidebar-title">Accueil</span>
        </a>
    </li>
    <li>
        <a class="accordion-toggle  ${param.menu=='vehicule' ? 'menu-open' : ''}" href="javascript:void(0)">
            <span class="glyphicons glyphicons-cars"></span>
            <span class="sidebar-title">Véhicules</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">

            <li class="${param.active=='list-veh' ? 'active' : ''}">
                    <a href="/web/WEB-INF/view/manager/vehicule/list.php">
                        <span class="glyphicons glyphicons-list"></span> Liste des v�hicules </a>
            </li>

            <li class="${param.active=='save-veh' ? 'active' : ''}">
                <a href="/web/WEB-INF/view/manager/vehicule/save.php">
                    <span class="glyphicons glyphicons-car"></span> Enregistrer un v�hicule </a>
            </li>


        </ul>
    </li>

    <li>

        <a class="accordion-toggle ${param.menu=='chauffeur' ? 'menu-open' : ''}" href="javascript:void(0)">
            <span class="glyphicons glyphicons-group"></span>
            <span class="sidebar-title">Chauffeurs</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">

            <li class="${param.active=='list-chauf' ? 'active' : ''}">
                <a href="/web/WEB-INF/view/manager/chauffeur/list.php">
                    <span class="glyphicons glyphicons-notes_2"></span> Liste des chauffeurs </a>
            </li>
            <li class="${param.active=='add-chauf' ? 'active' : ''}">
                <a href="/web/WEB-INF/view/manager/chauffeur/add.php">
                    <span class="glyphicons glyphicons-user_add"></span> Enregistrer un chauffeur </a>
            </li>

        </ul>

    </li>

    <li>

        <a class="accordion-toggle ${param.menu=='entretien' ? 'menu-open' : ''}" href="javascript:void(0)">
            <span class="glyphicons glyphicons-cogwheels"></span>
            <span class="sidebar-title">Entretiens</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">


            <li class="${param.active=='create-ent' ? 'active' : ''}">
                <a href="/web/WEB-INF/view/manager/entretien/create.php">
                    <span class="glyphicon glyphicon-saved"></span> Enregistrer un entretien </a>
            </li>

            <li class="${param.active=='list-ent' ? 'active' : ''}">
                <a href="/web/WEB-INF/view/manager/entretien/list.php">
                    <span class="glyphicons glyphicons-notes_2"></span> Liste des entretiens <i>(En cours)</i> </a>
            </li>

        </ul>

    </li>

     
    <li>

        <a class="accordion-toggle ${param.menu=='sinistre' ? 'menu-open' : ''}" href="javascript:void(0)">
            <span class="glyphicons glyphicons-warning_sign"></span>
            <span class="sidebar-title">Sinistres</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li class="${param.active=='create-sin' ? 'active' : ''}">
                <a href="/web/WEB-INF/view/manager/sinistre/add.php">
                    <span class="glyphicons glyphicons-notes"></span> Enregistrer un sinistre </a>
            </li>

            <li class="${param.active=='create-sin' ? 'active' : ''}">
                <a href="/web/WEB-INF/view/manager/sinistre/list.php">
                    <span class="glyphicons glyphicons-notes"></span> Liste des sinistres </a>
            </li>

        </ul>

    </li>



    <li class="sidebar-label pt15">Rapports & Statistiques<i style="color: #ffffff; font-size: 9px;">&nbsp;( En construction )</i></li>

</ul>
<?php ?>
