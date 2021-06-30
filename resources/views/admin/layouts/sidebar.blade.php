    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" style=" background-color: #e0c8ab !important;" href="{{ url('/auth/dashboard') }}">
            <div class="sidebar-brand-icon">
                <img src="{{ asset('admin/img/logo/logo2.png') }}">
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/auth/dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>tableau de bord</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
        fonctionnalités
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Catégorie</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Catégorie </h6>
                    <a class="collapse-item" href="{{ route('category.index') }}">Vue</a>
                    <a class="collapse-item" href="{{ route('category.create') }}">Créer</a>

                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
                aria-expanded="true" aria-controls="collapseBootstrap1">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>SubCategory</span>
            </a>
            <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Sous-catégorie </h6>
                    <a class="collapse-item" href="{{ route('subcategory.index') }}">Vue</a>
                    <a class="collapse-item" href="{{ route('subcategory.create') }}">Créer</a>

                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
                aria-expanded="true" aria-controls="collapseBootstrap2">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Produits</span>
            </a>
            <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Produits </h6>
                    <a class="collapse-item" href="{{ route('product.index') }}">Vue</a>
                    <a class="collapse-item" href="{{ route('product.create') }}">Créer</a>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
                aria-expanded="true" aria-controls="collapseBootstrap3">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Glisseur</span>
            </a>
            <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Glisseur </h6>
                    <a class="collapse-item" href="{{ route('slider.index') }}">Vue</a>
                    <a class="collapse-item" href="{{ route('slider.create') }}">Créer</a>

                </div>
            </div>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap4"
                aria-expanded="true" aria-controls="collapseBootstrap4">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Users</span>
            </a>
            <div id="collapseBootstrap4" class="collapse" aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Utilisateurs </h6>
                    <a class="collapse-item" href="{{ route('user.index') }}">Afficher tous les utilisateurs</a>


                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap5"
                aria-expanded="true" aria-controls="collapseBootstrap5">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Commande utilisateur</span>
            </a>
            <div id="collapseBootstrap5" class="collapse" aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">commande </h6>
                    <a class="collapse-item" href="{{ route('order.index') }}">vue</a>


                </div>
            </div>
        </li>

        <!--    <li class="nav-item">
        <a class="nav-link" href="forms.html">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Forms</span>
        </a>
      </li> -->
        <!--       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
            <a class="collapse-item" href="datatables.html">DataTables</a>
          </div>
        </div>
      </li> -->
        <!--    <li class="nav-item">
        <a class="nav-link" href="ui-colors.html">
          <i class="fas fa-fw fa-palette"></i>
          <span>UI Colors</span>
        </a>
      </li> -->
        <hr class="sidebar-divider">

        <li class="nav-item">


            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                Déconnexion

            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>



        </li>
        <hr class="sidebar-divider">
    </ul>
