ls<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="../GameClubIcones/fstgaming.png">
    <link rel="stylesheet" href="../bootStrap/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="homeadminstyle.css">
</head>

<body >
  <center>
  <a href=""><img src="../GameClubIcones/fstgaming.png" height="100px"></a>
  </center>
  
  
  <div class="container " style="border:solid 5px; border-radius:8px;  background-color: white;">
   <div class="navbar  mt-3 mb-3" style="border:solid 5px; border-radius:8px; background-color:#9dbcdb;">
<h3   style=" color:black; position: relative;left:450px; " ><svg xmlns="http://www.w3.org/2000/svg" class="icons" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7H162.5c0 0 0 0 .1 0H168 280h5.5c0 0 0 0 .1 0H417.3c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2H224 204.3c-12.4 0-20.1 13.6-13.7 24.2z"/></svg> Admin Page </h3>
   
   
</div>
        <!--/***********************************************************************membres**********************************************************************************/-->
        <div class="card " style="margin-bottom:60px; margin-top:60px ">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="btnmember">
                <h5><svg xmlns="http://www.w3.org/2000/svg" class="icons" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                <span class="leshead"> LES MEMBERS</span></h5>
             
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body"  id="headingTwo">
                        <div class="card">
             <!--check members -->
                      <div class="card-header" id="headingTwo">
                         <h5 class="mb-0">
                           
                         <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsetree" aria-expanded="true" aria-controls="collapsetree" style=" text-decoration: none ;color:black;">
                         <h5><svg xmlns="http://www.w3.org/2000/svg"class="icons" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 16c-6.7 0-10.8-2.8-15.5-6.1C201.9 5.4 194 0 176 0c-30.5 0-52 43.7-66 89.4C62.7 98.1 32 112.2 32 128c0 14.3 25 27.1 64.6 35.9c-.4 4-.6 8-.6 12.1c0 17 3.3 33.2 9.3 48H45.4C38 224 32 230 32 237.4c0 1.7 .3 3.4 1 5l38.8 96.9C28.2 371.8 0 423.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-58.5-28.2-110.4-71.7-143L415 242.4c.6-1.6 1-3.3 1-5c0-7.4-6-13.4-13.4-13.4H342.7c6-14.8 9.3-31 9.3-48c0-4.1-.2-8.1-.6-12.1C391 155.1 416 142.3 416 128c0-15.8-30.7-29.9-78-38.6C324 43.7 302.5 0 272 0c-18 0-25.9 5.4-32.5 9.9c-4.8 3.3-8.8 6.1-15.5 6.1zm56 208H267.6c-16.5 0-31.1-10.6-36.3-26.2c-2.3-7-12.2-7-14.5 0c-5.2 15.6-19.9 26.2-36.3 26.2H168c-22.1 0-40-17.9-40-40V169.6c28.2 4.1 61 6.4 96 6.4s67.8-2.3 96-6.4V184c0 22.1-17.9 40-40 40zm-88 96l16 32L176 480 128 288l64 32zm128-32L272 480 240 352l16-32 64-32z"/>
                        </svg><span class="leshead">check memebrs</span></h5>
                       
                          </button>
                          </h5>
                  </div>
  <div id="collapsetree" class="collapse" aria-labelledby="headingtree" data-parent="#accordion">
            <div class="card-body"  id="headingTwo">
  <?php
$servername = "localhost";
$username = "root";
$password = "0000";
$dbname = "login_gamesiteweb";
$port = "3308";
try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, "0000"); 
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; // Optional: Display a success message
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
$requete=$conn->prepare("SELECT * FROM membres ");
$requete->execute();
$resulta=$requete->fetchall(PDO::FETCH_ASSOC);

echo "<table class='table'> 
 <caption> our members </caption>
 <tr>
 <th >id</th>
     <th>prenom</th>
     <th>nom</th>
     <th>email</th>
     <th>password</th>
     <th>tele</th>
     <th>traitement</th>
 </tr>";
foreach ($resulta as $row) {
    ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <?php $id = $row['id']; ?>
        <?php $modal_id = "supprimerModal$id"; // ID de la fenêtre modale
        $target_modal = "#$modal_id"; ?>
        <td><?php echo $row['prenom'] ?></td>
        <td><?php echo $row['nom'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['password'] ?></td>
        <td><?php echo $row['Tel'] ?></td>
        <td>
            <input type="submit" class="btn btn-danger" value="delete" data-bs-toggle="modal"
                   data-bs-target="<?php echo "$target_modal"; ?>">
            <input type="submit" class="btn btn-warning" value="modifier">
            <div class="modal fade" id="<?php echo "$modal_id" ?>" tabindex="-1" aria-labelledby="suprimerLabel"aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="suprimerLabel">supprimer</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <b>you sure that you want to delete this member</b>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                            <a href="SupMember.php?id=<?php echo $row['id']?>" class="btn btn-danger">delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <?php
}
echo "</table>";
?>
            </div>
          </div>
        </div>
</div>
</div>
</div>

         <!--/***********************************************************************Annonces**********************************************************************************/-->
        <div class="card" style="margin-bottom:100px;">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button  type="button" class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style=" text-decoration: none ;color:black;  position: relative;left:460px;">
              <h5> 
              <svg xmlns="http://www.w3.org/2000/svg" class="icons" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
              <span class="leshead">LES ANNONCES</span>
              </h5>
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
           <div class="card-body">
            <!-- ajoute des annonces -->
             <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button  type="button" class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseanonce" aria-expanded="true" aria-controls="collapseanonce" style=" text-decoration: none ;color:black;" >
              <h5><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icons"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm16 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v48H368c-8.8 0-16 7.2-16 16s7.2 16 16 16h48v48c0 8.8 7.2 16 16 16s16-7.2 16-16V384h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H448V304z"/></svg><span class="Leshead"> Ajouter des annonces</span></h5>

              </button>
            </h5>
          </div>
          <div id="collapseanonce" class="collapse " aria-labelledby="headinganonce" data-parent="#accordion">
            <div class="card-body" id="headingThree">
              <form action="homeadmin.php" method="post" enctype="multipart/form-data">
              <input name="titre" id="nomannonce" type="text" placeholder="titre d'annonce"  class="form-control" style=" margin-bottom: 50px;" >
            <textarea name="body"  cols="30" rows="10" placeholder="More info about the annonce"  class="form-control" style=" margin-bottom: 50px;"></textarea> 
            <label class="form-label" style="font-size:20px; color:black;" > add a image for the event </label>
            <input type="file" class="form-control mb-3" name="images" >
            <label class="form-label" style="font-size:20px; color:black;"> choose a game</label>
            <select name="al3ab" class="form-control" >
  <option value="Valorant">Valorant</option>
  <option value="FIFA24">FIFA24</option>
  <option value="Counter&Strik">Counter&Strik</option>
  <option value="pubg">Pubg</option>
  <option value="chess">chess</option>
  <option value="Fortnit">Fortnite</option>
</select>
<label class="form-label" style="font-size:20px; color:black;"> choose a game</label>
<input type="date" class="form-control" name="date">
            <button type="button" class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" > add the annonce</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter l'annonce</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
         <b>you sure that you want to  add this annonce</b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annuler</button>
            <button type="submit" class="btn btn-primary" name="ajouter" >Ajouter</button>
          
        </form>
        </div>
      </div>
    </div>
  </div>
          <!--php--> 
          <?php
          if(isset($_FILES["images"])){
              $image=$_FILES["images"]["name"];
              $filename=uniqid().$image;
             move_uploaded_file($_FILES["images"]["tmp_name"],'annonce/' . $filename);
                   if (isset($_POST["ajouter"])){
                     $titre = $_POST["titre"];
                      $info = $_POST["body"];
                      $games=$_POST["al3ab"];
                      $date=$_POST["date"];
                       $requete = $conn->prepare("INSERT INTO Lesannonces (titre, body,images,game,dates) VALUES (?,?,?,?,?)");
                      $resulttt=$requete->execute([$titre,$info,$filename,$games,$date]);
                       if ($resulttt){
                           echo "Données insérées avec succès";
                          header('location:homeadmin.php');
                       } else {
                           echo "Erreur lors de l'insertion des données";
                      }
                   }
                  }
        ?>
            </div>
          </div>
        </div>
         <!-- voir annonce-->
         <div id="accordion">
        <div class="card" style="margin-bottom:10px;margin-top:10px;">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link " data-bs-toggle="collapse" data-bs-target="#voirAnnonce" aria-expanded="true" aria-controls="voirAnnonce" style=" text-decoration: none ;">
               
              <h5><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icons"><path d="M144 16c0-8.8-7.2-16-16-16s-16 7.2-16 16V32H96c-8.8 0-16 7.2-16 16s7.2 16 16 16h16V96H60.2C49.1 96 40 105.1 40 116.2c0 2.5 .5 4.9 1.3 7.3L73.8 208H72c-13.3 0-24 10.7-24 24s10.7 24 24 24h4L60 384H196L180 256h4c13.3 0 24-10.7 24-24s-10.7-24-24-24h-1.8l32.5-84.5c.9-2.3 1.3-4.8 1.3-7.3c0-11.2-9.1-20.2-20.2-20.2H144V64h16c8.8 0 16-7.2 16-16s-7.2-16-16-16H144V16zM48 416L4.8 473.6C1.7 477.8 0 482.8 0 488c0 13.3 10.7 24 24 24H232c13.3 0 24-10.7 24-24c0-5.2-1.7-10.2-4.8-14.4L208 416H48zm288 0l-43.2 57.6c-3.1 4.2-4.8 9.2-4.8 14.4c0 13.3 10.7 24 24 24H488c13.3 0 24-10.7 24-24c0-5.2-1.7-10.2-4.8-14.4L464 416H336zM304 208v51.9c0 7.8 2.8 15.3 8 21.1L339.2 312 337 384H462.5l-3.3-72 28.3-30.8c5.4-5.9 8.5-13.6 8.5-21.7V208c0-8.8-7.2-16-16-16H464c-8.8 0-16 7.2-16 16v16H424V208c0-8.8-7.2-16-16-16H392c-8.8 0-16 7.2-16 16v16H352V208c0-8.8-7.2-16-16-16H320c-8.8 0-16 7.2-16 16zm80 96c0-8.8 7.2-16 16-16s16 7.2 16 16v32H384V304z"/></svg>
              <span style=" color :black; position:relative; top:5px;">Voir les annonces </span></h5>
              </button>
            </h5>
          </div>

          <div id="voirAnnonce" class="collapse " aria-labelledby="voirAnnonce" data-parent="#accordion">
            <div class="card-body" id="voirAnnonce">
              <?php
            $requete=$conn->prepare("SELECT * FROM Lesannonces");
$requete->execute();
$result=$requete->fetchall(PDO::FETCH_ASSOC);
echo "<table class='table'> 
<tr>
  <th >Game</th>
  <th>titre</th>
  <th>annonce</th>
  <th>image</th>
<th>date</th> 
  <th>traitement</th>  
</tr>";
foreach ($result as $row) {
  $id = $row['id'];
  $modal_id = "supprimerModal$id";
  $target_modal = "#$modal_id";
    ?>
<tr>
        <td><?php echo $row['game'] ?></td>
        <td><?php echo $row['titre'] ?></td>
        <td><?php echo $row['body'] ?></td>
        <td><img src="../homeAdmin/annonce/<?php echo $row['images'] ?>" style="height:70px; width:70px;"></td>
        <td> <?php echo $row['dates'] ?></td>
        <td>
          <input type="submit" class="btn btn-danger" value="delete" data-bs-toggle="modal" data-bs-target="<?php echo "$target_modal"; ?>">
          <div class="modal fade" id="<?php echo "$modal_id" ?>" tabindex="-1" aria-labelledby="suprimerLabel"aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="suprimerLabel">supprimer</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <b>you sure that you want to delete this annonce</b>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                            <a href="SupAnnonce.php?id=<?php echo $row['id']?>" class="btn btn-danger">delete</a>
                        </div>
                    </div>
                </div>
            </div>
                  </td>
</tr>
<?php
}
?>
</table> 
              </div>
          </div>
        </div>
          </div>
        </div>
      </div>
      <script src="../bootStrap/bootstrap-5.3.3-dist/js/jquery-3.7.1.min.js"></script>
<script src="../bootStrap/bootstrap-5.3.3-dist/js/popper.min.js"></script>
<script src="../bootStrap/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

</div>
</body>
</html>
