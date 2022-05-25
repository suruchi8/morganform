<?php
require('connection.php');
require('function.php');

$first_name='';
$middle_name='';
$last_name='';
$dob_bs ='';
$dob_ad ='';
$sex='';
$nationality='';
$citizenship_no='';
$permanent_addr_address='';
$permanent_addr_telephone='';
$permanent_addr_phone='';
$contact_addr_address='';
$contact_addr_telephone='';
$contact_addr_phone='';
$district='';
$email='';
$province='';
$presently_living='';
$father_name='';
$father_living='';
$father_occupation='';
$father_nationality='';
$father_telephone='';
$father_designation='';
$mother_name='';
$mother_living='';
$mother_occupation='';
$mother_nationality='';
$mother_telephone='';
$mother_designation='';
$guardian_name='';
$guardian_relation='';
$guardian_designation='';
$guardian_nationality='';
$guardian_contact_num='';
$proposed_study='';
$eng_reading='';
$eng_writing='';
$eng_speaking='';
$other_language='';
$pay_fee='';
$qualify_scholarship='';
$main_category_scholarship='';
$sub_category_scholarship='';
$sport_hobby='';
$sport_experience='';
$have_experience='';
$future_desire='';
$purpose='';
$first_referee_name='';
$first_referee_officename='';
$first_referee_position='';
$first_referee_telephone='';
$first_referee_email='';
$second_referee_name='';
$second_referee_officename='';
$second_referee_position='';
$second_referee_telephone='';
$second_referee_email='';
$require_hostel='';
$require_transport='';
$pick_drop_station='';
$source_of_information='';
$school='';
$passed_year='';
$percent_obtain='';
$grade='';
$board='';
$division='';
$image='';

if(isset($_GET['form_id']) && $_GET['form_id']!=''){
    $form_id=get_safe_value($con,$_GET['form_id']);
    $sql="select * from personal_details where form_id='$form_id'";
    $res=mysqli_query($con,$sql);
    $check=mysqli_num_rows($res);
if($check>0){
$row=mysqli_fetch_assoc($res);
$first_name=$row['first_name'];
$middle_name=$row['middle_name'];
$last_name=$row['last_name'];
$dob_bs=$row['dob_bs'];
$dob_ad=$row['dob_ad'];
$sex=$row['sex'];
$nationality=$row['nationality'];
$citizenship_no=$row['citizenship_no'];
$permanent_addr_address=$row['permanent_addr_address'];
$permanent_addr_telephone=$row['permanent_addr_telephone'];
$permanent_addr_phone=$row['permanent_addr_phone'];
$contact_addr_address=$row['permanent_addr_address'];
$contact_addr_telephone=$row['permanent_addr_telephone'];
$contact_addr_phone=$row['permanent_addr_phone'];
$district=$row['district'];
$email=$row['email'];
$province=$row['province'];
$presently_living=$row['presently_living'];
$father_name=$row['father_name'];
$father_living=$row['father_living'];
$father_occupation=$row['father_occupation'];
$father_nationality=$row['father_nationality'];
$father_telephone=$row['father_telephone'];
$father_designation=$row['father_designation'];
$mother_name=$row['mother_name'];
$mother_living=$row['mother_living'];
$mother_occupation=$row['mother_occupation'];
$mother_nationality=$row['mother_nationality'];
$mother_telephone=$row['mother_telephone'];
$mother_designation=$row['mother_designation'];
$guardian_name=$row['guardian_name'];
$guardian_relation=$row['guardian_relation'];
$guardian_designation=$row['guardian_designation'];
$guardian_nationality=$row['guardian_nationality'];
$guardian_contact_num=$row['guardian_contact_num'];
$proposed_study=$row['proposed_study'];
$eng_reading=$row['eng_reading'];
$eng_writing=$row['eng_writing'];
$eng_speaking=$row['eng_speaking'];
$other_language=$row['other_language'];
$pay_fee=$row['pay_fee'];
$qualify_scholarship=$row['qualify_scholarship'];
$main_category_scholarship=$row['main_category_scholarship'];
$sub_category_scholarship=$row['sub_category_scholarship'];
$sport_hobby=$row['sport_hobby'];
$sport_experience=$row['sport_experience'];
$have_experience=$row['have_experience'];
$future_desire=$row['future_desire'];
$purpose=$row['purpose'];
$first_referee_name=$row['first_referee_name'];
$first_referee_officename=$row['first_referee_officename'];
$first_referee_position=$row['first_referee_position'];
$first_referee_telephone=$row['first_referee_telephone'];
$first_referee_email=$row['first_referee_email'];
$second_referee_name=$row['second_referee_name'];
$second_referee_officename=$row['second_referee_officename'];
$second_referee_position=$row['second_referee_position'];
$second_referee_telephone=$row['second_referee_telephone'];
$second_referee_email=$row['second_referee_email'];
$require_hostel=$row['require_hostel'];
$require_transport=$row['require_transport'];
$pick_drop_station=$row['pick_drop_station'];
$source_of_information=$row['source_of_information'];
$image=$row['image'];
}
else{
    header('Location:form.php');
    die();
}
}


if(isset($_POST['submit'])){
   
 //start of personal details   
    $first_name=get_safe_value($con,$_POST['first_name']);
    $middle_name=get_safe_value($con,$_POST['middle_name']);
    $last_name=get_safe_value($con,$_POST['last_name']);
    $dob_bs=get_safe_value($con,$_POST['dob_bs']);
    $dob_ad=date('Y-m-d');
    $sex=get_safe_value($con,$_POST['sex']);
    $nationality=get_safe_value($con,$_POST['nationality']);
    $citizenship_no=get_safe_value($con,$_POST['citizenship_no']);
    $permanent_addr_address=get_safe_value($con,$_POST['permanent_addr_address']);
    $permanent_addr_telephone=get_safe_value($con,$_POST['permanent_addr_telephone']);
    $permanent_addr_phone=get_safe_value($con,$_POST['permanent_addr_phone']);
    $contact_addr_address=get_safe_value($con,$_POST['contact_addr_address']);
    $contact_addr_telephone=get_safe_value($con,$_POST['contact_addr_telephone']);
    $contact_addr_phone=get_safe_value($con,$_POST['contact_addr_phone']);
    $district=get_safe_value($con,$_POST['district']);
    $email=get_safe_value($con,$_POST['email']);
    $province=get_safe_value($con,$_POST['province']);
    $presently_living=get_safe_value($con,$_POST['presently_living']);
//end of personal details

//start of family details
    $father_name=get_safe_value($con,$_POST['father_name']);
    $father_living=get_safe_value($con,$_POST['father_living']);
    $father_occupation=get_safe_value($con,$_POST['father_occupation']);
    $father_nationality=get_safe_value($con,$_POST['father_nationality']);
    $father_telephone=get_safe_value($con,$_POST['father_telephone']);
    $father_designation=get_safe_value($con,$_POST['father_designation']);
    $mother_name=get_safe_value($con,$_POST['mother_name']);
    $mother_living=get_safe_value($con,$_POST['mother_living']);
    $mother_occupation=get_safe_value($con,$_POST['mother_occupation']);
    $mother_nationality=get_safe_value($con,$_POST['mother_nationality']);
    $mother_telephone=get_safe_value($con,$_POST['mother_telephone']);
    $mother_designation=get_safe_value($con,$_POST['mother_designation']);
//end of family details

//start of guardian details
    $guardian_name=get_safe_value($con,$_POST['guardian_name']);
    $guardian_relation=get_safe_value($con,$_POST['guardian_relation']);
    $guardian_designation=get_safe_value($con,$_POST['guardian_designation']);
    $guardian_nationality=get_safe_value($con,$_POST['guardian_nationality']);
    $guardian_contact_num=get_safe_value($con,$_POST['guardian_contact_num']);
 // end of guardian details
 

 //start of proposed study
    $proposed_study=get_safe_value($con,$_POST['proposed_study']);
//end of proposed study


// start of english language proficiency
    $eng_reading=get_safe_value($con,$_POST['eng_reading']);
    $eng_writing=get_safe_value($con,$_POST['eng_writing']);
    $eng_speaking=get_safe_value($con,$_POST['eng_speaking']);
    $other_language=get_safe_value($con,$_POST['other_language']);
// end of english language proficiency



//start of financial details
    $pay_fee=get_safe_value($con,$_POST['pay_fee']);
    $qualify_scholarship=get_safe_value($con,$_POST['qualify_scholarship']);
    $main_category_scholarship=$_POST['main_category_scholarship'];
    $chkstr4  =implode(",",$main_category_scholarship);
    $sub_category_scholarship=get_safe_value($con,$_POST['sub_category_scholarship']);
//end of financial details


//start of sports details
    $sport_hobby=$_POST['sport_hobby'];
    $chkstr1  =implode(",",$sport_hobby);

    $sport_experience=$_POST['sport_experience'];
    $chkstr5  =implode(",",$sport_experience);

    $have_experience=get_safe_value($con,$_POST['have_experience']);
//end of sports details


 // start of future desire   
    $future_desire=$_POST['future_desire'];
    $chkstr2  =implode(",",$future_desire);
 // end of future desire   


 //start of statement of purpose
    $purpose=get_safe_value($con,$_POST['purpose']);
//end of statement of purpose



//start of academic referees
    $first_referee_name=get_safe_value($con,$_POST['first_referee_name']);
    $first_referee_officename=get_safe_value($con,$_POST['first_referee_officename']);
    $first_referee_position=get_safe_value($con,$_POST['first_referee_position']);
    $first_referee_telephone=get_safe_value($con,$_POST['first_referee_telephone']);
    $first_referee_email=get_safe_value($con,$_POST['first_referee_email']);
    $second_referee_name=get_safe_value($con,$_POST['second_referee_name']);
    $second_referee_officename=get_safe_value($con,$_POST['second_referee_officename']);
    $second_referee_position=get_safe_value($con,$_POST['second_referee_position']);
    $second_referee_telephone=get_safe_value($con,$_POST['second_referee_telephone']);
    $second_referee_email=get_safe_value($con,$_POST['second_referee_email']);
//end of academic referees



//start of MISCELLANEOUS
    $require_hostel=get_safe_value($con,$_POST['require_hostel']);
    $require_transport=get_safe_value($con,$_POST['require_transport']);
    $pick_drop_station=get_safe_value($con,$_POST['pick_drop_station']);

    $source_of_information=$_POST['source_of_information'];
    $chkstr3  =implode(",",$source_of_information);
//end of MISCELLANEOUS

    $image=get_safe_value($con,$_POST['image']);//image file


    mysqli_query($con,"insert into personal_details(first_name,middle_name,last_name,dob_bs,dob_ad,sex,nationality,citizenship_no,permanent_addr_address,permanent_addr_telephone,permanent_addr_phone,contact_addr_address,contact_addr_telephone,contact_addr_phone,district,email,province,presently_living,father_name,father_living,father_occupation,father_nationality,father_telephone,father_designation,mother_name,mother_living,mother_occupation,mother_nationality,mother_telephone,mother_designation,guardian_name,guardian_relation,guardian_designation,guardian_nationality,guardian_contact_num,proposed_study,eng_reading,eng_writing,eng_speaking,other_language,pay_fee,qualify_scholarship,main_category_scholarship,sub_category_scholarship,sport_hobby,sport_experience,have_experience,future_desire,purpose,first_referee_name,first_referee_officename,first_referee_position,first_referee_telephone,first_referee_email,second_referee_name,second_referee_officename,second_referee_position,second_referee_telephone,second_referee_email,require_hostel,require_transport,pick_drop_station,source_of_information,image) values('$first_name','$middle_name','$last_name','$dob_bs','$dob_ad','$sex','$nationality','$citizenship_no','$permanent_addr_address','$permanent_addr_telephone','$permanent_addr_phone','$contact_addr_address','$contact_addr_telephone','$contact_addr_phone','$district','$email','$province','$presently_living','$father_name','$father_living','$father_occupation','$father_nationality','$father_telephone','$father_designation','$mother_name','$mother_living','$mother_occupation','$mother_nationality','$mother_telephone','$mother_designation','$guardian_name','$guardian_relation','$guardian_designation','$guardian_nationality','$guardian_contact_num','$proposed_study','$eng_reading','$eng_writing','$eng_speaking','$other_language','$pay_fee','$qualify_scholarship','$chkstr4','$sub_category_scholarship','$chkstr1','$chkstr5','$have_experience','$chkstr2','$purpose','$first_referee_name','$first_referee_officename','$first_referee_position','$first_referee_telephone','$first_referee_email','$second_referee_name','$second_referee_officename','$second_referee_position','$second_referee_telephone','$second_referee_email','$require_hostel','$require_transport','$pick_drop_station','$chkstr3','$image')");
}


//previous educational qualifications
if(isset($_POST['submit'])){
    $form_id=$_POST['form_id'];
    $school=$_POST['school'];
    $percent_obtain=$_POST['percent_obtain'];
$grade=$_POST['grade'];
$passed_year=$_POST['passed_year'];
$division=$_POST['division'];
$board=$_POST['board'];

    foreach($grade as $index => $data)
    {
        $r_grade=$data;
        $r_school=$school[$index];
        $r_passed_year=$passed_year[$index];
        $r_percent_obtain=$percent_obtain[$index];
       $r_division=$division[$index];
       $r_board=$board[$index];
        
        $query="INSERT INTO previous_qualification(form_id,grade,school,passed_year,percent_obtain,division,board) VALUES('$form_id','$grade',$r_school','$r_passed_year','$r_percent_obtain',' $r_division','$board')";
        $query_run=mysqli_query($con,$query);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- nepali date picker -->
    <link rel = "stylesheet" href = "assets/plugins/nepali-date-picker/css/nepali.datepicker.v3.7.min.css">
    <!-- english date picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "assets/css/style.css">
</head>
<body>


    <!-- main form page wrapper -->
    <div class = "form-page-wrapper my-lg-5">
        <form method="post" enctype="multipart/form-data">
            <div class = "container bg-white py-5 px-4 p-lg-5 p-xl-6">
                <!-- form header part -->
                <div class = "row form-page-header">
                    <div class = "col-lg-8 form-header-left mb-4 mb-lg-0 text-center text-sm-start">
                        <div class = "brand-info row align-items-center">
                            <div class = "brand-logo col-sm-auto">
                                <img src = "assets/images/logo.png" alt = "logo" class = "img-fluid">
                            </div>
                            <div class = "brand-text col-sm-8  mx-auto mx-sm-0">
                                <h3 class = "text-uppercase brand-text-name ls-2 text-blue font-lora">
                                    <span class = "d-block py-1">morgan</span> 
                                    <span class = "d-block py-1 fw-4 ls-0">international</span> 
                                    <span class = "d-block py-1">school</span>
                                </h3>
                                <p class = "fw-5 fst-italic">"Education with an outcome"</p>  
                            </div>
                        </div>
                        <div class = "brand-location py-1">
                            <span class = "fw-7 d-block mb-2">Cyasendol (Near Dhapasi Height, kathmandu)</span>
                            <span class = "fw-3 d-block op-8">Tel: 01-4354088, 4384181, E-mail: morganinternationschool@gmail.com, Web: www.morganintlschool.com</span>
                        </div>
                    </div>
                    <div class = "col-lg-4 form-header-right align-self-lg-end">
                        <div class = "img-upload d-flex align-items-start justify-content-center p-3">
                            <div class = "form-elem text-center">
                                <label for = "image" class = "form-label d-block fw-5">Click To Upload Photo</label>
                                
                                <div class = "img-upload-preview my-3">
                                    <img src = "assets/images/upload.png" alt = "avatar" class = "img-fluid img-upload-avatar" id = "img-upload-btn"> 
                                </div> 
                                <input type = "file" name = "image" accept = "image/*" class = "form-control" id = "img-upload-input"  value="<?php echo $image?>">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of form header part -->
    
                <!-- form main title -->
                <div class = "form-page-title p-2 bg-darkblue mt-4">
                    <h3 class = "text-uppercase text-white m-0 text-center ls-1">admission application form</h3>
                </div>
                <!-- end of form main title -->
    
                <!-- personal details section -->
               <?php include('formpartials/personal_details.php') ?>
                <!-- end of personal details section -->

                <!-- family details section -->
               <?php include('formpartials/family_details.php')?>
                <!-- end of family details section -->

                <!-- guardian details section -->
                <?php include('formpartials/guardian_details.php')?>
                <!-- end of guardian details section -->

                <!-- proposed study section -->
                <?php include('formpartials/proposed_study.php')?>
                <!-- end of proposed study section -->

                <!-- previous educational qualifications section -->
                <?php include('formpartials/previous_educational_qualification.php')?>
                <!-- end of prev educational qualifications section -->

                <!-- english language proficiency -->
                <?php include('formpartials/eng_language_proficiency.php')?>

                <!-- end of english language proficiency section -->

                <!-- financial details -->
                <?php include('formpartials/financial_details.php')?>

                <!-- end of financial details section -->

                <!-- sport details -->
                <?php include('formpartials/sports_details.php')?>

                <!-- end of sports details section -->

                <!-- future desire -->
                <?php include('formpartials/future_desire.php')?>

                <!-- end of future desire section -->

                <!-- statement of purpose -->
                <?php include('formpartials/statement_of_purpose.php')?>

                <!-- end of statement of purpose section -->

                <!-- academic referees -->
                <?php include('formpartials/academic_referees.php')?>

                <!-- end of academic referees section -->

                <!-- miscellaneous -->
                <?php include('formpartials/miscellaneous.php')?>

                <!-- end of miscellaneous section -->

                <div class = "mt-4 pb-5">
                    <button type = "submit" id="submit" name="submit" class = "btn btn-blue text-uppercase ls-1">submit application</button>
                </div>
            </div>
        </form>
    </div>
    <!-- end of main from page wrapper -->
    


    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- jquery repeater -->
    <script src = "assets/plugins/jquery.repeater.js"></script>
    <!-- nepali date picker js file -->
    <script src = "assets/plugins/nepali-date-picker/js/nepali.datepicker.v3.7.min.js"></script>
    <!-- english date picker js file -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <!-- custom js file  -->
    <script src = "assets/js/script.js"></script>
</body>
</html>