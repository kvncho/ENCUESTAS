@extends('users.app')

@section('content')
    <div class="navbar navbar-inverse navbar-fixed-top bg-indigo">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img src="/images/logo_light.png" alt=""></a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Text link</a></li>

                <li>
                    <a href="#">
                        <i class="icon-cog3"></i>
                        <span class="visible-xs-inline-block position-right">Icon link</span>
                    </a>
                </li>

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/images/image.png" alt="">
                        <span>Victoria</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                        <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                        <li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                        <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main sidebar-default sidebar-fixed">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img src="/images/image.png" class="img-circle img-sm" alt=""></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">{{Auth::user()->name}}</span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                    </div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">

                                <!-- Main -->

                                <li><a href=" "><i class="icon-home4"></i> <span>Inicio</span></a></li>


                                <li>
                                    <a href="#"><i class="icon-stack2"></i> <span>1. Fin de la Pobreza</span></a>
                                    <ul>
                                        <li><a href="{{ url('/users/encuestas') }}">1.a.1</a>

                                        </li>
                                        <li><a href="{{ url('users/ecuestas') }}}">1.5.2</a></li>
                                        <li><a href=" ">1.a.2</a></li>
                                        <li><a href=" ">1.b.1</a></li>
                                    </ul>
                                </li>


                                <li>
a                                    <ul>
                                        <li><a href=" ">2.3.1</a></li>
                                        <li><a href=" ">2.3.2</a></li>
                                        <li><a href=" ">2.a.1</a></li>
                                        <li><a href=" ">2.b.1</a></li>
                                        <li><a href=" ">2.b.2</a></li>
                                        <li><a href=" ">2.c.1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-droplet2"></i> <span>7. Energia Asequible y no Contaminable</span></a>
                                    <ul>
                                        <li><a href="layout_navbar_fixed.html">7.3.1</a></li>
                                        <li><a href="layout_navbar_sidebar_fixed.html">7.b.1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-stack"></i> <span>8. Trabajo Decente y Crecimiento Económico</span></a>
                                    <ul>
                                        <li><a href="layout_navbar_fixed.html">8.1.1</a></li>
                                        <li><a href="layout_navbar_sidebar_fixed.html">8.2.1</a></li>
                                        <li><a href="layout_sidebar_fixed_native.html">8.3.1</a></li>
                                        <li><a href="layout_navbar_hideable.html">8.4.1</a></li>
                                        <li><a href="layout_sidebar_fixed_native.html">8.4.2</a></li>
                                        <li><a href="layout_navbar_hideable.html">8.5.1</a></li>
                                        <li><a href="layout_navbar_hideable.html">8.5.2</a></li>
                                        <li><a href="layout_sidebar_fixed_native.html">8.9.1</a></li>
                                        <li><a href="layout_navbar_hideable.html">8.9.2</a></li>
                                        <li><a href="layout_navbar_hideable.html">8.b.1</a></li>
                                    </ul>
                                </li>
                                <li><a href=""><i class="icon-list-unordered"></i> <span>9. Industria 		Innovacion E Infraestructura </span></a>
                                    <ul>
                                        <li><a href="layout_navbar_fixed.html">9.1.2</a></li>
                                        <li><a href="layout_navbar_sidebar_fixed.html">9.2.1</a></li>
                                        <li><a href="layout_sidebar_fixed_native.html">9.2.2</a></li>
                                        <li><a href="layout_navbar_hideable.html">9.3.1</a></li>
                                        <li><a href="layout_sidebar_fixed_native.html">9.4.1</a></li>
                                        <li><a href="layout_navbar_hideable.html">9.5.1</a></li>
                                        <li><a href="layout_navbar_hideable.html">9.a.1</a></li>
                                        <li><a href="layout_sidebar_fixed_native.html">9.b.1</a></li>
                                    </ul>
                                </li>
                                <li><a href=""><i class="icon-width"></i> <span>10. Reducción de las Desigualdades</span></a>
                                    <ul>
                                        <li><a href="layout_navbar_fixed.html">10.4.1</a></li>
                                        <li><a href="layout_navbar_sidebar_fixed.html">10.5.1</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="#"><i class="icon-pencil3"></i> <span>11. Ciudades y Comunidades Sostenibles</span></a>
                                    <ul>
                                        <li><a href="layout_navbar_fixed.html">11.5.2</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-file-css"></i> <span>12. Producción y Consumo Responsable</span></a>
                                    <ul>
                                        <li><a href="layout_navbar_fixed.html">12.2.1</a></li>
                                        <li><a href="layout_navbar_fixed.html">12.2.2</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-footprint"></i> <span>14. Vida Submarina</span></a>
                                    <ul>
                                        <li><a href="layout_navbar_fixed.html">14.7.1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-spell-check"></i> <span>16. Paz, Justicia e Instituciones Sólidas</span></a>
                                    <ul>
                                        <li><a href="layout_navbar_fixed.html">16.6.1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-select2"></i> <span>17. Alianzas para Lograr los Objetivos</span></a>
                                    <ul>
                                        <li><a href="layout_navbar_fixed.html">17.1.1</a></li>
                                        <li><a href="layout_navbar_sidebar_fixed.html">17.1.2</a></li>
                                        <li><a href="layout_sidebar_fixed_native.html">17.2.1</a></li>
                                        <li><a href="layout_navbar_hideable.html">17.3.1</a></li>
                                        <li><a href="layout_sidebar_fixed_native.html">17.3.2</a></li>
                                        <li><a href="layout_navbar_hideable.html">17.4.1</a></li>
                                        <li><a href="layout_navbar_hideable.html">17.11.1</a></li>
                                        <li><a href="layout_sidebar_fixed_native.html">17.13.1</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">




                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Starters</span> - Fixed Layout</h4>
                        </div>


                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li><a href="layout_fixed.html">Starters</a></li>
                            <li class="active">Fixed layout</li>
                        </ul>


                    </div>
                </div>
                <!-- /page header -->



                <!-- Content area -->
                <div class="content">
                    <!-- Cuerpo -->
                    <div class="panel panel-flat step step-1">
                        <div class="panel-heading" style="background:#4774AB;color :white;margin-bottom: 20px;">
                            <h3 class="panel-title"> </i>( I ) Marcar solo una de las opciones</h3>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>

                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body" >


                            <div class="panel panel-flat">


                                @foreach ($table_objetivo as $contenido )
                                <li>

                                    <a href="#"><i class="icon-stack2"></i>
                                        <span>{{$contenido->numero_objetivo .'. '. $contenido->descripcion_ES  }}</span>
                                    </a>


                                    <ul>
                                        <li><a href="{{ url('/users/encuestas/') }}"></a>
                                        </li>
                                    </ul>

                                  </li>
                                @endforeach
                            </div>




                        </div>



                        </div>
                    </div>
                    <!-- /Cuerpo -->
                @yield('content')

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>


@endsection