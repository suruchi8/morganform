<?php
$con=mysqli_connect("localhost","root","","morgan");

if(isset($_POST['submit'])){
    $form_id=$_POST['form_id'];
    $school=$_POST['school'];
    $percent_obtain=$_POST['percent_obtain'];
$grade=$_POST['grade'];
$passed_year=$_POST['passed_year'];
$division=$_POST['division'];
$board=$_POST['board'];

    foreach($grade as $index=>$data)
    {
        $r_grade=$data;
        $r_school=$school[$index];
        $r_passed_year=$passed_year[$index];
        $r_percent_obtain=$percent_obtain[$index];
       $r_division=$division[$index];
       $r_board=$board[$index];
        
        $query="insert into previous_qualification(form_id,grade,school,passed_year,percent_obtain,division,board) values('$form_id','$r_school','$r_passed_year','$r_percent_obtain',' $r_division','$board')";
        $query_run=mysqli_query($con,$query);
    }
}

?>