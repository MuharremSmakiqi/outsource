 <div>
    <p class="text-center pt-3">
       <strong>3. How easy was it to enter your skills and qualifications?</strong>
    </p>
    <div class="chart-responsive">
       <canvas id="qualification_canvas_id" style=""></canvas>
    </div>
</div> 
 
<script>
    //How easy was it to enter your skills and qualifications?
    var url_qualification_data = "{{url('/qualificationBar')}}";
    var qualification_data_array = new Array();
    var label_qualification = new Array();
    $(document).ready(function(){
        $.get(url_qualification_data, function(response){
            response.forEach(function(data){
                qualification_data_array.push(data.count);
                label_qualification.push(data.skillsQ + name);
            });
            var c_bar = document.getElementById("qualification_canvas_id").getContext('2d');
            var cbar = new Chart(c_bar, {
                type: 'bar',
                data: {
                    labels:label_qualification,
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
                        data: qualification_data_array,
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
