<!doctype html>
<html lang="en">


@include('layoutsAdmin.head')

<body data-theme="light" class="font-nunito">
<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
            <p>Veuillez Patienter...</p>
        </div>
    </div>

    <!-- Top navbar div start -->
    @include('layoutsAdmin.navbar')

    <!-- main left menu -->
    @include('layoutsAdmin.left_bar')

  
    
    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Acceuil</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Tableau de bord</li>
                            <li class="breadcrumb-item active">Acceuil</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Telecharger rapport</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Envoyer Rapport</button>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="row clearfix row-deck">
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter3" class="carousel slide" data-ride="carousel" data-interval="2300">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-eye"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Total Client</div>
                                                    <h4 class="number mb-0">32k <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 13%</span></h4>
                                                    <small class="text-muted">Analytics for last week</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-eye"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Total Admin</div>
                                                    <h4 class="number mb-0">351k <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 8.2%</span></h4>
                                                    <small class="text-muted">Analytics for last week</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2500">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Total Voiture</div>
                                                    <h4 class="number mb-0">3,251 <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 13%</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter2" class="carousel slide" data-ride="carousel" data-interval="2000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user-md"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase"> Reservation</div>
                                                    <h4 class="number mb-0">32</h4>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter4" class="carousel slide" data-ride="carousel" data-interval="2300">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-thumbs-o-up"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Messages</div>
                                                    <h4 class="number mb-0">780</h4>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2> Revenue Total</h2>
                            <ul class="header-dropdown">
                                <li><a class="tab_btn" href="javascript:void(0);" title="Semaine">W</a></li>
                                <li><a class="tab_btn" href="javascript:void(0);" title="Mois">M</a></li>
                                <li><a class="tab_btn active" href="javascript:void(0);" title="Année">Y</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="body primary-bg text-light">
                                        <h4><i class="fa fa-bank"></i> $7,12,326</h4>
                                        <span>Fees</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="body secondary-bg text-light">
                                        <h4><i class="fa fa-bank"></i> $25,965</h4>
                                        <span>Donation</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="body bg-danger text-light">
                                        <h4><i class="fa fa-cc-visa"></i> $14,965</h4>
                                        <span>Expenses</span>
                                    </div>
                                </div>
                            </div>
                            <div id="apex-chart-line-column"></div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row clearfix">
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="card average_rating">
                        <div class="header">
                            <h2>Parents Feedback</h2>
                        </div>
                        <div class="body">                            
                            <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-o text-warning"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Gender Ratio</h2>
                        </div>
                        <div class="body">
                            <div id="Gender-Ratio" style="height: 16rem"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="carousel slide twitter w_feed" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item">
                                    <i class="fa fa-twitter fa-2x"></i>
                                    <p>23th Feb</p>
                                    <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                                    <div class="m-t-20"><i>- post form ThemeMakker</i></div>
                                </div>
                                <div class="carousel-item active">
                                    <i class="fa fa-twitter fa-2x"></i>
                                    <p>25th Jan</p>
                                    <h4>Now Get <span>50% Off</span><br>on buy</h4>
                                    <div class="m-t-20"><i>- post form thememakker</i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Social Counter</h2>
                        </div>
                        <div class="body social_counter">                        
                            <ul class=" list-unstyled basic-list">
                                <li><i class="fa fa-facebook-square mr-1"></i> FaceBook <span class="badge badge-primary">16,785</span></li>
                                <li><i class="fa fa-twitter-square mr-1"></i> Twitter <span class="badge badge-default">2,365</span></li>
                                <li><i class="fa fa-linkedin-square mr-1"></i> Linkedin<span class="badge badge-success">9,021</span></li>
                                <li><i class="fa fa-behance-square mr-1"></i> Behance<span class="badge badge-info">1,725</span></li>
                                <li><i class="fa fa-dribbble mr-1"></i> Dribbble<span class="badge badge-info">11,725</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="row clearfix row-deck">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-info"><i class="fa fa-line-chart"></i> </div>
                                    <div class="content">
                                        <div class="text">Graduate</div>
                                        <h5 class="number">89%</h5>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-warning"><i class="fa fa-shield"></i> </div>
                                    <div class="content">
                                        <div class="text">Gold Medals</div>
                                        <h5 class="number">262</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-danger"><i class="fa fa-star"></i> </div>
                                    <div class="content">
                                        <div class="text">Top Rank</div>
                                        <h5 class="number">305</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon"><i class="fa fa-globe"></i> </div>
                                    <div class="content">
                                        <div class="text">Other Country</div>
                                        <h5 class="number">317</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                      {{-- Ajouter une section ici --}}

                    <div class="row clearfix row-deck">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Derniers véhicules ajoutés</h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another Action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Report</th>
                                                <th>Year</th>
                                                <th>Field</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dean Otto</td>
                                                <td><span class="sparkbar">5,8,6,3,-5,9,2</span></td>
                                                <td>2018</td>
                                                <td>MCA</td>
                                            </tr>
                                           
                                           
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td><span class="sparkbar">10,8,1,-3,-3,-8,7</span></td>
                                                <td>2018</td>
                                                <td>MCA</td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td><span class="sparkbar">2,8,9,8,5,1,5</span></td>
                                                <td>2020</td>
                                                <td>PHD</td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td><span class="sparkbar">1,8,2,3,9,8,5</span></td>
                                                <td>2018</td>
                                                <td>MCA</td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td><span class="sparkbar">10,8,-1,-3,2,8,-5</span></td>
                                                <td>2020</td>
                                                <td>MBA</td>
                                            </tr>
                                           
                                            
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td><span class="sparkbar">2,8,9,8,5,1,5</span></td>
                                                <td>2020</td>
                                                <td>PHD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Réservations en attente</h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another Action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Number</th>
                                                <th>Department</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dean Otto</td>
                                                <td>22</td>
                                                <td>+404-447-6013</td>
                                                <td><span class="badge badge-primary">MCA</span></td>
                                            </tr>
                                            <tr>
                                                <td>K. Thornton</td>
                                                <td>23</td>
                                                <td>+404-447-6013</td>
                                                <td><span class="badge badge-default">MBA</span></td>
                                            </tr>
                                            <tr>
                                                <td>Kane D.</td>
                                                <td>22</td>
                                                <td>+404-447-4582</td>
                                                <td><span class="badge badge-warning">Medical</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td>24</td>
                                                <td>+404-447-3214</td>
                                                <td><span class="badge badge-success">BBA</span></td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td>22</td>
                                                <td>+404-447-2589</td>
                                                <td><span class="badge badge-primary">MCA</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td>23</td>
                                                <td>+404-447-1478</td>
                                                <td><span class="badge badge-info">M.COM</span></td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td>22</td>
                                                <td>+404-447-7896</td>
                                                <td><span class="badge badge-info">M.COM</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td>24</td>
                                                <td>+404-447-3214</td>
                                                <td><span class="badge badge-success">BBA</span></td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td>22</td>
                                                <td>+404-447-2589</td>
                                                <td><span class="badge badge-primary">MCA</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td>23</td>
                                                <td>+404-447-1478</td>
                                                <td><span class="badge badge-info">M.COM</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- Javascript -->
<script src="../assets/bundles/libscripts.bundle.js"></script>    
<script src="../assets/bundles/vendorscripts.bundle.js"></script>

<!-- page vendor js file -->
<script src="../assets/bundles/apexcharts.bundle.js"></script>
<script src="../assets/bundles/c3.bundle.js"></script>
<script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->

<!-- page js file -->
<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../../js/university/index.js"></script>
</body>
</html>