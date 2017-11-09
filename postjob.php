<?php
	session_start(); 
 ?>
<?php require_once("lib/connection.php");?>

<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$title = $_POST["job_title"];
		$requirement = $_POST["requirement"];
		$location = $_POST["location"];
		$budget = $_POST["budget"];
		$purchasement = $_POST["purchasement_method"];
 
		if ($title == "" || $requirement == "" || $location == "" || $budget == "" || $purchasement == "") {
			echo "Fill all!";
		}else{
			// Viết câu lệnh thêm thông tin người dùng
			$sql = "INSERT INTO job (job_title, requirement, location, budget, purchasement_method) VALUES ('$title', '$requirement', '$location', '$budget', '$purchasement')";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
			
				echo "Successfully !";
			
				header('Location: postjob.php');
			
			
		}
		
	}
?>
 
        <form action="postjob.php" method="post">
            <h3>Post a Job</h3>
            <label><b>Job title</b></label>
	    <input type="text" id="job_title" name="job_title" required>
            <label><b>Requirement</b></label>
	    <input type="text" id="requirement" name="requirement" required>
            <label><b>Location</b></label>
	    <input type="text" id="location" name="location" required>
            <label><b>Budget</b></label>
	    <input type="text" id="budget" name="budget" required>
            <label><b>Purchasement Method</b></label>
	    <input type="text" id="purchasement_method" name="purchasement_method" required>
            <button type="submit" name="btn_submit">Post!</button>
	</form>
