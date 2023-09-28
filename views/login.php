<?php 
  include 'header.php';
?>
  <center>
    <div class="card" style="max-width: 50rem;margin-top:10rem">
      <div class="card-body">
        <div class="alert alert-danger" role="alert" style="display:none" id="errorLogin">
          
        </div>
        <h5 class="card-title">Login</h5>
          <form>
            <div class="mb-3">
              <label for="loginMail" class="form-label">Name</label>
              <input type="text" class="form-control" id="loginMail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="loginPass" class="form-label">Password</label>
              <input type="password" class="form-control" id="loginPass">
            </div>
          </form>
          <button id="loginBtn" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </center>
<?php 
  include 'footer.php';
?>

<script>
    $(document).ready(function() {
      // Add a click event handler to the button
      $("#loginBtn").click(function() {
        // Change the text of the paragraph when the button is clicked
        let name = $("#loginMail").val();
        let pass = $("#loginPass").val();
        
        // $('#errorLogin').show();
        // $('#errorLogin').delay(1500).fadeOut();

        $.ajax({
          type:"POST",
          data:{name:name, pass:pass},
          url:"http://localhost/login_register/request/login",
          success:function(result){
          // if(result == "False"){
          //   $('#errorLogin').html("<p>Wrong Credentials</p>");
          //   $('#errorLogin').show();
          //   $('#errorLogin').delay(1500).fadeOut();
          // }
           console.log(result);
          
                
        }
        })
        
        
      });
    });
  </script>
