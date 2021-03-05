<div >
    <p class="text-center pt-3">
        <strong>1. How easy overall did you find it to register?</strong>
    </p>
    <div class="chart-responsive">
        <canvas id="overall_canvas_id" style=""></canvas>
    </div>
</div> 
 
<script>
    //How easy overall did you find it to register?
    var url_overall_data = "{{url('/overallBar')}}";
    var overall_data_array = new Array();
    var label_overall = new Array();
    var name = " Star ";
    $(document).ready(function(){
        $.get(url_overall_data, function(response){
            response.forEach(function(data){
                overall_data_array.push(data.count);
                label_overall.push(data.overall + name);
            });
            var c_bar = document.getElementById("overall_canvas_id").getContext('2d');
            var cbar = new Chart(c_bar, {
                type: 'bar',
                data: {
                    labels:label_overall,
                    datasets: [{
                    barPercentage: 1.0,
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
                    data: overall_data_array,
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
