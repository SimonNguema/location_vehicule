<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="../assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{Auth::user()->nom_utilisateur}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{route('admin.profil.index')}}"><i class="icon-user"></i>Mon Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Parametre</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('logout')}}"><i class="icon-power"></i>Deconnecter</a></li>
                </ul>
            </div>                
            <hr>
            
        </div>
            
        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul class="metismenu li_animation_delay">
                        <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Tableau de bord</span></a></li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fa  fa-user-circle"></i><span>Utilisateurs</span></a>
                            <ul>
                                <li><a href="{{ route('admin.users.index') }}">Clients</a></li>
                                <li><a href="app-inbox.html">Adminisstrateurs</a></li>
                                <li><a href="app-chat.html">Super-administrateurs</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-taxi"></i><span>Vehicules</span> </a>
                            <ul>
                                <li><a href="{{ route('admin.voiture.index') }}">Liste vehicule</a></li>
                                <li><a href="{{ route('admin.voiture.create') }}">Ajouter vehicule</a></li>
                            </ul>
                        </li>
                       
                        
                        <li><a href="{{route('admin.location.index')}}"><i class="fa fa-tag"></i>Reservation</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>Paiement</a></li>
                            
                      
                        <li><a href="library.html"><i class="fa fa-book"></i>Message</a></li>
                        
                      
                     
                     
                      
                    </ul>
                </nav>
            </div>
          
           
              
        </div>          
    </div>
</div>