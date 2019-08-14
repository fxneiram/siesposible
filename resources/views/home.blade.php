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
                    <i class="fa fa-file-pdf-o bg-green"></i>
                    <span class="info-box-text">Costos</span>
                    <span class="info-box-number">0</span>
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
                    <i class="fa fa-puzzle-piece bg-red"></i>
                    <span class="info-box-text">Casas</span>
                    <span class="info-box-number">0</span>
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="box box-primary">
                    <div class="box-body">
                        <div id="yearly_overview">
                            <h4>Aquí tienes tu mapa bb</h4>
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

        var map, heatmap;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14.5,
                center: {lat: 3.874374, lng: -67.9230954},
                mapTypeId: google.maps.MapTypeId.SATELLITE
            });

            heatmap = new google.maps.visualization.HeatmapLayer({
                data: getPoints(),
                map: map
            });
        }

        function toggleHeatmap() {
            heatmap.setMap(heatmap.getMap() ? null : map);
        }

        function changeGradient() {
            var gradient = [
                'rgba(0, 255, 255, 0)',
                'rgba(0, 255, 255, 1)',
                'rgba(0, 191, 255, 1)',
                'rgba(0, 127, 255, 1)',
                'rgba(0, 63, 255, 1)',
                'rgba(0, 0, 255, 1)',
                'rgba(0, 0, 223, 1)',
                'rgba(0, 0, 191, 1)',
                'rgba(0, 0, 159, 1)',
                'rgba(0, 0, 127, 1)',
                'rgba(63, 0, 91, 1)',
                'rgba(127, 0, 63, 1)',
                'rgba(191, 0, 31, 1)',
                'rgba(255, 0, 0, 1)'
            ]
            heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
        }

        function changeRadius() {
            heatmap.set('radius', heatmap.get('radius') ? null : 20);
        }

        function changeOpacity() {
            heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
        }

        // Heatmap data: 500 Points
        function getPoints() {
            return [
                new google.maps.LatLng(3.867471, -67.920853),
                new google.maps.LatLng(3.881538, -67.922352)
            ];
        }
    </script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_71jjQ6ZhoiZrsuO5XY42hU7I3p1BJ4o&libraries=visualization&callback=initMap">
    </script>
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
@endsection