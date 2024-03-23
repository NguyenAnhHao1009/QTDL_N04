<?php
function redirect($link)
{
?>
    <script>
        window.location.href = "<?php echo $link ?>";
    </script>
<?php
}
function checkUser(){
	if(isset($_SESSION['user_name']) && $_SESSION['user_name']!=''){
	
		
	}else{
		redirect('./index.php');
	}
}

function checkAdmin(){
	if(isset($_SESSION['admin_name']) && $_SESSION['admin_name']!=''){
	
		
	}else{
		redirect('./index.php');
	}
}

// function userArea(){
// 	if($_SESSION['type']!='User'){
// 		redirect('category.php');
// 	}
// }
