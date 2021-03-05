<div class="box shadow-none p-3 mb-5 bg-light rounded">
    <div class="box-header with-border">
        <h5 class="text-center"><strong>ALL USERS</strong></h5>
        <hr>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <p class="text-center">
                    <strong>Number of Users</strong>
                </p>
                <div class="chart-responsive">
                    <canvas id="cus-bar" style=""></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <p class="text-center">
                    <strong>Number of Users</strong>
                </p>
                <div class="chart-responsive">
                    <div id="canvas-holder">
                        <canvas id="cus-line"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
{{--Bar chart in customers--}}
<script>
    var url_customers = "{{url('/client/analysis')}}";
    var cus_data = new Array();
    var cus_months = new Array();
    $(document).ready(function(){
        $.get(url_customers, function(response){
            response.forEach(function(data){
                cus_data.push(data.count);
                cus_months.push(data.role);
            });
            var c_bar = document.getElementById("cus-bar").getContext('2d');
            var cbar = new Chart(c_bar, {
                type: 'bar',
                data: {
                    labels:cus_months,
                    datasets: [{
                          backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
                        data: cus_data,
                        fill: false,
                        borderWidth: 5,
                    }]
                },
                options: {
                    legend: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

            var c_line = document.getElementById("cus-line").getContext('2d');
            var cline = new Chart(c_line, {
                type: 'line',
                data: {
                     labels:cus_months,
                    datasets: [{
                           backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
                        data: cus_data,
                        fill: false,
                        borderWidth: 5,
                    }]
                },
                options: {
                    legend: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        });
    });
</script>
