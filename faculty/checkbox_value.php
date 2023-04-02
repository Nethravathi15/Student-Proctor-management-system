<?php


//require "../config/database.php";
if(isset($_POST['butcap'])){
if(!empty($_POST['check_list'])) {
	// Counting number of checked checkboxes.
	$checked_count = count($_POST['check_list']);
	// Loop to store and display values of individual checked checkbox.
	$query = "select * from attend_2021_student where attend_2021_student_semester='".$_POST['semester']."' and attend_2021_student_department='".$_POST['department']."'";
	echo $query;
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result)) 
	{
		echo 'aa';
    $usn = trim($row['attend_2021_student_usn']);
    $semester = trim($_POST["semester"]);
    $department = trim($_POST["department"]);
    $subject = trim($_POST["subject"]);
    $dated = trim($_POST["dated"]);
	$query = "insert into attend_2021_attendance(usn,dated,sem,department,stat,subject) values('$usn','$dated','$semester','$department','Absent','$subject')";
	echo $query;

     mysqli_query($link,$query);
	 foreach($_POST['check_list'] as $selected) {
		$query = "update attend_2021_attendance set stat='Present' where usn='$selected' and dated='$dated' and sem='$semester' and department='$department'";
	echo $query;

     mysqli_query($link,$query);
	}
	}
	

}
else{
echo "<b>Please Select Atleast One Option.</b>";
}
}
?>