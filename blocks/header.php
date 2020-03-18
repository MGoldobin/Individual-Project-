
<?php session_start(); ?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a class="name" href="Main.php">All message</a></h5>
  <nav class="my-2 my-md-0 mr-md-3">
  <?php 
    if(isset($_SESSION['login'])):
  ?>
  <a class="p-2 text-dark" href="message.php" ><img src="img/chat.svg"></a>
  <?php else: ?>
    <a class="p-2 text-dark" href="signin.php" ><img src="img/chat.svg"></a>
  <?php endif; ?>  
    <a class="p-2 text-dark" href="https://vk.com/club186677861" target="_blank" ><img src="img/vk.svg"></a>
    <a class="p-2 text-dark" href="https://www.instagram.com/_pet_ro/?hl=ru" target="_blank" ;><img src="img/instagram.svg"></a>
  </nav>
  <?php 
    if(isset($_SESSION['login'])):
  ?>
  <a class="btn btn-outline-primary" href="profile.php">Profile</a>
  <?php else: ?>
    <a class="btn btn-outline-primary" href="signin.php">Sign Up/Sign In</a>
  <?php endif; ?>  
</div> 