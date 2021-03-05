<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
</style>

<div class="container" style="font-family: 'Montserrat', sans-serif; font-size: 16px;">
    <div class="row">
        <p class="lead"> New Email Call Request</p>
    </div>
    <div class="row"> 
        <br>
        <p class="lead">This user requested to contact him by email: </p>
        <p class="lead">Email is coming from GSI Outsourcing site, below are user information: </p>
        <p class="lead">
            Name: {{$data['name']}}, <br>
            Company: {{$data['companyName']}} <br>
            Email: {{$data['email']}} <br> 
        </p>
        <br><br> 
    </div>
    <br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="d-flex justify-content-center">
            <small class="text-muted">Copyright © 2020, All Right Reserved GSI Outsourcing</small>
        </div>
    </div>
</div>
