<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 6 Ajax Image Upload Example Tutorial - XpertPhp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
 
</head>
<body>
<div class="container pt-5 mt-5">
  <form id="form" enctype="multipart/form-data" method="post">
   <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
    <div class="row">
      <div class="col-md-12"> 
        <input type="number" name="userID" class="form-control" id="userID" value="1" required>
      </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </div>            
  </form> 
</div>
</body>
</html> 
<script> 
  $(document).ready(function (e) { 
        $('#form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('image')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
					if(data.success == true){
						this.reset(); 
                         toastr.success("SHORTLISTED");
                        console.log(data);
					}
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    }); 
</script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



