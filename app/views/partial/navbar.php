<?php 
  $currentUser = '';
?>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Manage User</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/manage_user">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/manage_user/listUser">View All User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/manage_user/new-user">Add New User</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php if ($currentUser) { ?> 
          <li class="nav-item">
            <a href="/manage_user/logout" class="nav-link">Logout</a>
          </li>
          <?php } else { ?> 
          <li class="nav-item">
            <a href="/manage_user/login" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="/manage_user/register" class="nav-link">Register</a>
          </li>
        <?php } ?> 
      </ul>
    </div>
  </div>
</nav>