    <?php
$servername="localhost";
$username = "root";
$password="0000";
$dbname="login_gamesiteweb";
$port="3308";
try {
    $connexion=new PDO("mysql:host=$servername;dbname=$dbname;port=$port",$username,"0000");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfull";
}
catch (PDOException $e){
    echo "Connection failed:" . $e->getMessage();
}
$email=$_POST["email"];
$password=$_POST["password"];
$requete=$connexion->prepare("SELECT * FROM membres WHERE email=?");
$requeteadmin=$connexion->prepare("SELECT * FROM admins where email=?");
$requete->execute([$email]);
$requeteadmin->execute([$email]);
$resulta=$requete->fetch(PDO::FETCH_ASSOC);
$resultadmin=$requeteadmin->fetch(PDO::FETCH_ASSOC);

if(isset($_POST["login"])){
    if(isset( $resultadmin)){
        if ($password == $resultadmin["password"]) {
            header('Location:../homeAdmin/homeadmin.php');
             exit;
             }
         
         else {
          echo "Mot de passe d'admin incorrect";
        }
    }
    


   if ($resulta) {
        if ($password == $resulta['password']) {
         session_start();
        $_SESSION['id'] = $resulta['id'];
        $_SESSION['nom'] = $resulta['nom'];
        $_SESSION['prenom'] = $resulta['prenom'];
        $_SESSION['date_naissance'] = $resulta['date_naissance'];
        $_SESSION['email'] = $resulta['email'];
        $_SESSION['choix'] = $resulta['choix'];
        $_SESSION['password'] = $resulta['password'];
        $_SESSION['photo'] = $resulta['photo'];$_SESSION['Tel'] = $resulta['Tel'];
           header('Location:../profil/lml.php');
            exit;
        }
            else {
                echo "Mot de passe incorrect";
            }
        }
    
     else {
        echo "l'email est incorrect";
    }
}

?>