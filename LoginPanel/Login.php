<script>function redirect(){ 
         window.location.href="index.php";
       }
			</script>
<?php
include '../AdminPanel/db.php';

	
	if($_POST)
	{
		$username =$_POST["username"];
		$password =$_POST["password"];


		$query  = $DbName->query("SELECT * FROM Writer WHERE WriterMail='$username' && WriterPassword='$password'",PDO::FETCH_ASSOC);
		if ( $say = $query -> rowCount() ){

			if( $say > 0 ){
				session_start();
				$_SESSION['session']=true;
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				
				echo '<script language="javascript">';
				echo 'alert("Hoşgeldiniz ")'.$username;
				echo '</script>';
				
				header("Location: ../AdminPanel/index.php");
				
				
				echo '
					<a href="logout.php">çıkış yap</a>
				';
				
			}else{
				echo '<script language="javascript">';
			echo 'alert("Oturum hatası")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.onload=redirect';
			echo '</script>';
			}
		}else{
			echo '<script language="javascript">';
			echo 'alert("Kullanıcı Adı veya Şifre Hatası")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.onload=redirect';
			echo '</script>';

			
        }
    }
    ?>