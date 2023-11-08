<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Food-Recipes</title>

      <link rel="stylesheet" type="text/css" href="main.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
  <?php require 'partials/_nav.php' ?>
    <br>
    <div>
    <span style="font-size: 45px;margin-top: 150px; margin-left: 50px;"><span style="color:#ff9900">(R)</span><span style="color:white">ecipes</span></span>
    <span style="margin-left: 1100px;color:white">
      <a href="index.html"></a></span>
    </div><center>
    <form name="search"action="" method="POST">
      <input type="text"  id="search" name="reg" placeholder="Search...">
    </form></center>
     <br><br>
     <center>
     <table id="t" style="color:white">
      <tr>
        <td class="content"><a style="text-decoration:none;" href = "pizza.html"><button>Pizza</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "pasta.html"><button>Pasta</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "burger.html"><button>Burger</button></a></td>
      </tr>
      <tr>
        <td class="content"><a style="text-decoration:none;" href = "noodles.html"><button>Noodles</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "hs.html"><button>Chinese Hot and Sour Soup</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "cgs.html"><button>Carrot Ginger Soup</button></a></td>
      </tr>
      <tr>
        <td class="content"><a style="text-decoration:none;" href = "breadroll.html"><button>Bread Roll</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "ps.html"><button>Paneer Sandwich</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "vegetablemaggie.html"><button>Vegetable Maggie</button></a></td>
      </tr>
      <tr>
        <td class="content"><a style="text-decoration:none;" href = "frenchtoast.html"><button>French Toast</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "tacos.html"><button>Lemon rice</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "momos.html"><button>Momos</button></a></td>
      </tr>
      <tr>
        <td class="content"><a style="text-decoration:none;" href = "pt.html"><button>Paneer Tikka</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "ccb.html"><button>Crispy Chilly Babycorn</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "ac.html"><button>kheer</button></a></td>
      </tr>
      <tr>
        <td class="content"><a style="text-decoration:none;" href = "q.html"><button>Biryani</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "chococake.html"><button>Chocolate Cake</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "lbp.html"><button>Lemon Bar Peeps</button></a></td>
      </tr>
      <tr>
        <td class="content"><a style="text-decoration:none;" href = "sbpie.html"><button>Strawberry Pie</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "tiramisu.html"><button>Tiramisu</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "pc.html"><button>Panna Cotta</button></a></td>
      </tr>
      <tr>
        <td class="content"><a style="text-decoration:none;" href = "bmc.html"><button>Blueberry Muffin Cake</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "cheesecake.html"><button>Cheesecake</button></a></td>
        <td class="content"><a style="text-decoration:none;" href = "cm.html"><button>Chocolate Milkshake</button></a></td>
      </tr>
      <tr>
        <td class="content"><a style="text-decoration:none;" href = "addrecipe.html"><button>Add Recipe</button></a></td>
      </tr>
    </table>
  </center>
  </body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
 $(document).ready(function(){
 $('#search').keyup(function(){
  var text = $(this).val();
  $('.content').hide();
  $('.content:contains("'+text+'")').show();
 
 });
});

</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
              
