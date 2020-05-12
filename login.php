<!-- ?php 

$email = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$conn = mysqli_connect('localhost','root','A7xforever666'); 
$db = mysqli_select_db('sops');
 
  if (isset($entrar)) {
            
    $verifica = mysqli_query("SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha'") or die ("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.html';</script>";
        die();
      }else{
        setcookie("email",$email);
        header("Location:index.html");
      }
  }
? -->