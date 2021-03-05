<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8"> 
<meta name="description" content="GSI Financial delivers business advisory services">
<meta name="keywords" content="Financial, Accounts, Due Diligence, Asset Recovery">
<meta name="author" content="www.gsifinancial.com">
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<html lang="en"> 
@php  header_remove("X-Powered-By"); @endphp
  
<!-- Styles -->
 
<link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">  
<link href="{{ asset('assets/css/myCSS.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">   
<link rel="apple-touch-icon" href="/assets/img/gsi-financial-logo.png"> 

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>  --}}
<script src="{{ asset('/assets/js/sb-admin-2.min.js') }}" defer></script> 
{{-- <script src="{{ asset('/assets/wizard/js/datatables-demo.js') }}" defer></script>   --}}
<script src="{{ asset('/assets/js/myJS.js') }}" defer></script>
<script src="/assets/vendor/jquery/jquery.min.js"></script> 
<script src="/assets/vendor/datatables/bootstrap.bundle.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>



@include('pages.message')
<script type="text/javascript" id="cookieinfo"
    src="/assets/js/cookie.js"   
    data-close-text="Accept All Cookies!">
</script> 

