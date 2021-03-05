@extends('layouts.app') @section('content') 
<title>Case Studies</title>   
<div class="customPad bg-light text-center pb-3"> 
  <p class="text-primary" style="font-size: 20px; font-size: 15px; padding-top: 3%">
    <a href="/" style="font-weight: 500"><b>Home</b></a> 
    <a class="px-2 "><small><i class="fas fa-chevron-right"></i></small></a> 
    <a ><b>Case Studies</b></a> 
  </p>  
</div>   
<div class="container border">
        <div class="row ">
             <div class="col-md-3 border-right pt-5">
                <nav class="nav flex-column">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <h4 class="text-left d-none d-md-block pl-3">Case studies</h4> 
                    <a class="nav-item nav-link text-left active" id="it-tab" data-toggle="tab" href="#it" role="tab" aria-controls="it" aria-selected="true">IT Case Study</a>
                    <a class="nav-item nav-link text-left" id="financial-tab" data-toggle="tab" href="#financial" role="tab" aria-controls="financial" aria-selected="false">Financial Case Study</a>
                    <a class="nav-item nav-link text-left" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false">Design Case Study</a>
                    <a class="nav-item nav-link text-left" id="administration-tab" data-toggle="tab" href="#administration" role="tab" aria-controls="administration" aria-selected="false">Administration Case Study</a>  
                  </div>
                </nav>
            </div>
            <div class="col-md-9 px-5 py-5">
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane active" id="it" role="tabpanel" aria-labelledby="it-tab">
                       @include('pages.cases.it-case') 
                    </div>
                    <div class="tab-pane fade" id="financial" role="tabpanel" aria-labelledby="financial-tab" >
                        @include('pages.cases.accounts-case')   
                    </div>
                    <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                       @include('pages.cases.design-case') 
                    </div>
                    <div class="tab-pane fade" id="administration" role="tabpanel" aria-labelledby="administration-tab">
                         @include('pages.cases.admin-case') 
                    </div> 
                  </div>
                </div>
            </div>
        </div>
    </div> 
<br>
@endsection

<script src="{{ asset('/assets/js/myJS.js') }}" defer></script> 