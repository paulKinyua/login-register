<?php 
    include 'header.php';
?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Register</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">View</button>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" href="./logout" type="button" role="tab" aria-selected="false">Logout</a>
  </li>
 
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    <center>
        <div class="card" style="max-width: 70rem;margin-top:2rem">
            <div class="card-body">
                <h5 class="card-title">Register</h5>
                <form>
                    <div class="mb-3">
                        <label for="loginMail" class="form-label">Name</label>
                        <input type="text" class="form-control" id="loginMail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="loginPass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPass">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </center>
  </div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><button type="submit" class="btn btn-secondary">Edit</button></td>
      <td><button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><button type="submit" class="btn btn-secondary">Edit</button></td>
      <td><button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>
    
  </tbody>
</table>
  </div>
</div>

<?php 
    include 'footer.php';
?>
