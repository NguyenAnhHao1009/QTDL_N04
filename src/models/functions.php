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

function checkValidItemID($id){
	require_once __DIR__.'/../../config.php';
	$sql = "select * from itemw where item_id = $id";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
        return true;
    }else{
        return false;
    }
}

// function userArea(){
// 	if($_SESSION['type']!='User'){
// 		redirect('category.php');
// 	}
// }
