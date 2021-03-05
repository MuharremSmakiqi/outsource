 <div  >
    <p class="text-center pt-3">
        <strong>2. How easy was it to complete your profile?</strong>
    </p>
    <div class="chart-responsive">
        <canvas id="profile_canvas_id" style=""></canvas>
    </div>
</div> 
 
<script>
    //How easy overall did you find it to register?
    var url_profile_data = "{{url('/profileBar')}}";
    var profile_data_array = new Array();
    var label_profile = new Array();
    $(document).ready(function(){
        $.get(url_profile_data, function(response){
            response.forEach(function(data){
                profile_data_array.push(data.count);
                label_profile.push(data.profile + name);
            });
            var c_bar = document.getElementById("profile_canvas_id").getContext('2d');
            var cbar = new Chart(c_bar, {
                type: 'bar',
                data: {
                    labels:label_profile,
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
                        data: profile_data_array,
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
