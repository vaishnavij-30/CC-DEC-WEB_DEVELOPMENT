<!DOCTYPE html>
<html>
<head>
<title>Blog</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color: black;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 15%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body class="light-white">


<div class="content" style="max-width:1400px">

<!-- Header -->
<header class="container center padding-32 dark-light "> 
  <h1><b>Welcome to MY BLOG</b></h1>
  <p><b>My Dream Places in India</b></span></p>
</header>

<!-- Grid -->
<div class="row">

<!-- Blog entries -->
<div class="col l8 s12">
  <!-- Blog entry -->
  <div class="card-4 margin white">
    <img src="Taj_Mahal.jpg" alt="Nature" style="width:100%">
    <div class="container">
      <h3><b>Taj Mahal</b></h3>
      <h5>Agra, Uttar Pradesh, India</h5>
    </div>

    <div class="container">
      <p>The Taj Mahal <b>'Crown of the Palace'</b> is an Islamic ivory-white marble mausoleum on the right bank of the river Yamuna in the Indian city of Agra.</p>
      <p> It was commissioned in 1631 by the Mughal emperor Shah Jahan to house the tomb of his favourite wife, Mumtaz Mahal; it also houses the tomb of Shah Jahan himself. The tomb is the centrepiece of a 17-hectare complex, which includes a mosque and a guest house, and is set in formal gardens bounded on three sides by a crenellated wall.</p>
      <div class="row">
        <div class="col m8 s12">
          <p><button onclick="read_data()" class="button padding-large white border"><b>READ MORE »</b></button></p>
        </div>
        
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="card-4 margin white">
  <img src="Tirupati.jpg" alt="Norway" style="width:100%">
    <div class="container">
      <h3><b>Tirumalla</b></h3>
      <h5>Tirupati, Andhra Pradesh. India</h5>
    </div>

    <div class="container">
      <p>Tirupati is one of the most visited pilgrimage centre in India, famous for its landmark temples, mostly dedicated to the incarnations of Lord Vishnu. The destination holds several legendary tales to tell, that fascinates tourists from across the world.</p>
      <div class="row">
        <div class="col m8 s12">
          <p><button class="button padding-large white border"><b>READ MORE »</b></button></p>
        </div>
        
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="col l4">
  <!-- About Card -->
  <div class="card margin margin-top">
  <img src="jammu-and-kashmir.jpg" style="width:100%">
    <div class="container white">
      <h4><b>Jammu-Kashmir</b></h4>
      <p>Jammu and Kashmir is a region administered by India as a union territory and consists of the southern portion of the larger Kashmir region, which has been the subject of a dispute between India and Pakistan since 1947, and between India and China since 1962.</p>
    </div>
  </div><hr>
  <div class="card margin margin-top">
  <img src="Lonavala.jpg" style="width:100%">
    <div class="container white">
      <h4><b>Lonavala</b></h4>
      <p>Lonavala is a hill station surrounded by green valleys in western India near Mumbai. The Karla Caves and the Bhaja Caves are ancient Buddhist shrines carved out of the rock. They feature massive pillars and intricate relief sculptures. South of the Bhaja Caves sits the imposing Lohagad Fort, with its 4 gates. West of here is Bhushi Dam, where water overflows onto a set of steps during rainy season.</p>
    </div>
  </div><hr>
  <div class="card margin margin-top">
  <img src="Goa.jpg" style="width:100%">
    <div class="container white">
      <h4><b>Goa</b></h4>
      <p>Goa is a state in western India with coastlines stretching along the Arabian Sea. Its long history as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the area’s tropical spice plantations. Goa is also known for its beaches, ranging from popular stretches at Baga and Palolem to those in laid-back fishing villages such as Agonda.</p>
    </div>
  </div><hr>

 
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END content -->
</div>

<!-- Footer -->
<footer class="container dark-grey padding-32">
<?php 
$b = mysqli_connect("localhost","root","","Blog")or die("database error");
?> 
      <div class="container">
          <form action="index.php" method="POST">
                <div class="row">
                  <div class="col-25">
                    <label >First Name</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="fname" name="name" placeholder="Your name..">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-25">
                    <label for="country">Country</label>
                  </div>
                  <div class="col-75">
                    <select id="country" name="country">
                      <option >Select Country</option>
                      <option >Australia</option>
                      <option >Canada</option>
                      <option >USA</option>
                      <option >India</option>
                      <option >Banglasdesh</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="subject">Subject</label>
                  </div>
                  <div class="col-75">
                    <textarea id="subject" name="subject"  placeholder="Write something.." style="height:200px"></textarea>
                  </div>
                </div>
                <div class="row">
                  <input type="submit" value="Submit" name="save">
                </div>
          </form>
      </div>
    

</footer>

</body>
</html>
<?php

if (isset($_POST['save'])) 
{
  
    $name=$_POST['name'];
    $country=$_POST['country'];
    $message=$_POST['subject'];
   

    if (mysqli_query($b,"INSERT INTO message VALUES('','".$name."','".$country."','".$message."')")) 
    {
      
      echo "<script>
      alert('Thanks for your Valuable Message...!');
      window.location.href='index.php';
      </script>";
    }
    else
    {
        echo "<script>
      alert('Thanks for your Valuable Message...!');
      window.location.href='index.php';
      </script>"; 
    }

}

?>