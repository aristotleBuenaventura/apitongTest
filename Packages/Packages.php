<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<title>Packages</title>

<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>

<!-- Navbar  -->  
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
  <div class="container">
    <img src ="apitonglogo.png" class="img-responsive logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item nav-a">
          <a class="nav-link" href="../HomePage/index.php">Home</a>
      </li>

      <li class="nav-item nav-a">
          <a class="nav-link" href="../Packages/Packages.php">Packages</a>
      </li>

      <li class="nav-item nav-a">
        <a class="nav-link" href="../Inquiry/Inquiry.php">Inquiry</a>
    </li>

      <li class="nav-item nav-a">
          <a class="nav-link" href="../About/About.php">About Us</a>
      </li>

      <?php if(isset($_SESSION['email']))
      {
      ?>
      <li class="nav-item nav-a">
        <a class="nav-link" href="../Profile/profile.php">User Profile</a>
      </li>
        <li class="nav-item nav-a">
          <a class="nav-link" href="../Logout/Logout.php">Log out</a>
        </li>
      <?php }else{ ?>
        

      <li class="nav-item nav-a">
        <a class="nav-link" href="../Login/loginBackEnd.php">Log in</a>
      </li>
      <?php } ?>
      

      


      <!-- <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">
        <div class="input-group mr-0"> 
          <a href="../Logout.html"><button name="submit" class="btn">Logout</button></a>
        </div>
      </ul> -->
    </div>
  </div>
</nav>


<!-- Tab links -->
<div class="container d-flex justify-content-center">
  <div class="tab my-4">
    <button class="tablinks" onclick="openCity(event, 'Aniv')" id="defaultOpen">Anniversary</button>
    <button class="tablinks" onclick="openCity(event, 'Birth')">Birthday</button>
    <button class="tablinks" onclick="openCity(event, 'Debut')">Debut</button>
    <button class="tablinks" onclick="openCity(event, 'Prom')">Promenade</button>
    <button class="tablinks" onclick="openCity(event, 'Wed')">Wedding</button>
  </div>
</div>


<div id="Aniv" class="tabcontent">
  <div class="header container-fluid img-fluid"id="anniversary">
    <div class="container">
      <div class="description">
          <p>Anniversary</p>
          <a href="../Inquiry/Inquiry.html"><button class="btn btn-dark btn-lg">Reserve now</button></a>
      </div>
    </div>
  </div>

<div class="container mb-5">
  <div class="container features">
    <div class="row content-text">
        <div class="col">
            <h3 class="feature-title text-light">Real love stories never have endings.</h3>
            <div class="container text-light">
                <p>Anniversaries are wonderful, magical, celebratory occasions. Anniversaries 
                  are opportunities for recollections of the year gone by and positive reflections 
                  for the year ahead. This past year has been hard but a happy and successful year 
                  in some many ways. It has been defined by a kaleidoscope of happy memories, 
                  supportive friendships and enduring relationships. We look forward to another 
                  wonderful year, a time to build and strengthen forged relationships even further; 
                  a time to create and cherish even more shared memories and a time filled with dreams 
                  that are brought ever closer and milestones whatever they may be achieved. 
                </p>
            </div>
        </div>  
        <div class="col">
            <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link accordionLink" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Details
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Capacity: Up to 1,250 guests<br>
                        Area: 1, 072 square meters
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed accordionLink" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Request for Proposal
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      If you require any further information or wish to guarantee your place
                      please call us at +639178883334 
                      or 394-7896.
                    </div>
                    <div class="card-body">Request for Proposal.</div>
                        
                    
                  </div>
                </div>
              </div>
        </div>  
    </div>
    
</div>
</div>

<div class="container-fluid bg-light">

  <div class="container features">
    <div class="row">
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
          <input Name="" type="Image" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F9%2F2017%2F06%2FHD-201402-r-butter-basted-rib-eye-steak.jpg" class="img-size">
      </div>
  
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
    <input Name="" type="Image" src="https://static.onecms.io/wp-content/uploads/sites/9/2016/03/HD-201410-r-ricotta-crepes-with-honey-walnuts-and-rose.jpg" class="img-size">
      </div>
  
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
    <input Name="" type="Image" src="https://www.askideas.com/media/06/Happy-Anniversary-HD-Wallpaper.jpg" class="img-size">
      </div>
  
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
    <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894256941268860980/Kalupol-Chicken-d5c3376.jpg" class="img-size">
      </div>
  
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
    <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894257583391653909/LTO_California-Pizza-Kitchen_Mothers-Day-offer_900x600.jpg" class="img-size">
      </div>
  
    <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
    <input Name="" type="Image" src="https://static.onecms.io/wp-content/uploads/sites/9/2014/12/HD-fw200611_almondduck.jpg" class="img-size">
      </div>
  
  
  </div>
  </div>
</div>
</div>



<div id="Birth" class="tabcontent">
  <div class="header container-fluid img-fluid"id="birthday">
    <div class="container">
      <div class="description">
          <p>Birthday</p>
          <a href="../Inquiry/Inquiry.html"><button class="btn btn-dark btn-lg">Reserve now</button></a>
      </div>
    </div>
  </div>

<div class="container mb-5">
  <div class="container features">
    <div class="row content-text">
        <div class="col">
            <h3 class="feature-title text-light">Hope all your birthday wishes come true!</h3>
            <div class="container text-light">
                <p>Your birthday is a day to celebrate the time you have spent on this earth. 
                  You have successfully managed to live one more year, gained a lot of experiences, 
                  created memories, learned new things, met new people and many more things might 
                  have changed from your last birthday. It???s time you spend some quality time with
                   your friends and family and make a plan to achieve more in the upcoming year. 
                </p>
            </div>
        </div>  
        <div class="col">
            <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link accordionLink" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Details
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Capacity: Up to 1,250 guests<br>
                        Area: 1, 072 square meters
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed accordionLink" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Request for Proposal
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      If you require any further information or wish to guarantee your place
                      please call us at +639178883334 
                      or 394-7896.
                    </div>
                    <div class="card-body">Request for Proposal.</div>
                        
                    
                  </div>
                </div>
              </div>
        </div>  
    </div>
    
</div>
</div>

<div class="container-fluid bg-light">

  <div class="container features">
    <div class="row">
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894259241978847342/maxresdefault.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894259451111018608/birthday_dinner_ideas_ina-garten-baked-pasta-tomatoes-eggplant-recipe.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894259679612506122/01_everything_bagel_pigs_in_blanket_0.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894260010798964746/kids-party-.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://hips.hearstapps.com/rbk.h-cdn.co/assets/17/21/pesto-parmesan-pastry-straws_002.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Mini-Burgers-with-the-Works_EXPS_SDAM19_35357_C12_06_4b-1.jpg?fit=700,700" class="img-size">
          </div>
  
  
  </div>
  </div>
</div>
</div>

<div id="Debut" class="tabcontent">
  <div class="header container-fluid img-fluid"id="debut">
    <div class="container">
      <div class="description">
          <p>Debut</p>
          <a href="../Inquiry/Inquiry.html"><button class="btn btn-dark btn-lg">Reserve now</button></a>
      </div>
    </div>
  </div>

<div class="container mb-5">
  <div class="container features">
    <div class="row content-text">
        <div class="col">
            <h3 class="feature-title text-light">18 doesn't feel much different, but it sure is fun to say!</h3>
            <div class="container text-light">
                <p>A debut is more than just a birthday celebration; it???s a young 
                  woman???s formal introduction into society. In many ways, it???s one 
                  of the most important events in a young lady???s life, second only 
                  to her wedding.
                </p>
                <p>
                  Of course, in older days, the debut served as an opportunity for a 
                  young woman to formally meet the sons of wealthy or influential 
                  families for marriage prospects. Thankfully, young women today have 
                  more options. You???ve done everything you could to give your daughter
                   everything she needs to make her own choices in life ??? from her 
                   education to her opportunities, to growing up in a safe and nurturing 
                   environment.
                </p>
                <p>
                  To doting parents, a young lady???s debut signifies that bittersweet moment 
                  when they have to let her walk ??? or dance ??? on her own two feet as a 
                  beautiful, capable young woman. It???s not just an evening of food and 
                  entertainment ??? it???s an opportunity for her family and friends to express
                   their love for her with advice, guidance and inspiration. It???s also an 
                   affirmation of her own unique worth as an adult and an individual.
                </p>
                <p>
                  To take a phrase from the unforgettable slogan from a baby care brand in the 
                  80s ??? you???re hosting your daughter???s debut ???Because the baby is now a lady.??? 
                </p>
            </div>
        </div>  
        <div class="col">
            <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link accordionLink" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Details
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Capacity: Up to 1,250 guests<br>
                        Area: 1, 072 square meters
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed accordionLink" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Request for Proposal
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      If you require any further information or wish to guarantee your place
                      please call us at +639178883334 
                      or 394-7896.
                    </div>
                    <div class="card-body">Request for Proposal.</div>
                        
                    
                  </div>
                </div>
              </div>
        </div>  
    </div>
    
</div>
</div>

<div class="container-fluid bg-light">

  <div class="container features">
    <div class="row">
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894261118221058058/Danielle-18th-Birthday-Party-Debut-Event-Photography-San-Diego-Crowne-Plaza-by-AbounaPhoto-3872-870x.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894261337285353502/shutterstock_650415253.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894261598531760238/Akira_Back-e1632833034173.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894262003038838844/Meati-Foods-mycelium-chicken-e1625740438561.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894262524504076348/lemon.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894262850934145124/catering-1.jpg" class="img-size">
          </div>
  
  
  </div>
  </div>
</div>
</div>

<div id="Prom" class="tabcontent">
  <div class="header container-fluid img-fluid"id="prom">
    <div class="container">
      <div class="description">
          <p>Promenade</p>
          <a href="../Inquiry/Inquiry.html"><button class="btn btn-dark btn-lg">Reserve now</button></a>
      </div>
    </div>
  </div>

<div class="container mb-5">
  <div class="container features">
    <div class="row content-text">
        <div class="col">
            <h3 class="feature-title text-light">The light teaches you to convert life into a festive promenade.</h3>
            <div class="container text-light">
                <p>Prom is a significant, unique, serious event. The brightness of 
                  graduation memories depends on the quality of its organization. Prom 
                  catering allows you not to be tied to the place. Today it is not
                   necessary to organize a cool prom in the bar, restaurant or club. 
                   Original celebration can be held in any desired location. 
                </p>
                <p>
                  Prom catering at school, college or higher education institute is a 
                  professional catering service with the provision of everything that
                   is required for the organization and execution of the event. We take
                    care of all issues related to the preparation and delivery of food
                     and drinks, serving tables, reception and accommodation of the guests.
                </p>
                <p>
                  We will organize your prom of any format. It can be a solemn banquet, a
                   noisy party or an outdoor buffet. Depending on the chosen format, 
                   we are ready to offer different options of cold and hot snacks,
                    main courses, desserts and drinks.
                </p>
            </div>
        </div>  
        <div class="col">
            <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link accordionLink" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Details
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Capacity: Up to 1,250 guests<br>
                        Area: 1, 072 square meters
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed accordionLink" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Request for Proposal
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      If you require any further information or wish to guarantee your place
                      please call us at +639178883334 
                      or 394-7896.
                    </div>
                    <div class="card-body">Request for Proposal.</div>
                        
                    
                  </div>
                </div>
              </div>
        </div>  
    </div>
    
</div>
</div>

<div class="container-fluid bg-light">

  <div class="container features">
    <div class="row">
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894266084373463090/fc0b38f753c8e4dbd29934110ac46263.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894266543117058049/dsc4372.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894267035163443210/imag2e.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894267412101341254/brian-chan-12169-unsplash.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894267883469824100/mlc_027.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894268182909579324/6ddfcdf07d86dbbc91a87b9f9e151c72.JPG" class="img-size">
          </div>
  
  
  </div>
  </div>
</div>
</div>

<div id="Wed" class="tabcontent">
  <div class="header container-fluid img-fluid"id="wedding">
    <div class="container">
      <div class="description">
          <p>Wedding</p>
          <a href="../Inquiry/Inquiry.html"><button class="btn btn-dark btn-lg">Reserve now</button></a>
      </div>
    </div>
  </div>

<div class="container mb-5">
  <div class="container features">
    <div class="row content-text">
        <div class="col">
            <h3 class="feature-title text-light">Where the adventure begins</h3>
            <div class="container text-light">
                <p>Any bride will tell you that the reception flies by. But the last 
                  dance doesn't have to signal the end of the celebration. There are 
                  always revelers who refuse to let the good times come to a close, 
                  so it's essential to have an after-hours game plan. It isn't just a 
                  way to prolong your wedding day (and you will appreciate every extra 
                  minute) consider it another chance to impress your guests with 
                  surprising details and personal touches. Here's how to get the 
                  party started.
                </p>
            </div>
        </div>  
        <div class="col">
            <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link accordionLink" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Details
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Capacity: Up to 1,250 guests<br>
                        Area: 1, 072 square meters
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed accordionLink" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Request for Proposal
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      If you require any further information or wish to guarantee your place
                      please call us at +639178883334 
                      or 394-7896.
                    </div>
                    <div class="card-body">Request for Proposal.</div>
                        
                    
                  </div>
                </div>
              </div>
        </div>  
    </div>
    
</div>
</div>

<div class="container-fluid bg-light">

  <div class="container features">
    <div class="row">
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894269052254572605/weddings-2013-12-wedding-food-tiny-burgers-main.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894269307507310672/image.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894269855396659300/wedding-buffet-2e2165m.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894270657196601344/wedding-catering-company-10.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894272627521245264/db65adcc-9313-4c52-b610-203a8efa672a_rs_768.jpg" class="img-size">
          </div>
      
          <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
        <input Name="" type="Image" src="https://cdn.discordapp.com/attachments/755646434526625882/894271091885867058/PETblog_appetizers1.jpg" class="img-size">
          </div>
  
  
  </div>
  </div>
</div>
</div>


<div class="container features">
  <div class="row content-text">
    <h3 class="feature-title text-light">Request for Proposal</h3>
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
          
          <div class="container text-light">
              <p>If you require any further information or wish to guarantee your place
                  please call us at +639178883334 
                  or 394-7896.</p>
              <a href="../Inquiry/Inquiry.html"><button class="btn btn btn-light btn-lg">Inquire now</button></a>
          </div>
      </div>  
      
      <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
          <div class="container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2729.818297825859!2d121.05931872638772!3d14.624916157068517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1635818164516!5m2!1sen!2sph" 
              style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
      </div>  
    </div>
    </div>



<!-- Footer  -->
<div class="global">
  <div class="container">
    <div class="row ">
      <div class="col col-12 col-md-6 col-xl-6 mt-5">
        <h6>Legal</h6>
        <ul class="nav flex-column">
          <li><a href="../TermsConditions/TermsCondition.html">Terms & Conditions</a></li>
          <li><a href="../PrivacyPolicy/PrivacyPolicy.html">Privacy Policy</a></li>
          <li><a href="../Forum/Forum.html">Forums</a></li>
        </ul>
      </div>
      <div class="col col-12 col-md-6 col-xl-6 mt-5 mb-5">
        <h6>Support</h6>
        <ul class="nav flex-column">
          <li>Phone Number: +639178883334</li>
          <li>Landline: 394-7896<li>
          <li>Email: apitongscatering@business.com</li>
        </ul>
      </div>
      <div class="social">
        <div class="mt-5 mb-4">
            <a href="https://www.facebook.com/Dirtysoda11"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/RAVEN75754452?s=09"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/algeralddelapaz/"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-snapchat-ghost"></i></a>
        </div>
      </div>
      <p class="copyright mb-5"> &copy; Apitongs Food & Catering Services. All Rights Reserved</p>
    </div>
</div>
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


document.getElementById("defaultOpen").click();
</script>



			
	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
crossorigin="anonymous"></script>

<script src="main.js"></script>

</body>

</html>