<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
</style>

<div class="container" style="font-family: 'Montserrat', sans-serif; font-size: 16px;">
    <div class="row">
        <p class="lead"> New Contact Form</p>
    </div>
    <div class="row">
        <p class="lead">{{$data['message']}}</p>
        <br>
        <p class="lead">This email is coming from GSI Outsourcing site, below are user information: </p>
        <p class="lead">
            Name: {{$data['name']}}, <br>
            Email: {{$data['email']}} <br>
            Phone: {{$data['phone']}} <br> 
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
