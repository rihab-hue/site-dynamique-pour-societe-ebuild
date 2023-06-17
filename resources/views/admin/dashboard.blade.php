@extends('layouts.back')
@section('title', 'Dashboard_admin')
@section('content')
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Dashboard </h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 -->
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="circle-tile ">
                                                <a href="#">
                                                    <div class="circle-tile-heading orange"><i
                                                            class="fe fe-folder-minus fa-fw fa-3x"></i></div>
                                                </a>
                                                <div class="circle-tile-content red">
                                                    <div class="circle-tile-description text-faded"> Nbr Projet</div>
                                                    <div class="circle-tile-number text-faded ">265</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="circle-tile ">
                                                <a href="#">
                                                    <div class="circle-tile-heading orange"><i
                                                            class="fa fa-users fa-fw fa-3x"></i></div>
                                                </a>
                                                <div class="circle-tile-content red">
                                                    <div class="circle-tile-description text-faded"> Nbr Client </div>
                                                    <div class="circle-tile-number text-faded ">10</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="circle-tile ">
                                                <a href="#">
                                                    <div class="circle-tile-heading orange"><i
                                                            class="fe fe-edit fa-fw fa-3x"></i></div>
                                                </a>
                                                <div class="circle-tile-content red">
                                                    <div class="circle-tile-description text-faded"> Nbr Blog </div>
                                                    <div class="circle-tile-number text-faded ">11</div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="circle-tile ">
                                                <a href="#">
                                                    <div class="circle-tile-heading orange"><i
                                                            class="fe fe-mail fa-fw fa-3x"></i></div>
                                                </a>
                                                <div class="circle-tile-content red">
                                                    <div class="circle-tile-description text-faded"> Nbr Abonnés </div>
                                                    <div class="circle-tile-number text-faded ">20</div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="circle-tile ">
                                                <a href="#">
                                                    <div class="circle-tile-heading orange"><i
                                                            class="fa fa-info fa-fw fa-3x"></i></div>
                                                </a>
                                                <div class="circle-tile-content red">
                                                    <div class="circle-tile-description text-faded"> Nbr Référence </div>
                                                    <div class="circle-tile-number text-faded ">15</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END -->
                
                <!-- css charts -->
                <style>
                    .chart-container {
                      width: 70%;
                      height: 50%;
                      margin: auto;
                    }
                </style>
                   
                <div class="row  justify-content-center ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Analyse des visiteurs</h3>
                            </div>
                            <div class="card chart-container">
                               <canvas id="chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div> 
                
                <!-- js chart -->       
                <script
                 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
                </script>
                <script>
                    const ctx = document.getElementById("chart").getContext('2d');
                    const myChart = new Chart(ctx, {
                        type: 'line', 
                        data: {
                        labels: ["dimanche", "Lundi ", "Mardi",
                        "mercredi", "jeudi", "vendredi", "samedi"],
                        datasets: [{
                            label: 'Nbr visiteur',
                            backgroundColor: '',
                            borderColor: '#c21a1a',
                            data: [0, 3000, 2000, 5000, 8000, 9000, 2000],
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                            ticks: {
                                beginAtZero: true,
                            }
                            }]
                        }
                        },
                    });
                    </script>

                <!-- ROW-2 
                <div class="row  justify-content-center ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Analyse des ventes</h3>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mx-auto text-center justify-content-center mb-4">
                                    <div class="d-flex text-center justify-content-center me-3"><span
                                            class="dot-label bg-black my-auto"></span>Total de  projet</div>
                                    <div class="d-flex text-center justify-content-center"><span
                                            class="dot-label bg-danger my-auto"></span>Total de client</div>
                                </div>
                                <div class="chartjs-wrapper-demo">
                                    <canvas id="transactions" class="chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
@endsection
