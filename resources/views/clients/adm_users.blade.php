<div class="container-fluid col-lg-12">
    <form method="POST" enctype="multipart/form-data">
        @csrf 
         <div class="col-lg-2 col-md-2 col-sm-2 ">
            <label for="exampleInputEmail1">Email To: </label>
            <div class="form-group ">
                <textarea readonly class="form-control clear" id="email_array_id_input" name="" rows="1"
                    placeholder="you@mail.com" required></textarea> 
            </div> 
            <button type="submit">DONE</button>
        </div>
         <!-- Topbar Search -->
      
            <div class="input-group">  
             <div class="col-lg-5 col-md-10 col-sm-12 ">
              <div class="input-group-append">
                 <input
                  id="searchField" 
                  type="search" 
                  class="form-control bg-light border-0 small " 
                  placeholder="Search by: Salary, Experience, Programming language" 
                  aria-controls="users"
                  aria-describedby="basic-addon2" 
                 > 
              </div> 
              </div>  
            </div> 
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="users" class="table table-bordered" width="100%" cellspacing="0">
                        <div class="d-flex justify-content-center form-row "> 
                            <div class="form-group col-xl-2 col-lg-3 col-md-3 col-sm-4">
                                <select id="dropdown1" class="form-control border border-info">
                                    <option hidden value="">Programming</option>
                                    @foreach ($searchLang as $language)
                                    <option value="{{$language->name}}" aria-controls="users">{{$language->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ml-3 mr-3 mt-2">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                           
                            <div class="form-group col-xl-2 col-lg-3 col-md-3 col-sm-4">
                             <select id="dropdown2" class="form-control border border-info"> 
                                <option disabled="" selected="">Experience</option>
                                <option value="Junior">Junior</option>
                                <option value="Mid">Mid</option>
                                <option value="Senior">Senior</option>
                                <option value="Expert">Expert</option> 
                                <option disabled="" value="...">...</option> 
                            </select>
                            </div> 
                        </div>
                        <thead class="table-dark">
                            <tr>  
                                <th class="w-auto p-3 ">Experience</th>   
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php $i = 0 ?>
                          
                            @foreach ($about2 as $user)   
                            <tr>  
                                  
                                <td>{{$user->level ?? 'Not found'}}</td> 
                            </tr>  
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

</form>
</div>
<style>
     .dataTables_filter, .dataTables_info { display: none; }
 </style>
 
<script>
  
  $(document).ready(function() {
     var table =  $('#users').DataTable();
       $('#dropdown1').on('change', function () {
                      table.columns(2).search( this.value ).draw();
                  } );
       $('#dropdown2').on('change', function () {
          table.columns(5).search( this.value ).draw();
        } );
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
  $(".send_email").click(function(){
      Swal.fire('Sending...')
              Swal.showLoading()
    });


var table = $('#users').DataTable();

$('#dropdown1').keyup(function(){
  table.search($(this).val()).draw();
})

$('#dropdown2').keyup(function(){
  table.search($(this).val()).draw();
})
$('#searchField').keyup(function(){
  table.search($(this).val()).draw();
})

$('#test').click(function() {
    table.search('').draw();
    $('#dropdown1, #dropdown2 , #searchField').val('');
});
 
</script>

