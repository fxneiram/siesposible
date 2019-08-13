@extends('app')
@section('content')
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
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> {{ trans('application.recent_invoices') }}</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th></th>
                                <th>{{ trans('application.invoice_number') }}</th>
                                <th>{{ trans('application.invoice_status') }}</th>
                                <th>{{ trans('application.client') }}</th>
                                <th>{{ trans('application.date') }}</th>
                                <th>{{ trans('application.due_date') }}</th>
                                <th>{{ trans('application.amount') }}</th>
                                <th width="20%">{{ trans('application.action') }} </th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> {{ trans('application.recent_estimates') }}</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th></th>
                                <th>{{ trans('application.estimate_number') }}</th>
                                <th>{{ trans('application.client') }}</th>
                                <th>{{ trans('application.date') }}</th>
                                <th>{{ trans('application.amount') }}</th>
                                <th width="20%">{{ trans('application.action') }} </th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
@endsection
@section('scripts')
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
@endsection