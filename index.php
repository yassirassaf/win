<?php 
include './inc/db.php';
include './inc/form.php';

include './inc/select.php';
include './inc/db_close.php';
?>

<?php include './parts/header.php' ?>


 

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="images/chromatic.png" height="200" width="200">
      <h1 class="display-4 fw-normal">Win with us!!</h1>
      <p class="lead fw-normal">Time Reming for sign up</p>
      <h3 id="countdown"> </h3>
   
      
    </div>
    
  </div>


   <h3>To join the Draw do this:</h3>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">Watch the live on March</li>
  <li class="list-group-item">i will live for one hour it's about questions</li>
  <li class="list-group-item">while the live is open you can sign your name here</li>
  <li class="list-group-item">in the end of the live we will choose one of you!</li>
  <li class="list-group-item">The Winner will get a PS5 </li>
</ul>




<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> 
    <h3> Please enter your information</h3>
  <div class="mb-3">
    <label for="firstname" class="form-label">first name</label>
    <input type="text" name="firstName" class="form-control" id="firstname" value="<?php echo $firstName ?>" >
    <div  class="form-text error"> <?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastname" class="form-label">last name</label>
    <input type="text" name="lastName" class="form-control" id="lastname" value="<?php echo $lastName ?>" >
    <div  class="form-text error"> <?php echo $errors['lastNameError'] ?> </div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div  class="form-text error"> <?php echo $errors['emailError'] ?> </div>

  </div>
  

  <div class="loader-con">
  <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
  
</div>

</div>



  <button type="submit" name="submit" class="btn btn-primary">Send INFO</button>
</form>
</div>
</div>



</div>

<div class="d-grid gap-2 col-6 mx-auto my-5">

<button type="button" id="winner" class="btn btn-primary"  data-bs-toggle="" data-bs-target="#modal">
  Chose The Winner
</button></div>


<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">The Winner
      <div class="modal-header">
      <?php foreach ($users as $user) : ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h1>
        <?php endforeach; ?>
       
      </div>
      <div class="modal-body">

      </div>
     
      </div>
    </div>
  </div>
</div>






  <?php include_once './parts/footer.php';?>
  