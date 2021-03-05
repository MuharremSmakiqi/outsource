@extends('admin.index') 
@section('content') 
<style>
    .dataTables_filter,
    .dataTables_info {
        display: none;
    }
</style>
 
<div class="shadow bg-white rounded">
<div class="row pb-5 px-2">
    <div class="col-lg-12 d-flex justify-content-center pt-5 pb-3">
        <h5 class="text-center"><strong>Feedback Analysis</strong></h5> 
    </div>
    <div class="col-lg-4 shadow-sm pb-3">
        @include('admin.feedback.overall')
    </div>
    <div class="col-lg-4 shadow-sm">
        @include('admin.feedback.profile')
    </div>
    <div class="col-lg-4 shadow-sm">
        @include('admin.feedback.qualification')
    </div>
</div>
 
<div class="row">   
   <div class="col-lg-6 float-left"> 
       <table class="table table-bordered "> 
            @if(!$feedbackCritical->isEmpty())
            <caption>      
                <a type="button" class="btn btn-sm badge-light " data-toggle="modal" data-target=".critical-modal">See all critical comments <i class="far fa-hand-point-right"></i></a> 
            </caption>
            @endif
                <thead>
                    <tr role="row">
                        <th>
                            Critical Comments with <i class="fas fa-star  text-danger"></i> or <i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i> Star <i class="far fa-hand-point-down pl-1"></i>
                            @if(!$feedbackCritical->isEmpty())
                            <div class="float-right">
                                    <a type="button" class="btn btn-sm badge-light " data-toggle="modal" data-target=".critical-modal">See all critical comments <i class="far fa-hand-point-right"></i></a> 
                            </div>
                            @endif
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse  ($feedbackCritical as $feedback)
                
                    <tr>
                        <td style="padding: 0rem !important">  
                            <ul class="list-unstyled">
                            <li class="media pt-2">
                                <div class="countStar">
                                    @if($feedback->overall == 1 || $feedback->profile == 1 || $feedback->skillsQ == 1)
                                       <img src="./assets/img/1Star.svg" class="mr-3 rounded bg-cover " alt="..." width="20px">
                                    @else
                                      <img src="./assets/img/2Star.svg" class="mr-3 rounded bg-cover " alt="..." width="20px">
                                    @endif  
                                </div>
                                <div class="media-body border-left">
                                    <p class="text-muted ml-2">
                                        <small class="text-danger" style="font-size: 20px;">
                                            {{' • ' }}
                                        </small> 
                                        {{$feedback->comments}} 
                                    </p> 
                                    <small class="ml-2 badge badge-light">
                                        <i class="fas fa-user-circle text-info"></i> {{$feedback->name}} 
                                        <i class="fas fa-envelope text-info pl-3"></i> {{$feedback->email}}  
                                        <i class="fas fa-calendar-alt text-info pl-3"></i> {{$feedback->created_at}}
                                    </small>
                                </div> 
                                <div class="float-right">
                                        <small class="ml-2 badge badge-light">{{$feedback->id}}</small>
                                </div> 
                                @empty
                                <tr>
                                <div class="alert alert-primary" role="alert">
                                    No comments posted yet. 
                                </div> 
                                </tr> 
                            </li>  
                            </ul>
                        </td>
                    </tr>
                    @endforelse 
                </tbody> 
        </table>
    </div>
     
    <div class="col-lg-6 float-right"> 
        <table class="table table-bordered"> 
            @if(!$feedback2->isEmpty())
            <caption>      
                <a type="button" class="btn btn-sm badge-light " data-toggle="modal" data-target=".allComments-modal">See All Comments <i class="far fa-hand-point-right"></i></a> 
            </caption>
            @endif
                <thead>
                    <tr role="row">
                        <th>
                           Other comments with <i class="fas fa-star  text-success"></i><i class="fas fa-star text-success"></i><i class="fas fa-star text-success"></i> or higher Star <i class="far fa-hand-point-down pl-1"></i>
                            @if(!$feedback2->isEmpty())
                            <div class="float-right">
                                    <a type="button" class="btn btn-sm badge-light " data-toggle="modal" data-target=".allComments-modal">See All Comments <i class="far fa-hand-point-right"></i></a> 
                            </div>
                            @endif
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse  ($feedback2 as $feedback) 
                    <tr>
                        <td style="padding: 0rem !important">  
                            <ul class="list-unstyled">
                            <li class="media pt-2">
                                <img src="./assets/img/comments1.svg" class="mr-3 rounded bg-cover " alt="..." width="40px">
                                <div class="media-body border-left">
                                    <p class="text-muted ml-2">
                                        <small class="text-success" style="font-size: 20px;">
                                            {{' • ' }}
                                        </small> 
                                        {{$feedback->comments}} 
                                    </p> 
                                    <small class="ml-2 badge badge-light">Posted by: {{$feedback->name}}</small>
                                </div> 
                                <div class="float-right">
                                        <small class="ml-2 badge badge-light">{{$feedback->id}}</small>
                                </div> 
                                @empty
                                <tr>
                                <div class="alert alert-primary" role="alert">
                                    No comments posted yet. 
                                </div> 
                                </tr> 
                            </li>  
                            </ul>
                        </td>
                    </tr>
                    @endforelse 
                </tbody>
        </table> 
    </div> 
</div>
 
</div>

<!-- Extra large modal -->
<div class="modal fade allComments-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
     <div class="modal-header"> 
        <h5 class="modal-title " id="exampleModalLabel">Comments are shown from newest to oldest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="list-unstyled">
              @foreach ($feedback3 as $feedback) 
                    <ul class="list-unstyled py-2 px-3 border-bottom">
                    <li class="media pt-2">
                        <img src="./assets/img/comments.svg" class="mr-3 rounded bg-cover " alt="..." width="40px">
                        <div class="media-body border-left">
                            <p class="text-muted ml-2">
                                <small class="text-primary" style="font-size: 20px;">
                                    {{' • ' }}
                                </small> 
                                {{$feedback->comments}} 
                            </p> 
                            <small class="ml-2 badge badge-light">Posted by: {{$feedback->name}}</small>
                        </div> 
                        <div class="float-right">
                                <small class="ml-2 badge badge-light">{{$feedback->id}}</small>
                        </div>
                    </li>  
                    </ul> 
            @endforeach
    </div>
  </div>
</div>


<!-- Extra large modal with critical coments -->
<div class="modal fade critical-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
     <div class="modal-header"> 
        <h5 class="modal-title " id="exampleModalLabel">All critical comments are shown from newest to oldest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="list-unstyled">
              @foreach ($feedbackCriticalModal as $feedback) 
                    <ul class="list-unstyled py-2 px-3 border-bottom">
                    <li class="media pt-2">
                           @if($feedback->overall == 1 || $feedback->profile == 1 || $feedback->skillsQ == 1)
                                <img src="./assets/img/1Star.svg" class="mr-3 rounded bg-cover " alt="..." width="20px">
                                @else
                                <img src="./assets/img/2Star.svg" class="mr-3 rounded bg-cover " alt="..." width="20px">
                                @endif
                        <div class="media-body border-left">
                            <p class="text-muted ml-2">
                                <small class="text-danger" style="font-size: 20px;">
                                    {{' • ' }}
                                </small> 
                                {{$feedback->comments}} 
                            </p> 
                            <small class="ml-2 badge badge-light">
                                <i class="fas fa-user-circle text-info"></i> {{$feedback->name}} 
                                <i class="fas fa-envelope text-info pl-3"></i> {{$feedback->email}}  
                                <i class="fas fa-calendar-alt text-info pl-3"></i> {{$feedback->created_at}}
                            </small>
                        </div> 
                        <div class="float-right">
                                <small class="ml-2 badge badge-light">{{$feedback->id}}</small>
                        </div>
                    </li>  
                    </ul> 
            @endforeach
    </div>
  </div>
</div>
@endsection 