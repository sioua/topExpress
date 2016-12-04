<?php ?>
<ul class="nav sidebar-menu">
    <li class="sidebar-label pt20">Menu</li>

    <li class="${param.active=='home' ? 'active' : ''}">
        <a href="manager/accueil">
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
                    <a href="manager/vehicule/list">
                        <span class="glyphicons glyphicons-list"></span> Liste des véhicules </a>
            </li>

            <li class="${param.active=='save-veh' ? 'active' : ''}">
                <a href="manager/vehicule/save">
                    <span class="glyphicons glyphicons-car"></span> Enregistrer un véhicule </a>
            </li>
 

        </ul>
    </li>
    
    <li>
        <a class="accordion-toggle ${param.menu=='remisage' ? 'menu-open' : ''}" href="javascript:void(0)">
            <span class="glyphicons glyphicons-notes_2"></span>
            <span class="sidebar-title">Remisage</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
           
            <li class="${param.active=='rm-dhb' ? 'active' : ''}">
                <a href="manager/remisage/dashbord">
                    <span class="glyphicons glyphicons-charts"></span> Dashboard </a>
            </li>
             <li class="${param.active=='rm-rec' ? 'active' : ''}">
                <a href="manager/remisage/reception">
                    <span class="glyphicons glyphicons-message_new"></span> Reception </a>
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
                <a href="manager/chauffeur/list">
                    <span class="glyphicons glyphicons-notes_2"></span> Liste des chauffeurs </a>
            </li>
            <li class="${param.active=='add-chauf' ? 'active' : ''}">
                <a href="manager/chauffeur/add">
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
                <a href="manager/entretien/create">
                    <span class="glyphicon glyphicon-saved"></span> Enregistrer un entretien </a>
            </li>

            <li class="${param.active=='list-ent' ? 'active' : ''}">
                <a href="manager/entretien/list">
                    <span class="glyphicons glyphicons-notes_2"></span> Liste des entretiens <i>(En cours)</i> </a>
            </li>

        </ul>

    </li>

    <li>

        <a class="accordion-toggle ${param.menu=='mission' ? 'menu-open' : ''}" href="javascript:void(0)">
            <span class="glyphicons glyphicons-folder_new"></span>
            <span class="sidebar-title">Missions</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li class="${param.active=='list-mission' ? 'active' : ''}">
                <a href="manager/mission/list">
                    <span class="glyphicons glyphicons-notes_2"></span> Liste des missions <i>(En cours)</i> </a>
            </li>
            <li class="${param.active=='create-mission' ? 'active' : ''}">
                <a href="manager/mission/create">
                    <span class="glyphicons glyphicons-edit"></span> Enregistrer une mission </a>
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
                <a href="manager/sinistre/add">
                    <span class="glyphicons glyphicons-notes"></span> Enregistrer un sinistre </a>
            </li>
            
            <li class="${param.active=='create-sin' ? 'active' : ''}">
                <a href="manager/sinistre/list">
                    <span class="glyphicons glyphicons-notes"></span> Liste des sinistres </a>
            </li>

        </ul>

    </li>



    <li class="sidebar-label pt15">Rapports & Statistiques<i style="color: #ffffff; font-size: 9px;">&nbsp;( En construction )</i></li>

</ul>
<?php ?>
