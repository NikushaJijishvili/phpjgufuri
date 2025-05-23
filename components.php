
<?php
include('data.php');
?>



<?php


function icons($icons){
    echo '<div class="header container">';
    echo '<div class="header-logo">';
    echo '<a href="index.php"><img src="./assets/mymarket-logo.png" alt=""></a>';
    echo '<h3>ყველა კატეგორია 
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
             stroke-width="1.5" stroke="currentColor" class="size-6">
             <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
    </h3>';
    echo '</div>';

    echo '<div class="header-nav">';
    foreach($icons as $icon){
        echo '<div class="icons">';
        echo '<a href="'.$icon['link'].'"><h1>'.$icon['icon'].' </h1></a>';
        echo '</div>';
    }
if (isset($_SESSION['user'])) {
    echo '<div class="logged-user"><i class="bx bx-user"></i> '.$_SESSION['user'].'</div>';
} else {
    echo '<button type="button" class="login-trigger"><i class="bx bx-user"></i> შესვლა</button>';
}

    echo '</div>';
    echo '</div>';

    echo '
    <div id="loginModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>შესვლა</h2>
        <form action="login.php" method="POST">
          <input type="email" name="email" placeholder="ელ. ფოსტა" required><br>
          <input type="password" name="password" placeholder="პაროლი" required><br>
          <button type="submit">შესვლა</button>
        </form>
        <p>არ გაქვთ ანგარიში? <a href="#" id="showSignup">რეგისტრაცია</a></p>
      </div>
    </div>';

    echo '
    <div id="signupModal" class="modal">
      <div class="modal-content">
        <span class="closeSignup">&times;</span>
        <h2>რეგისტრაცია</h2>
        <form action="register.php" method="POST"  class="login">
          <input type="email" name="email" placeholder="ელ. ფოსტა" required  ><br>
          <input type="password" name="password" placeholder="პაროლი" required  ><br>
          <button type="submit">რეგისტრაცია</button>
        </form>
        <p>უკვე გაქვს ანგარიში? <a href="#" id="showLogin">შესვლა</a></p>
      </div>
    </div>';
}


// function icons($icons){
//     echo '<div class="header container">';

// echo '<div class="header-logo">';
// echo '<a href="index.php"><img src="./assets/mymarket-logo.png" alt=""></a>';
    
//     echo '<h3>ყველა კატეგორია <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">';
//     echo  '<path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />';
//     echo '</svg>';
//     echo '</h3>';
//     echo '</div>';
    
    
//     echo '<div class="header-nav">';
//     foreach($icons as $icon){
//     echo '<div class="icons">';
//     echo '<a href="'.$icon['link'].'"><h1>'.$icon['icon'].' </h1></a>';
//     echo '</div>';
//     }
// echo '<a href="index.php" class="login-button"><i class="bx bx-user"></i> შესვლა</a>';
//     echo '</div>';
//     echo '</div>';

// };

// search section
function search(){
    echo '<div class="search container">';
    echo'<div class="input-search">';
   echo '<input type="search" placeholder="ჩაწერე საძიებო სიტყვა">';
    echo '</div>';
echo '<div class="button">';
   echo  '<a href="#"><i class="bx bx-search"></i> ძებნა</a>';
echo '</div>';



echo '</div>';

};

// end search section


// titles section


function titles($first_titles, $second_titles){
    echo '<div class="titles container">';
foreach($first_titles as $first_title){
    echo '<div class="first-side">';
    echo '<a href="'.$first_title['link'].'">'.$first_title['title'].'</a>';
    echo '</div>';
};
foreach($second_titles as $second_title){
    echo '<div class="second-side">';
       echo '<a href="'.$second_title['link'].'">'.$second_title['title'].'</a>';
    echo '</div>';
}

   echo '</div>';
    


};

function titles2($first_titles, $second_titles){
    echo '<div class="titles container2">';
foreach($first_titles as $first_title){
    echo '<div class="first-side1">';
    echo '<a href="'.$first_title['link'].'">'.$first_title['title'].'</a>';
    echo '</div>';
}
foreach($second_titles as $second_title){
    echo '<div class="second-side2">';
       echo '<a href="'.$second_title['link'].'">'.$second_title['title'].'</a>';
    echo '</div>';
}

   echo '</div>';
    


};
// end titles section



function card($cards){
echo '<div class="cards container">';
foreach($cards as $card){
 echo '<div class="'.$card['class'].'">';
 echo '<a  href="'.$card['link'].'"  target="_blank" ><h3>'.$card['name'].'</h3></a>';
 echo '<img src="'.$card['img'].'" alt="">';
echo '</div>';
}

echo '</div>';
}


function brands($brands){
    echo '<div class="brands container">';
    foreach($brands as $brand){
     echo '<a href="'.$brand['link'].'">';
    echo '<div class="brand-item">';
    echo '<div class="brand-img">';
       echo  '<img src="'.$brand['img'].'" alt="">';
    echo '</div>';
    echo '<div class="brand-text">';
       echo '<h3>'.$brand['name'].'</h3>';
    echo '</div>';
    
    echo '</div>';
    echo '</a>';

    }
    echo '</a>';

};



function vips($super_vips){
   echo '<div class="super-vip-cards container">';
foreach($super_vips as $super_vip){
    echo '<div class="vip-card ">';
    
    echo '<div class="card-img">';
    echo '<img src="'.$super_vip['img'].'" alt="">';
    echo '</div>';
    
    echo '<div class="card-text">';
    echo '<h3 class="title">'.$super_vip['title'].'</h3>';
    echo '<h3 class="price">'.$super_vip['price'].'</h3>';
    echo '</div>';
    
    echo '</div>';
}

echo '</div>';
};



function vips2($vips){
    echo '<div class="super-vip-cards2 container">';
 foreach($vips as $vip){
     echo '<div class="vip-card ">';
     
     echo '<div class="card-img">';
     echo '<img src="'.$vip['img'].'" alt="">';
     echo '</div>';
     
     echo '<div class="card-text">';
     echo '<h3 class="title">'.$vip['title'].'</h3>';
     echo '<h3 class="price">'.$vip['price'].'</h3>';
     echo '</div>';
     
     echo '</div>';
 }
 
 echo '</div>';
 };






 function newItems($news){
    echo '<div class="super-vip-cards2 container">';
 foreach($news as $new){
     echo '<div class="vip-card ">';
     
     echo '<div class="card-img">';
     echo '<img src="'.$new['img'].'" alt="">';
     echo '</div>';
     
     echo '<div class="card-text">';
     echo '<h3 class="title">'.$new['title'].'</h3>';
     echo '<h3 class="price">'.$new['price'].'</h3>';
     echo '</div>';
     
     echo '</div>';
 }
 
 echo '</div>';
 };


function blogs($blogs){

   echo '<div class="blogs container">';

foreach($blogs as $blog){
   echo '<a href="'.$blog['link'].'" target="_blank">';
     echo '<div class="blog-item">';

        echo '<div class="blog-img">
            <img src="'.$blog['img'].'" alt="">
        </div>';
        
        echo '<div class="blog-text">
            <h3>'.$blog['h3'].'</h3>
            <p>'.$blog['p'].'</p>
        </div>';
        
        
        echo '</div>';

    
    echo '</a>';
}
 echo '</div>';

};
 


function lastsection($navigations,$helps,  $categories){
    echo '<div class="footer-section">';

    echo'<div class="navigation">';
    echo '<h1>ნავიგაცია</h1>';
    foreach($navigations as $navigation)
    {
    echo '<a href="'.$navigation['link'].'">'.$navigation['title'].'</a>';
    }
    
    echo '</div>';
    
    
    
    echo '<div class="help">';
    
        echo '<h1>დახმარება</h1>';
        foreach($helps as $help){
        echo '<a href="'.$help['link'].'">'.$help['title'].'</a>';
        }
        
        echo '<div class="icons">';
    echo '<a href="#"><i class="bx bxl-facebook-circle"></i> </a>';
    echo '<a href="#"><i class="bx bxl-instagram" ></i></a>';
    echo '<a href="#"><i class="bx bxl-linkedin" ></i></a>';
   echo '</div>';
    
    
   echo  '</div>';
    
    
    
    echo '<div class="categories">';
        echo '<h1>კატეგორიები</h1>';
        foreach($categories as $category)
        echo '<a href="'.$category['link'].'" target="_blank">'.$category['title'].'</a>';
   
    
    echo '</div>';
    
    
    echo '</div>';
    
    echo '</div>';
};

function last($rules,$logos){
    echo '<div class="footer-section2 container">';
    
    echo '<div class="rules">';
    foreach($rules as $rule)
      echo '<a href="'.$rule['link'].'">'.$rule['title'].'</a>';
      
    echo '</div> ';
    



   echo '<div class="logos">';
   foreach($logos as $logo)
   {
    echo '<a href="'.$logo['link'].'" target="_blank"><img src="'.$logo['img'].'" alt=""></a>';
   }
    echo '</div>  ';
 echo '</div>';
};