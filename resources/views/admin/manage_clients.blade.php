

<style>
     
    @import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
    .row-section{float:left; width:100%; background: #ffffff;  /* fallback for old browsers */
  
    }
    .row-section h2{float:left; width:100%; color:#fff; margin-bottom:30px; font-size: 14px;}
    .row-section h2 span{font-family: 'Libre Baskerville', serif; display:block; font-size:45px; text-transform:none; margin-bottom:20px; margin-top:30px;font-weight:700;}
    .row-section h2 a{color:#d2abce;}
    .row-section .row-block{background:#fff; padding:20px; margin-bottom:10px;}
    .row-section .row-block ul{margin:0; padding:0;}
    .row-section .row-block ul li{list-style:none; margin-bottom:10px;}
    .row-section .row-block ul li:last-child{margin-bottom:0;}
    .row-section .row-block ul li:hover{cursor:grabbing;}
    .row-section .row-block .media{border:1px solid #d5dbdd; padding:5px 20px; border-radius: 5px; box-shadow:0px 2px 1px rgba(0,0,0,0.04); background:#fff;}
    .row-section .media .media-left img{width:55px;}
    .row-section .media .media-body p{padding: 0 15px; font-size:14px;}
    .row-section .media .media-body h4 {color: #1E2C41; font-size: 18px; font-weight: 600; margin-bottom: 0; padding-left: 14px; margin-top:12px;}
    .btn-default{background:#1E2C41; color:#fff; border-radius:30px; border:none; font-size:14px;}
    .accord .accord1{
    padding: 0 40px 0 20px;
    background-color: transparent;
    border-color: #ddd;
    box-shadow: 0 1px 4px 0 rgba(204,204,204,.75);
    font-family: 'Poppins',sans-serif;
    font-size: 24px;
    }
    .accord .name{
    text-decoration: none;
    }
    .accord p{
    font-size: 17px;
    font-family: 'Poppins',sans-serif;
    color: #000;
    align-items: flex-end;
    }
    .accord .panel-heading{
    background-color: #f5f5f5;
    }
    .accord .fa{
    line-height: 3;
    }
    .accord .accord2{
    padding: 0 40px 0 20px;
    background-color: transparent;
    border-color: #ddd;
    box-shadow: 0 1px 4px 0 rgba(204,204,204,.75);
    font-family: 'Poppins',sans-serif;
    font-size: 24px;
    }
    .accord .accord3{
    padding: 0 40px 0 20px;
    background-color: transparent;
    border-color: #ddd;
    box-shadow: 0 1px 4px 0 rgba(204,204,204,.75);
    font-family: 'Poppins',sans-serif;
    font-size: 24px;
    }
 
    input:read-only, 
    textarea:read-only,
    [contenteditable]:read-only {
    pointer-events: none;
    background-color: #f0afaa !important;
    color: #fff;
    } 
</style>
<form method="POST" enctype="multipart/form-data">
@csrf
@include('pages.message') 
<div class="container-fluid mb-5">   
    <div class="col"> 
        <div class="form-group ">
            <textarea readonly class="form-control clear" id="email_array_id_input" name="" rows="1"
                placeholder="" required>Email To: 
            </textarea>
        </div> 
    </div> 
    <div class="row mb-5"> 
        <div class="card-body scrollDIV ">  
        <div class="table-responsive" > 
            <table id="adminTable" class="table" width="100%" cellspacing="0" > 
                <thead hidden>
                    <tr >
                        <th class="w-auto" style="border: none"></th>
                    </tr>
                </thead>
                <tbody id="" >  
                    @foreach ($users as $u)   
                    @foreach ($pending as $p) 
                        @if ($u->id == $p->user_id)
                             <tr> 
                                <td style=" border-top: 0;">
                                    <div class="card b-1 mb-1 ">
                                        <a class="btn" data-toggle="collapse" href="#collapse-{{$u->id ?? '404'}}" aria-expanded="false" aria-controls="collapse-{{$u->id ?? '404'}}">  
                                        <div class="media card-body">
                                            <div class="media-left pr-12">
                                                <div class="row">
                                                    <img class="avatar avatar-xl  " src="/assets/img/user-avatar.svg" alt="...">  
                                                    <small class="ml-4 mt-3">{{$u->name ?? 'Not found'}}</small> 
                                                </div>
                                            </div> 
                                            <div class="media-body d-flex justify-content-center  pt-2">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="mb-1 col-12 d-flex justify-content-center"> 
                                                        <span class="badge badge-danger">{{$p->count}}</span>
                                                    </div> 
                                                    <div class="mb-1 col-12 d-flex justify-content-center">
                                                        <i class="fas fa-caret-down  text-danger fa-2x "></i> 
                                                    </div>
                                                </div> 
                                                </div>
                                            <div class="mx-auto">  
                                            </div>
                                            <div class="media-right text-right d-none d-md-block">
                                                <p class="fs-14 text-fade mt-3"><i class="far fa-envelope"></i>
                                                {{$u->email ?? 'Not found'}} ID:{{$u->id ?? 'Not found'}}
                                                </p>  
                                            </div>
                                        </div>
                                    </a>  
                                        <footer class="">  
                                            
                                                <div class="collapse multi-collapse" id="collapse-{{$u->id ?? '404'}}"> 
                                                <table class="table table-bordered "> 
                                                    <thead>
                                                        <tr>  
                                                        <th scope="col"><i class="fas fa-check-circle fa-2x"></i></th>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th> 
                                                        <th scope="col">Monthly</th>
                                                        <th scope="col">Level</th>
                                                        <th scope="col">Services</th>
                                                        <th scope="col">Email</th> 
                                                        </tr>
                                                    </thead>
                                                    <tbody> 
                                                        
                                                        @foreach ($interes as $booked) 
                                                            @php
                                                            $info = DB::table('abouts')
                                                            ->where('user_id', '=', $booked->p_id)  
                                                            ->get(); 

                                                            $infoName = DB::table('users')
                                                            ->where('id', '=', $booked->p_id)  
                                                            ->get(); 
                                                            @endphp    
                                                                @foreach ($info as $info)  
                                                                @foreach ($infoName as $infoName)  
                                                                <tr> 
                                                                    @if ($u->id == $booked->user_id )   
                                                                    <td><input type="checkbox" value="{{$infoName->email}}" name="email[]" style="width: 20px; height: 22px;"></td> 
                                                                        <td>{{$booked->p_id ?? 'Not found'}}</td>
                                                                        <td>{{$infoName->name ?? 'Not found'}}</td> 
                                                                        <td>{{$info->monthly ?? 'Not found'}} €</td> 
                                                                        <td>{{$info->level ?? 'Not found'}}</td> 
                                                                        <td>{{$info->servicesM ?? 'Not found'}}</td> 
                                                                       <td>{{$infoName->email ?? 'Not found'}} </td>  
                                                                    @endif 
                                                                </tr>
                                                                @endforeach  
                                                                @endforeach  
                                                        @endforeach  
                                                    </tbody>
                                                </table>   
                                                
                                                </div> 
                                        
                                        </footer>
                                    </div>
                                </td>
                            </tr>   
                        @endif
                    @endforeach
                    @endforeach  
                    <br>
                </tbody>
            </table>
        </div> 
        </div> 
        
        <div class="col-md-3 col-sm-3 pt-5"> 
                <label for="exampleInputEmail1">Compose Email</label>
                <div class="form-group ">
                    <input required type="text" class="form-control" id="title" name="subject" placeholder="Subject:" 
                        onkeyup="manage(this)">
                </div>
                <div class="form-group ">
                    <textarea class="form-control" id="description" name="message" rows="5"
                        placeholder="" required onkeyup="manage(this)"
                        id="txt1">Dear candidate we are happy to invite yor for a job interview...</textarea>
                </div>
              
                <div class="form-group d-flex justify-content-center actions">
                    <button role="button" class="btn gsic send_email " id="btSend" data-toggle="tooltip"
                        title="Send E-mail" type="submit" disabled="disabled" name="action" value="send_mail">Send
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
       
        <div style="height: 350px"></div> </div>
    </div>  
</div>   
</form>
<script>
    $(document).ready(function() {
    $('#adminTable').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false });
    }); 

    $(function() {
    $(":checkbox").change(function() {
      var email_array = [];
      email_array  = $(":checkbox:checked").map(function() { return $(this).val(); }).get();
      $("#email_array_id_input").val(email_array).get();
     //console.log(email_array);
    });
  });

    function manage(txt) {
          var bt = document.getElementById('btSend');
          var title = document.getElementById('title');
          var description = document.getElementById('description');
          if (title.value != '' && description.value != '') {
              bt.disabled = false;
          }
          else {
              bt.disabled = true;
          }
      }
</script>
 
