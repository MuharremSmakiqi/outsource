<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="icon" href="{{ url('public/image/w3path-favicon.png') }}" sizes="32x32" />
  <style>
   .container{
    padding: 0.5%;
   } 
</style>
</head>
<body>
 
 <nav class="navbar justify-content-around" style="background-color: #ffffff;">
    @auth
    <a class="navbar-brand" href="/">
        <img src="/assets/img/gsi-financial-logo.png" width="174" height="60" class="d-inline-block align-top" alt=""> 
        <h5 style="color:#5e6873; letter-spacing: 7px;">  outsourcing </h5>
    </a> 
    @endauth 
</nav>  
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <h4><a href="/user">My Profile</a></h4>
            </div>
        </div>
        <hr />
      
        <form method="POST" enctype="multipart/form-data" id="upload_image_form" action="javascript:void(0)" >
              @csrf    
            <div class="row">
                <div class="col-md-12 mb-2">
                     @php
                        $img = DB::table('images')->latest()
                        ->where('user_id', '=', Auth::user()->id)->value('image'); 
                            // $img2 = substr($img, 14); 
                            //this method skips 14 first characters
                        @endphp
                        <img class="img-responsive " id="image_preview_container" style="height: 150px; width: 150px; border-radius: 50%;"
                        src="<?php echo asset("uploads/$img")?>" 
                        alt="User Image" onerror="this.onerror=null;this.src='./assets/img/image-preview.svg'"> 
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                  
                  
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>     
        </form>
    </div>
</body>
<script type="text/javascript">
     
    $(document).ready(function (e) {
  
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 
        $('#image').change(function(){
          
            let reader = new FileReader();
            reader.onload = (e) => { 
              $('#image_preview_container').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
 
        });
 
        $('#upload_image_form').submit(function(e) {
            e.preventDefault(); 
            var formData = new FormData(this);
 
            $.ajax({
                type:'POST',
                url: "{{ url('save-photo')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => { 
                    this.reset();
                    alert('Image has been uploaded successfully');
                },
                error: function(data){
                    console.log(data);
                    alert('Failed, Picture format accepted: jpeg, png, jpg, svg. Maximum 2mb memory');
                }
            });
        });
    });
 
</script>
</html>