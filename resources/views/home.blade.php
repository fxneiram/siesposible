@extends('app')
@section('content')
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 380px; /* The height is 400 pixels */
            width: 100%; /* The width is the width of the web page */
            margin-bottom: 20px;
        }
    </style>
    <div class="col-md-12 content-header">
        <h1><i class="fa fa-dashboard"></i>Resumen</h1>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <i class="fa fa-users bg-aqua"></i>
                    <span class="info-box-text">Usuarios</span>
                    <span class="info-box-number">{{ $count_users }}</span>
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <i class="fa fa-user-plus bg-green"></i>
                    <span class="info-box-text">Lideres</span>
                    <span class="info-box-number">{{ $count_lideres }}</span>
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <i class="fa fa-list-alt bg-yellow"></i>
                    <span class="info-box-text">Votantes</span>
                    <span class="info-box-number">{{$count_votantes}}</span>
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <i class="fa fa-calendar bg-red"></i>
                    <span class="info-box-text">Eventos</span>
                    <span class="info-box-number">{{ $count_eventos }}</span>
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="box box-primary">
                    <div class="box-body">
                        <div id="yearly_overview">
                            <h4>Mapa de votantes(Puntos generados al azar actualmente)</h4>
                            <div id="map"></div>
                        </div><!-- /.col -->
                    </div><!-- ./box-body -->
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="panel panel-primary dashboard_stats">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-usd fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <p class="info-box-number">null</p>
                                <p class="info-box-text">Costo programa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="panel bg-yellow dashboard_stats">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-money fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <p class="info-box-number">null</p>
                                <p class="info-box-text">{{ trans('application.unpaid_invoices') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="panel bg-red dashboard_stats">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-times fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <p class="info-box-number">null</p>
                                <p class="info-box-text">{{ trans('application.invoices_overdue') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="panel bg-green dashboard_stats">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-check fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <p class="info-box-number">null</p>
                                <p class="info-box-text">{{ trans('application.paid_invoices') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="box box-primary">
                    <div class="box-body">
                        <div id="yearly_overview">
                            <h4>{{ trans('application.yearly_overview') }}</h4>
                            <canvas id="yearly_overview_inner"></canvas>
                        </div><!-- /.col -->
                    </div><!-- ./box-body -->
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="box box-primary">
                    <div class="box-body">
                        <div id="payment_overview">
                            <h4>{{ trans('application.payment_overview') }}</h4>
                            <canvas id="payment_overview_inner"></canvas>
                        </div><!--/.col -->
                    </div><!-- ./box-body -->
                </div>
            </div>
        </div>

    </section>
@endsection
@section('scripts')
    <script>

        var map, heatmap, heatmap2;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: {lat: 3.8815384, lng: -67.922352},
                styles: [
                    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                    {
                        featureType: 'administrative.locality',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'geometry',
                        stylers: [{color: '#263c3f'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#6b9a76'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{color: '#38414e'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#212a37'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#9ca5b3'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry',
                        stylers: [{color: '#746855'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#1f2835'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f3d19c'}]
                    },
                    {
                        featureType: 'transit',
                        elementType: 'geometry',
                        stylers: [{color: '#2f3948'}]
                    },
                    {
                        featureType: 'transit.station',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{color: '#17263c'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#515c6d'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.stroke',
                        stylers: [{color: '#17263c'}]
                    }
                ]
            });

            heatmap = new google.maps.visualization.HeatmapLayer({
                data: getPointsVotantes(),
                map: map
            });
            heatmap.set('gradient', [
                'rgba(0, 255, 255, 0)',
                'rgb(255,199,189)',
                'rgb(189,29,20)',
                'rgb(226,9,0)',
                'rgb(226,9,0)',
                'rgb(226,9,0)',
                'rgb(226,9,0)',
                'rgb(226,9,0)',
                'rgb(226,9,0)',

            ]);
            heatmap.set('radius', 2);
            heatmap.set('opacity', 0.7);
            /*
                        heatmap2 = new google.maps.visualization.HeatmapLayer({
                            data: getPoints2(),
                            map: map
                        });

                        heatmap2.set('gradient', [
                            'rgba(0, 255, 255, 0)',
                            'rgba(0, 255, 255, 1)',
                            'rgba(0, 0, 127, 1)',
                            'rgba(0, 0, 127, 1)',
                            'rgba(0, 0, 127, 1)',
                            'rgba(0, 0, 127, 1)',
                            'rgba(0, 0, 127, 1)',
                            'rgba(0, 0, 127, 1)',
                            'rgba(0, 0, 127, 1)',

                        ]);

                        heatmap2.set('radius', 2);
                        heatmap2.set('opacity', 0.8);
            */
            new google.maps.Marker({
                position: {lat: 3.867471, lng: -67.920853},
                title: "Casa del candidato"
            }).setMap(map);

            new google.maps.Marker({
                position: {lat: 3.8815384, lng: -67.922352},
                title: "Sede barrio Galán!"
            }).setMap(map);

        }

        function toggleHeatmap() {
            heatmap.setMap(heatmap.getMap() ? null : map);
        }


        function changeOpacity() {
            heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
        }

        // Heatmap data: 500 Points
        function getPoints1() {
            var positions = {!! $pos !!}
            console.log(positions.length);
            var rtn = [];
            for (var x = 0; x < positions.length; x++) {
                rtn.push(new google.maps.LatLng(positions[x].lat, positions[x].lng));
            }
            return rtn;
        }

        function getPoints2() {
            var positions = {!! $pos2 !!}
            console.log(positions.length);
            var rtn = [];
            for (var x = 0; x < positions.length; x++) {
                console.log(positions[x].lat + " , " + positions[x].lng);

                rtn.push(new google.maps.LatLng(positions[x].lat, positions[x].lng));
            }

            console.log(rtn);
            return rtn;
        }

        function getPointsVotantes() {
            var positions = {!! $pos3 !!}
            console.log(positions.length);
            var rtn = [];
            for (var x = 0; x < positions.length; x++) {
                console.log(positions[x].lat + " , " + positions[x].lng);

                rtn.push(new google.maps.LatLng(positions[x].lat, positions[x].lng));
            }

            console.log(rtn);
            return rtn;
        }
    </script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script>
        var income_data = JSON.parse([3, 4, 3, 5, 6]);
        var expense_data = JSON.parse([3, 4, 3, 5, 6]);
        var lineChartData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "{{ trans('application.income') }}",
                fillColor: "rgba(14,172,147,0.1)",
                strokeColor: "rgba(14,172,147,1)",
                pointColor: "rgba(14,172,147,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "rgba(54,73,92,0.8)",
                pointHighlightStroke: "rgba(54,73,92,1)",
                data: income_data
            },
                {
                    label: "{{ trans('application.expenditure') }}",
                    fillColor: "rgba(244,167,47,0)",
                    strokeColor: "rgba(244,167,47,1)",
                    pointColor: "rgba(217,95,6,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "rgba(54,73,92,0.8)",
                    pointHighlightStroke: "rgba(54,73,92,1)",
                    data: expense_data
                }
            ]
        };
        var pieData = [
            {
                value: '56757657',
                color: "#2FB972",
                highlight: "#37D484",
                label: "{{ trans('application.amount_received') }}"
            },
            {
                value: '7678976',
                color: "#C84135",
                highlight: "#EA5548",
                label: "{{ trans('application.outstanding_amount') }}"
            }
        ];

        $(function () {
            Chart.defaults.global.scaleFontSize = 12;
            var chartDiv = document.getElementById("yearly_overview_inner").getContext("2d");
            lineChart = new Chart(chartDiv).Line(lineChartData, {
                responsive: true
            });
            $('#yearly_overview').append(lineChart.generateLegend());
            var chartDiv = document.getElementById("payment_overview_inner").getContext("2d");
            pieChart = new Chart(chartDiv).Pie(pieData, {
                responsive: true
            });
            $('#payment_overview').append(pieChart.generateLegend());
        });
    </script>
    <script>
        $(document).ready(function () {
            initMap();
        });
    </script>
@endsection