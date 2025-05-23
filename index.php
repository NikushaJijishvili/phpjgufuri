<?php
include('components.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>მეორადი და ახალი ნივთების ყიდვა-გაყიდვის პლატფორმა Mymarket</title>
    <link rel="shortcut icon" href="./assets/icon2.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://fonts.cdnfonts.com/css/noto-serif-georgian" rel="stylesheet">
</head>
<body>


<!-- header section -->
    <header>
<?php
icons($icons);
?>


<div class="header" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">




<?php session_start(); ?>
<?php if (isset($_SESSION['success'])): ?>
    <div class="popup success"><?= $_SESSION['success'] ?></div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="popup error"><?= $_SESSION['error'] ?></div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>
<div class="burger" id="burger">
  ☰
</div>

    </header>

<section >
  
<?php
titles($first_titles, $second_titles);
titles2($first_titles, $second_titles);
?>

</section>
<!-- end header section -->


<!-- search section  -->
<?php  search(); ?>
    
 <!-- end search section -->



 <!-- cards section -->


<?php

 card($cards);

 ?>
 

 <!-- end card section -->


 



<!-- brands section -->
  <?php brands($brands); ?>

  <!-- End brands section -->




<!-- super vips section -->

<?php
echo  '<div class="super-vips-title container">';
echo '<i class="bx bxs-rocket"></i>';
echo '<h2>Super Vip</h2>';
echo '</div>';
  
vips($super_vips);



?>





<?php
echo  '<div class="super-vips-title2 container">';
echo '<i class="bx bxs-star" ></i>';
echo '<h2>Vip</h2>';
echo '</div>';
vips2($vips);

?>






<?php
echo  '<div class="super-vips-title3 container">';
echo '<h2>ახალი დამატებული</h2>';
echo '</div>';
newItems($news);
?>


<?php
echo  '<div class="blogs-title container">';
echo '<h2>ბლოგი</h2>';
echo '</div>';
blogs($blogs)
?>



<footer>


<?php
lastsection($navigations,$helps,$categories);
last($rules,$logos);
?>


</footer>



<script>
document.addEventListener("DOMContentLoaded", function () {
  const loginModal = document.getElementById("loginModal");
  const signupModal = document.getElementById("signupModal");

  const openLogin = document.querySelector(".login-trigger");
  const closeLogin = document.querySelector(".close");
  const closeSignup = document.querySelector(".closeSignup");

  const showSignup = document.getElementById("showSignup");
  const showLogin = document.getElementById("showLogin");

  openLogin.addEventListener("click", () => loginModal.style.display = "block");
  closeLogin.addEventListener("click", () => loginModal.style.display = "none");
  closeSignup.addEventListener("click", () => signupModal.style.display = "none");

  showSignup.addEventListener("click", (e) => {
    e.preventDefault();
    loginModal.style.display = "none";
    signupModal.style.display = "block";
  });

  showLogin.addEventListener("click", (e) => {
    e.preventDefault();
    signupModal.style.display = "none";
    loginModal.style.display = "block";
  });

  window.addEventListener("click", (e) => {
    if (e.target == loginModal) loginModal.style.display = "none";
    if (e.target == signupModal) signupModal.style.display = "none";
  });
});
const burger = document.getElementById('burger');
const menu = document.querySelector('.container2');
const menu2 = document.querySelector('.titles')

burger.addEventListener('click', () => {
  menu.style.display = "block";
  menu2.style.display = "none";
});

</script>



</body>
</html>


