@extends('Admin.Admin')
@section("Admin.Content_Admin")
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript" src="plugins/chartjs/Chart.min.js"></script>
      <script src="js/canvasjs.min.js"></script>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
              
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                    <div class="card" style="width: 1000px">
                        <script type="text/javascript">

                        window.onload = function() {
                            var chart = new CanvasJS.Chart("chartContainer", {
                                title: {
                                    text: " Top Tổng Số lượng Bán của các san phẩm"
                                },
                                data: [{
                                    type: "column",
                                    dataPoints: [
                                    @foreach($FindSumQuantity as $sumquantity)
                                      { y: {{$sumquantity->Soluong}},label: "{{$sumquantity->products_name}}", },
                                    @endforeach
                                    ]
                                }]
                            });
                            chart.render();
                        }
                        </script>
                    <div id="chartContainer" style="height: 400px; width: 900px;"></div>
                        <div class="header">
                            <h2>5 sản phẩm có lượt View nhiều nhất</h2>
                        </div>
                        <script type="text/javascript">
                        var array = new Array();
                        var view = new Array();
                        var percent = new Array();
                        var i=0;
                        var tong=0;
                        var total_view={{$Total_view}};
                            @foreach($MostViewProduct as $pro) {
                                    array[i]="{{$pro->name}}";
                                    view[i]=({{$pro->view}});
                                    tong=tong+view[i];
                                    i++;}
                            @endforeach
                          google.charts.load("current", {packages:["corechart"]});
                          google.charts.setOnLoadCallback(drawChart);
                          function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                              ['Task', 'Most View'],
                              [array[0],view[0]],
                              [array[1],view[1]],
                              [array[2],view[2]],
                              [array[3],view[3]],
                              [array[4],view[4]],
                              ["sản phẩm khác",total_view-tong]
                            ]);
                            var options = {
                              title: 'Views',
                              pieHole: 0.4,
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                            chart.draw(data, options);
                          }
                        </script>
                          <div id="donutchart" style=" width:1000px; widows: 600px; height: 500px;"></div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>
@endsection