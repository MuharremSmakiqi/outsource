 <!--Sweetalert--> 
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   @if(Session::has('success'))
                <script type="text/javascript">
                  swal("Success", "Your selection was submitted successfully. We will contact you ASAP and range a meeting for you.");
                </script>
   @endif
 
   @if(Session::has('AdminUserUpdate'))
                <script type="text/javascript">
                  swal("Success", "User Status Updated.");
                </script>
   @endif
   @if(Session::has('user_created'))
                <script type="text/javascript">
                  swal("Success", "You can add info here like: Education, work or skills background");
                </script>
   @endif 
      @if(Session::has('startNProgress'))
                <script type="text/javascript"> 
                   NProgress.start();
                </script>
   @endif
   @if(Session::has('interview_email_sent'))
                <script type="text/javascript">
                 NProgress.start();
                  swal("Email Sent!", "Waiting For Candidate Response!");  
                    NProgress.done();
                </script>
   @endif
   @if(Session::has('interview_email_not_sent'))
                <script type="text/javascript">
                  NProgress.start();
                   swal("Failed", "Please provide user email!");  
                     NProgress.done();
                </script>
   @endif
   @if(Session::has('edu-deleted'))
                <script type="text/javascript">
                  swal("Deleted", "Education deleted successfully.");
                </script>
   @endif
   @if(Session::has('edu-added'))
                <script type="text/javascript">
                  swal("Education Added", "Add another!");
                </script>
   @endif
   @if(Session::has('edu-edited'))
                <script type="text/javascript">
                  swal("Education Edited", "Edit another!");
                </script>
   @endif
    @if(Session::has('work-added'))
                <script type="text/javascript">
                  swal("Work Added", "Add another!");
                </script>
   @endif
    @if(Session::has('work-deleted'))
                <script type="text/javascript">
                  swal("Deleted", "Work deleted successfully.");
                </script>
   @endif
     @if(Session::has('skills-added'))
                <script type="text/javascript">
                  swal("Successfully!", "All changes saved");
                </script>
   @endif
     @if(Session::has('feedback'))
                <script type="text/javascript">
                  swal("We value your feedback!", "Thank you for being part of the GSI Outsourcing!");
                </script>
   @endif
     @if(Session::has('skills-deleted'))
                <script type="text/javascript">
                  swal("Deleted", "Selected skills have been deleted!");
                </script>
   @endif
     @if(Session::has('skills-updated'))
                <script type="text/javascript">
                  swal("Success", "Data updated!");
                </script>
   @endif
     @if(Session::has('reactivated'))
                <script type="text/javascript">
                  swal("Success", "Your account is reactivating, it might take up to 24 hours to be ready!");
                </script>
   @endif
     @if(Session::has('skills-error'))
                <script type="text/javascript">
                  swal("Error", "This skill already exists!");
                </script>
   @endif
     @if(Session::has('skills-not-added'))
                <script type="text/javascript">
                  swal("Failed", "Select skill to add.");
                </script>
   @endif
    @if(Session::has('history-deleted'))
                <script type="text/javascript">
                  swal("Deleted", "History deleted");
                </script>
   @endif
    @if(Session::has('list-removed'))
                <script type="text/javascript">
                  swal("Removed", "Contacted list removed");
                </script>
   @endif
   @if(Session::has('ddd'))
                <script type="text/javascript">
                toastr.options.progressBar = true;toastr.options.closeButton = true;
                toastr.success('Email Sent!', 'Waiting For Candidate Response!')

                  //swal("Offer Sent", "Waiting For Best Candidate");
                </script>
   @endif
   @if(Session::has('user_rated'))
                <script type="text/javascript">
                  swal("Rated", "Rating done for the user");
                </script>
   @endif
   @if(Session::has('added_language'))
                <script type="text/javascript">
                    toastr.options.progressBar = true;toastr.options.closeButton = true;
                  toastr.warning('You can add languages as many as you know.', 'LANGUAGE ADDED!');
                </script>
   @endif
   @if(Session::has('email_sent'))
         <script type="text/javascript">
            swal("Success", "We have received your request, we will get back to you as soon as possible.");
          </script>
   @endif
   @if(Session::has('status_change_failed'))
         <script type="text/javascript">
            swal("Failed", "Please set status to change");
          </script>
   @endif
  
