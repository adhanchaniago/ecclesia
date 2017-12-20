<meta http-equiv="refresh" content="10">   
<div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>GRAFIK ARTICLE & FAQ</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">  

                             <script src="<?php echo base_url();?>assets/highcharts/highstock.js"></script>
                             <script src="<?php echo base_url();?>assets/highcharts/heatmap.js"></script>
                                   <script src="<?php base_url(); ?>temp/source/highcharts-more.js"></script>
                            <script src="<?php echo base_url();?>assets/theme/js/highcharts.js"></script>
                            <script src="<?php echo base_url();?>assets/theme/js/exporting.js"></script>
                                 <script src="<?php echo base_url();?>assets/theme/themes/avocado.js"></script>

                                  <div class="col-lg-12">
                            <div class="panel panel-success">
                                 <div class="panel-heading">
                                 <h3 class="panel-title"><i class="fa fa-magnet"></i> Statistik Article</h3>
                              </div>
                          <div class="panel-body">
                      <div class="flot-chart">
           
    

    <script type="text/javascript">
                   $(document).ready(function () {
         Highcharts.setOptions({
        global : {
            useUTC : false
        }
    });
    $.ajax({
        type: "GET",
        url: '<?php echo base_url("datajson/article"); ?>',
        dataType: "json",
        contentType: "application/json",
        crossDomain: true,
        success: function (data) {
        if(data){
        console.log(data);
                    var processed_json = new Array();
                    for (i = 0; i < data.length; i++) {
                        processed_json.push([data[i].title, parseInt(data[i].month)]);
                         setTimeout(processed_json, 1000);   
                         cache: false
                    }
                          }
                  else{
                      alert("Error on query!");
                  }
        
              $('#article').highcharts('StockChart', {
                chart: {
                   type: 'bar',
                    zoomType: 'x',
                     animation: Highcharts.svg, // don't animate in old IE
                    marginRight: 10,
                    alignTicks: false,
                    plotBackgroundColor: null,
                    plotBackgroundImage: null,
                    plotBorderWidth: 0,
                    plotShadow: false,
                   events: {
                  load: function () {
                var series = this.series[0],
                shift = series.data.length > 5;
                setInterval(function () {
                      var x =processed_json;
                           series.addPoint([x], true,shift);
                            }, 1000);
                        }
                    }
                },
                  title: {
                    text: 'Article by category bulan'
            },
             pane: {
            startAngle: -150,
            endAngle: 150
        },            
    
              tooltip: {
            },
            rangeSelector: {
            buttons: [{
                type: 'hour',
                count: 1,
                text: '1h'
            }, {
                type: 'day',
                count: 1,
                text: '1d'
            }, {
                type: 'month',
                count: 1,
                text: '1m'
            }, {
                type: 'year',
                count: 1,
                text: '1y'
            }, {
                type: 'all',
                text: 'All'
            }],
            inputEnabled: false, // it supports only days
            selected: 4 // all
        },
             legend: {
            enabled: true
        },navigator: {
            adaptToUpdatedData: true,
            series: {
                data: data
            }
        },

        scrollbar: {
            liveRedraw: true
        },
            exporting: {
                enabled: true
            },
                xAxis: {
                      type: 'datetime',
                maxZoom: 40 * 1000,
                tickPixelInterval: 150,
                  
                },
                yAxis: {
            title: {
                text: 'All data'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#f00'
            }]
                 },
               series: [{
                     name : 'Bulan',
                   data: (function () {
                var data = [];
                for (i = 0; i < data.length; i++) {
                data.push([
                    processed_json * 1000
                ]);
            }
            return processed_json;
                }())
            }]
            });
        }
    });
});
    </script> 
            <div id="article"  style="height: 350px; width:100%;  margin:0px;">
            </div>
            </div>
        </div>
    </div>
 </div>



       <div class="col-lg-12">
                            <div class="panel panel-success">
                                 <div class="panel-heading">
                                 <h3 class="panel-title"><i class="fa fa-magnet"></i> Statistik FAQ</h3>
                              </div>
                          <div class="panel-body">
                      <div class="flot-chart">
           
    <script type="text/javascript">
                   $(document).ready(function () {
         Highcharts.setOptions({
        global : {
            useUTC : false
        }
    });
    $.ajax({
        type: "GET",
        url: '<?php echo base_url("datajson/biodata"); ?>',
        dataType: "json",
        contentType: "application/json",
        crossDomain: true,
        success: function (data) {
        if(data){
        console.log(data);
                    var processed_json = new Array();
                    for (i = 0; i < data.length; i++) {
                        processed_json.push([data[i].name, parseInt(data[i].date_sent)]);
                         setTimeout(processed_json, 1000);   
                         cache: false
                    }
                          }
                  else{
                      alert("Error on query!");
                  }
        
              $('#biodata').highcharts('StockChart', {
                chart: {
                   type: 'pie',
                    zoomType: 'x',
                     animation: Highcharts.svg, // don't animate in old IE
                    marginRight: 10,
                    alignTicks: false,
                    plotBackgroundColor: null,
                    plotBackgroundImage: null,
                    plotBorderWidth: 0,
                    plotShadow: false,
                   events: {
                  load: function () {
                var series = this.series[0],
                shift = series.data.length > 5;
                setInterval(function () {
                      var x =processed_json;
                           series.addPoint([x], true,shift);
                            }, 1000);
                        }
                    }
                },
                  title: {
                    text: 'Daftar FAQ'
            },
             pane: {
            startAngle: -150,
            endAngle: 150
        },            
    
              tooltip: {
            },
            rangeSelector: {
            buttons: [{
                type: 'hour',
                count: 1,
                text: '1h'
            }, {
                type: 'day',
                count: 1,
                text: '1d'
            }, {
                type: 'month',
                count: 1,
                text: '1m'
            }, {
                type: 'year',
                count: 1,
                text: '1y'
            }, {
                type: 'all',
                text: 'All'
            }],
            inputEnabled: false, // it supports only days
            selected: 4 // all
        },
             legend: {
            enabled: true
        },navigator: {
            adaptToUpdatedData: true,
            series: {
                data: data
            }
        },

        scrollbar: {
            liveRedraw: true
        },
            exporting: {
                enabled: true
            },
                xAxis: {
                      type: 'datetime',
                maxZoom: 40 * 1000,
                tickPixelInterval: 150,
                  
                },
                yAxis: {
            title: {
                text: 'All data'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#f00'
            }]
                 },
               series: [{
                     name : 'Tahun',
                   data: (function () {
                var data = [];
                for (i = 0; i < data.length; i++) {
                data.push([
                    processed_json * 1000
                ]);
            }
            return processed_json;
                }())
            }]
            });
        }
    });
});
    </script> 
            <div id="biodata"  style="height: 350px; width:100%;  margin:0px;">
            </div>
            </div>
        </div>
    </div>
