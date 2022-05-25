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
//$grade='';
//$school='';
//$passed_year='';
//$percent_obtain='';
//$division='';
//$board='';
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
$image='';

if(isset($_GET['form_id']) && $_GET['form_id']!=''){
    $image='';
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
//$grade=$row['grade'];
//$school=$row['school'];
//$passed_year=$row['passed_year'];
//$percent_obtain=$row['percent_obtain'];
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
    $guardian_name=get_safe_value($con,$_POST['guardian_name']);
    $guardian_relation=get_safe_value($con,$_POST['guardian_relation']);
    $guardian_designation=get_safe_value($con,$_POST['guardian_designation']);
    $guardian_nationality=get_safe_value($con,$_POST['guardian_nationality']);
    $guardian_contact_num=get_safe_value($con,$_POST['guardian_contact_num']);
    $proposed_study=get_safe_value($con,$_POST['proposed_study']);
    //$grade=get_safe_value($con,$_POST['grade']);
    //$school=get_safe_value($con,$_POST['school']);
    //$passed_year=get_safe_value($con,$_POST['passed_year']);
    //$percent_obtain=get_safe_value($con,$_POST['percent_obtain']);
    $eng_reading=get_safe_value($con,$_POST['eng_reading']);
    $eng_writing=get_safe_value($con,$_POST['eng_writing']);
    $eng_speaking=get_safe_value($con,$_POST['eng_speaking']);
    $other_language=get_safe_value($con,$_POST['other_language']);
    $pay_fee=get_safe_value($con,$_POST['pay_fee']);

    $qualify_scholarship=get_safe_value($con,$_POST['qualify_scholarship']);
    $main_category_scholarship=$_POST['main_category_scholarship'];
    $chkstr4  =implode(",",$main_category_scholarship);

    $sub_category_scholarship=get_safe_value($con,$_POST['sub_category_scholarship']);

    $sport_hobby=$_POST['sport_hobby'];
    $chkstr1  =implode(",",$sport_hobby);

    $sport_experience=$_POST['sport_experience'];
    $chkstr5  =implode(",",$sport_experience);

    $have_experience=get_safe_value($con,$_POST['have_experience']);

    $future_desire=$_POST['future_desire'];
    $chkstr2  =implode(",",$future_desire);

    $purpose=get_safe_value($con,$_POST['purpose']);
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
    $require_hostel=get_safe_value($con,$_POST['require_hostel']);
    $require_transport=get_safe_value($con,$_POST['require_transport']);
    $pick_drop_station=get_safe_value($con,$_POST['pick_drop_station']);

    $source_of_information=$_POST['source_of_information'];
    $chkstr3  =implode(",",$source_of_information);
    $image=get_safe_value($con,$_POST['image']);

    mysqli_query($con,"insert into personal_details(first_name,middle_name,last_name,dob_bs,dob_ad,sex,nationality,citizenship_no,permanent_addr_address,permanent_addr_telephone,permanent_addr_phone,contact_addr_address,contact_addr_telephone,contact_addr_phone,district,email,province,presently_living,father_name,father_living,father_occupation,father_nationality,father_telephone,father_designation,mother_name,mother_living,mother_occupation,mother_nationality,mother_telephone,mother_designation,guardian_name,guardian_relation,guardian_designation,guardian_nationality,guardian_contact_num,proposed_study,eng_reading,eng_writing,eng_speaking,other_language,pay_fee,qualify_scholarship,main_category_scholarship,sub_category_scholarship,sport_hobby,sport_experience,have_experience,future_desire,purpose,first_referee_name,first_referee_officename,first_referee_position,first_referee_telephone,first_referee_email,second_referee_name,second_referee_officename,second_referee_position,second_referee_telephone,second_referee_email,require_hostel,require_transport,pick_drop_station,source_of_information,image) values('$first_name','$middle_name','$last_name','$dob_bs','$dob_ad','$sex','$nationality','$citizenship_no','$permanent_addr_address','$permanent_addr_telephone','$permanent_addr_phone','$contact_addr_address','$contact_addr_telephone','$contact_addr_phone','$district','$email','$province','$presently_living','$father_name','$father_living','$father_occupation','$father_nationality','$father_telephone','$father_designation','$mother_name','$mother_living','$mother_occupation','$mother_nationality','$mother_telephone','$mother_designation','$guardian_name','$guardian_relation','$guardian_designation','$guardian_nationality','$guardian_contact_num','$proposed_study','$eng_reading','$eng_writing','$eng_speaking','$other_language','$pay_fee','$qualify_scholarship','$chkstr4','$sub_category_scholarship','$chkstr1','$chkstr5','$have_experience','$chkstr2','$purpose','$first_referee_name','$first_referee_officename','$first_referee_position','$first_referee_telephone','$first_referee_email','$second_referee_name','$second_referee_officename','$second_referee_position','$second_referee_telephone','$second_referee_email','$require_hostel','$require_transport','$pick_drop_station','$chkstr3','$image')");
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
                                <input type = "file" name = "image" accept = "image/*" class = "form-control" id = "img-upload-input" required value="<?php echo $image?>">
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
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">personal details</h4>
                    </div>
                    <div class = "form-elem row">
                        <div class = "col-lg-4 col-md-6 mb-3">
                            <label for = "" class = "form-label fw-5">First Name</label>
                            <input type = "text" class = "form-control" name = "first_name" required value="<?php echo $first_name?>">
                        </div>
                        <div class = "col-lg-4 col-md-6 mb-3">
                            <label for = "" class = "form-label fw-5">Middle Name</label>
                            <input type = "text" class = "form-control" name = "middle_name" value="<?php echo $middle_name?>">
                        </div>
                        <div class = "col-lg-4 col-md-6 mb-3">
                            <label for = "" class = "form-label fw-5">Last Name</label>
                            <input type = "text" class = "form-control" name = "last_name" required value="<?php echo $last_name?>">
                        </div>
                    </div>

                    <div class = "form-elem row">
                        <div class = "col-lg-4 col-md-6 mb-3">
                            <label for = "" class = "form-label fw-5">Date of Birth (B.S.)</label>
                            <input type = "text" class = "form-control nepali-datepicker-dob" name = "dob_bs" required value="<?php echo $dob_bs?>">
                        </div>
                        <div class = "col-lg-4 col-md-6 mb-3">
                            <label for = "" class = "form-label fw-5">Date of Birth (A.D.)</label>
                            <input type = "text" class = "form-control english-datepicker" name = "dob_ad" required value="<?php echo $dob_ad?>">
                        </div>
                    </div>

                    <div class = "form-elem row">
                        <div class = "col-12 d-flex">
                            <label for = "" class = "form-label fw-5 me-4">Sex: </label>
                            <div class = "col-12 mb-3">
                                <div class = "form-check form-check-inline">
                                    <input type = "radio" class = "form-check-input" id = "male"  name="sex" value="male" >Male
                                   
                                </div>
                                <div class = "form-check form-check-inline">
                                    <input type = "radio" class = "form-check-input" id = "female" name="sex" value="female">Female
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem-group">
                        <div class = "form-elem row">
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Nationality: </label>
                                <input type = "text" class = "form-control" name = "nationality" required value="<?php echo $nationality?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "middle_name" class = "form-label fw-5">Citizenship No.:</label>
                                <input type = "text" class = "form-control" name = "citizenship_no" required value="<?php echo $citizenship_no?>">
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem-group">
                        <p class = "form-elem-group-title">
                            <span class = "form-elem-question-icon">
                                <i class="fa-solid fa-circle-info"></i>
                            </span>
                            Permanent Address:
                        </p>
                        <div class = "form-elem row">
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Address</label>
                                <input type = "text" class = "form-control" name = "permanent_addr_address" required value="<?php echo $permanent_addr_address?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Telephone</label>
                                <input type = "text" class = "form-control" name = "permanent_addr_telephone" required value="<?php echo $permanent_addr_telephone?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Phone No.</label>
                                <input type = "text" class = "form-control" name = "permanent_addr_phone" required value="<?php echo $permanent_addr_phone?>">
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem-group">
                        <p class = "form-elem-group-title">
                            <span class = "form-elem-question-icon">
                                <i class="fa-solid fa-circle-info"></i>
                            </span>
                            Contact Address:
                        </p>
                        <div class = "form-elem row">
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Address</label>
                                <input type = "text" class = "form-control" name = "contact_addr_address" required value="<?php echo $contact_addr_address?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Telephone</label>
                                <input type = "text" class = "form-control" name = "contact_addr_telephone" required value="<?php echo $contact_addr_telephone?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Phone No.</label>
                                <input type = "text" class = "form-control" name = "contact_addr_phone" required value="<?php echo $contact_addr_phone?>">
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem-group">
                        <div class = "form-elem row">
                            <div class = "col-lg-4 col-md-6 mb-3">
                            <label for = "" class = "form-label fw-5">District</label>
                                <select class = "form-select" id = "" name="district">District
                                    <option value="">-- Select District --</option>
                                    <option value = "kathmandu">Kathmandu</option>
                                    <option value = "lalitpur">Lalitpur</option>
                                </select>
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">E-mail</label>
                                <input type = "email" class = "form-control" name = "email" required value="<?php echo $email?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                            <label for = "" class = "form-label fw-5">Province</label>
                                <select class = "form-select" id = "" name="province">Province
                                    <option selected disabled>-- Select Province --</option>
                                    <option  value="Province_No_1">Province No. 1</option>
                                    <option  value="Province_No_2">Province No.2</option>
                                    <option  value="Province_No_3">Province No.3</option>
                                    <option  value="Gandaki_Pradesh">Gandaki Pradesh</option>
                                    <option value = "Province_No_5">Province No.5</option>
                                    <option value = "Birendranagar">Birendranagar</option>
                                    <option value = "Godwari">Godwari</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem row">
                        <label for = "" class = "form-label fw-5">Presently Living With</label>
                        <div class = "col-12">
                            <div class = "form-check form-check-inline mb-2">
                                <input type = "radio" class = "form-check-input" name = "presently_living" id = "" value="parent">Parent
                             
                            </div>
                            <div class = "form-check form-check-inline mb-2">
                                <input type = "radio" class = "form-check-input" name = "presently_living" id = "" value="relative">Relative
                              
                            </div>
                            <div class = "form-check form-check-inline mb-2">
                                <input type = "radio" class = "form-check-input" name = "presently_living" id = "" value="local_guardian">Local Guardian
                               
                            </div>
                            <div class = "form-check form-check-inline mb-2">
                                <input type = "radio" class = "form-check-input" name = "presently_living" id = "" value="hostel">Hostel
                           
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of personal details section -->

                <!-- family details section -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">family details</h4>
                    </div>

                    <div class = "form-elem-group">
                        <p class = "form-elem-group-title">
                            <span class = "form-elem-question-icon">
                                <i class="fa-solid fa-circle-info"></i>
                            </span>
                            Father's information:
                        </p>
                        <div class = "form-elem row">
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Father's Name</label>
                                <input type = "text" class = "form-control" id = "" name = "father_name" required value="<?php echo $father_name ?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5 d-block">Living</label>
                                <div class = "form-check form-check-inline">
                                    <label for = "" class = "form-check-label fw-5"> In Nepal</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "father_living" value="in_nepal">
                                </div>
                                <div class = "form-check form-check-inline">
                                    <label for = "" class = "form-check-label fw-5">Abroad</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "father_living" value="abroad">
                                </div>
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Occupation</label>
                                <input type = "text" class = "form-control" name = "father_occupation" required value="<?php echo $father_occupation?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Nationality</label>
                                <input type = "text" class = "form-control" id = "" name = "father_nationality" required value="<?php echo $father_nationality ?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Telephone</label>
                                <input type = "text" class = "form-control" id = "" name = "father_telephone" required value="<?php echo $father_telephone?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Designation</label>
                                <input type = "text" class = "form-control" id = "" name = "father_designation" required value="<?php echo $father_designation ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class = "form-elem-group">
                        <p class = "form-elem-group-title">
                            <span class = "form-elem-question-icon">
                                <i class="fa-solid fa-circle-info"></i>
                            </span>
                            Mother's information:
                        </p>
                        <div class = "form-elem row">
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Mother's Name</label>
                                <input type = "text" class = "form-control" id = "" name = "mother_name" required value="<?php echo $mother_name?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5 d-block">Living</label>
                                <div class = "form-check form-check-inline">
                                    <label for = "" class = "form-check-label fw-5"> In Nepal</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "mother_living" value="in_nepal">
                                </div>
                                <div class = "form-check form-check-inline">
                                    <label for = "" class = "form-check-label fw-5">Abroad</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "mother_living" value="abroad">
                                </div>
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Occupation</label>
                                <input type = "text" class = "form-control" id = "" name = "mother_occupation" required value="<?php echo $mother_occupation?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Nationality</label>
                                <input type = "text" class = "form-control" id = "" name = "mother_nationality" required value="<?php echo $mother_nationality?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Telephone</label>
                                <input type = "text" class = "form-control" id = "" name = "mother_telephone" required value="<?php echo $mother_telephone?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Designation</label>
                                <input type = "text" class = "form-control" id = "" name = "mother_designation" required value="<?php echo $mother_designation?>">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of family details section -->

                <!-- guardian details section -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">if you are staying with a local guardian</h4>
                    </div>

                    <div class = "form-elem-group">
                        <div class = "form-elem row">
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Guardian's Name</label>
                                <input type = "text" class = "form-control"  name = "guardian_name" required value="<?php echo $guardian_name?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Relation</label>
                                <input type = "text" class = "form-control" id = "" name = "guardian_relation" value="<?php echo $guardian_relation?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Designation</label>
                                <input type = "text" class = "form-control" id = "" name = "guardian_designation" value="<?php echo $guardian_designation?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Nationality</label>
                                <input type = "text" class = "form-control" id = "" name = "guardian_nationality" value="<?php echo $guardian_nationality?>">
                            </div>
                            <div class = "col-lg-4 col-md-6 mb-3">
                                <label for = "" class = "form-label fw-5">Contact No.</label>
                                <input type = "text" class = "form-control" id = "" name = "guardian_contact_num" value="<?php echo $guardian_contact_num?>">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of guardian details section -->

                <!-- proposed study section -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6" name="proposed_study">proposed study</h4>
                    </div>

                    <div class = "form-elem-group">
                        <div class = "form-elem row">
                            <div class = "col-lg-3 col-md-4 col-sm-6">
                                <div>
                                    <div class = "form-check mb-2">
                
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="montessori/pg">Montessori/PG
                                    </div>
                                    <div class = "form-check mb-2">
                                      
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="nursery">Nursery
                                    </div>
                                    <div class = "form-check mb-2">
                                       
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="lkg">L.K.G
                                    </div>
                                    <div class = "form-check mb-2">
                                       
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="ukg">U.K.G.
                                    </div>
                                </div>
                            </div>

                            <div class = "col-lg-3 col-md-4 col-sm-6">
                                <div>
                                    <div class = "form-check mb-2">
                                       
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade1">Grade 1
                                    </div>
                                    <div class = "form-check mb-2">
                                       
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade2">Grade 2
                                    </div>
                                    <div class = "form-check mb-2">
                                       
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade3">Grade 3
                                    </div>
                                    <div class = "form-check mb-2">
                                      
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade4">Grade 4
                                    </div>
                                    <div class = "form-check mb-2">
                                       
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade5">Grade 5
                                    </div>
                                </div>
                            </div>

                            <div class = "col-lg-3 col-md-4 col-sm-6">
                                <div>
                                    <div class = "form-check mb-2">
                                      
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade6">Grade 6
                                    </div>
                                    <div class = "form-check mb-2">
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade7">Grade 7
                                    </div>
                                    <div class = "form-check mb-2">
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade8">Grade 8
                                    </div>
                                    <div class = "form-check mb-2">
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade9">Grade 9
                                    </div>
                                    <div class = "form-check mb-2">
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade10">Grade 10
                                    </div>
                                </div>
                            </div>

                            <div class = "col-lg-3 col-md-4 col-sm-6">
                                <div>
                                    <div class = "form-check mb-2">
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade11">Grade 11
                                    </div>
                                    <div class = "form-check mb-2">
                                        <input type = "radio" class = "form-check-input" id = "" name = "proposed_study" value="grade12">Grade 12
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of proposed study section -->

                <!-- previous educational qualifications section -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">previous educational qualifications</h4>
                    </div>

                    <div class = "repeater">
                        <div class = "form-elem-group repeater" data-repeater-list="group-a">
                            <!-- repeater item -->
                            <div class = "form-elem row" data-repeater-item>
                                <div class = "col-xl-1 col-md-4 col-sm-6 mb-3">
                                    <label for = "" class = "form-label fw-5">Grade</label>
                                    <select class = "form-select" name = "grade" id = "">
                                        <!-- <option selected disabled>---</option> -->
                                        <option value = "montessori/pg">Montessori/PG</option>
                                        <option value = "nursery">Nursery</option>
                                        <option value = "lkg">L.K.G.</option>
                                        <option value = "ukg">U.K.G.</option>
                                        <option value = "grade1">Grade 1</option>
                                        <option value = "grade2">Grade 2</option>
                                        <option value = "grade3">Grade 3</option>
                                        <option value = "grade4">Grade 4</option>
                                        <option value = "grade5">Grade 5</option>
                                        <option value = "grade6">Grade 6</option>
                                        <option value = "grade7">Grade 7</option>
                                        <option value = "grade8">Grade 8</option>
                                        <option value = "grade9">Grade 9</option>
                                        <option value = "grade10">Grade 10</option>
                                        <option value = "grade11">Grade 11</option>
                                        <option value = "grade12">Grade 12</option>
                                    </select>
                                </div>
                                <div class = "col-xl-3 col-md-4 col-sm-6 mb-3">
                                    <label for = "" class = "form-label fw-5">School</label>
                                    <input type = "text" class = "form-control" id = "" name = "school" value="<?php echo $school?>">
                                </div>
                                <div class = "col-xl-2 col-md-4 col-sm-6 mb-3">
                                    <label for = "" class = "form-label fw-5">Passed Year (B.S.)</label>
                                    <input type = "date" class = "form-control" id = "" name = "passed_year" value="<?php echo $passed_year?>">
                                </div>
                                <div class = "col-xl-2 col-md-4 col-sm-6 mb-3">
                                    <label for = "" class = "form-label fw-5">% Obtained</label>
                                    <input type = "number" class = "form-control" id = "" name = "percent_obtain" min = "1" max = "100" value="<?php echo $percent_obtain?>">
                                </div>
                                <div class = "col-xl-1 col-md-4 col-sm-6 mb-3">
                                    <label for = "" class = "form-label fw-5">Division</label>
                                    <select class = "form-select" name = "" id = "">
                                        <option value = "">First</option>
                                        <option value = "">Second</option>
                                        <option value = "">Third</option>
                                    </select>
                                </div>
                                <div class = "col-xl-2 col-md-4 col-sm-6 mb-3">
                                    <label for = "" class = "form-label fw-5">Board</label>
                                    <select class = "form-select" name = "" id = "">
                                        <option value = "">PABSON</option>
                                        <option value = "">NPABSON</option>
                                    </select>
                                </div>
                                <div class = "col-xl-1 col-md-4 col-sm-6 mb-3 d-flex align-items-center justify-content-center">
                                    <button data-repeater-delete type = "button" value = "Delete" class = "btn btn-danger btn-circle">
                                        <i class=" fas fa-regular fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- end of repeater item -->
                        </div>
                        <button type = "button" data-repeater-create value = "Add" class = "btn btn-primary btn-circle">
                            <i class = "fas fa-plus"></i>
                        </button>
                    </div>  
                </section>
                <!-- end of prev educational qualifications section -->

                <!-- english language proficiency -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">english language proficiency</h4>
                    </div>

                    <div class = "form-elem row">
                        <div class = "col-12 d-sm-flex">
                            <p class = "fw-5 me-3" style = "min-width: 70px;">Reading: </p>
                            <div class = "col-auto">
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Excellent</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_reading" value = "excellent">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Good</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_reading" value = "good">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Fair</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_reading" value = "fair">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Poor</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_reading" value = "poor">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "form-elem row">
                        <div class = "col-12 d-sm-flex">
                            <p class = "fw-5 me-3" style = "min-width: 70px;">Writing: </p>
                            <div class = "col-auto">
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Excellent</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_writing" value = "excellent">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Good</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_writing" value = "good">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Fair</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_writing" value = "fair">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Poor</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_writing" value = "poor">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem row">
                        <div class = "col-12 d-sm-flex">
                            <p class = "fw-5 me-3" style = "min-width: 70px;">Speaking: </p>
                            <div class = "col-auto">
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Excellent</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_speaking" value = "excellent">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Good</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_speaking" value = "good">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Fair</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_speaking" value = "fair">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Poor</label>
                                    <input type = "radio" class = "form-check-input" id = "" name="eng_speaking" value = "poor">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem mb-2 d-flex flex-wrap">
                        <label for = "" class = "col-form-label  fw-5 me-4">Other language Known (Please specify)</label>
                        <div class = "col-12 col-md-auto">
                            <input type = "text" class = "form-control" name = "other_language" value="<?php echo $other_language?>">
                        </div>
                    </div>
                </section>
                <!-- end of english language proficiency section -->

                <!-- financial details -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">financial details</h4>
                    </div>

                    <div class = "form-elem row mb-2">
                        <div class = "col-12 d-md-flex">
                            <p class = "fw-5 me-3">
                                <span class = "form-elem-question-icon">
                                    <i class="fa-solid fa-circle-question"></i>
                                </span>
                                Who will pay your tuition fee? </p>
                            <div class = "col-auto">
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Yourself</label>
                                    <input type = "radio" class = "form-check-input" name = "pay_fee" value="yourself">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Parent</label>
                                    <input type = "radio" class = "form-check-input" name = "pay_fee" value="parent">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Relative</label>
                                    <input type = "radio" class = "form-check-input"  name = "pay_fee" value="relative">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Guardian</label>
                                    <input type = "radio" class = "form-check-input" name = "pay_fee" value="guardian">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem row mb-2">
                        <div class = "col-12 d-sm-flex">
                            <p class = "fw-5 me-3">
                                <span class = "form-elem-question-icon">
                                    <i class="fa-solid fa-circle-question"></i>
                                </span>
                                Do you qualify for scholarship as per our Scholarship Scheme? <span class = "form-text fw-4"><br>(Please see the Scholarship Scheme)</span></p>
                            
                            <div class = "col-auto">
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Yes</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "qualify_scholarship" value="yes">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">No</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "qualify_scholarship" value="no">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem row mb-2">
                        <div class = "col-12">
                            <p class = "fw-5">If yes, please specify the main category and its sub-category: <br> <span class = "form-text fw-4">(Please fill-up the Scholarship Application Form)</span></p>
                        </div>
                        <div class = "col-12 d-lg-flex">
                            <p class = "fw-5 me-3">Main Category:</p>
                            <div class = "col-auto">
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Academic</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "main_category_scholarship[]" value="academic">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Talent</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "main_category_scholarship[]" value="talent">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Humanitarian</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "main_category_scholarship[]" value="humanitarian">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Family & Alumnus</label>
                                    <input type = "radio" class = "form-check-input" id = ""name = "main_category_scholarship[]" value="family&alumnus">
                                </div>
                            </div>
                        </div>

                        <div class = "form-elem mb-2 d-flex flex-wrap">
                            <label for = "" class = "col-form-label  fw-5 me-4">Sub-Category</label>
                            <div class = "col-sm-12 col-md-auto">
                                <input type = "text" class = "form-control form-control-bottom-only" name = "sub_category_scholarship" required value="<?php echo $sub_category_scholarship?>">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of financial details section -->

                <!-- sport details -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">sport details</h4>
                    </div>

                    <div class = "form-elem row mb-2">
                        <div class = "col-12">
                            <p class = "fw-5 me-3">
                                <span class = "form-elem-question-icon">
                                    <i class="fa-solid fa-circle-question"></i>
                                </span>
                                Would you like? </p>
                            <div class = "col-auto">
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Futsal</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "sport_hobby[]" value="futsal">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Football</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "sport_hobby[]" value="football">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Swimming</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "sport_hobby[]" value="swimming">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Basketball</label>
                                    <input type = "checkbox" class = "form-check-input" name = "sport_hobby[]" value="basketball">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Badminton</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "sport_hobby[]" value="badminton">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">T.T.</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "sport_hobby[]" value="t_t">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Martial arts</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "sport_hobby[]" value="martial_arts">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Volleyball</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "sport_hobby[]" value="volleyball">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Cricket</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "sport_hobby[]" value="cricket">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Lawn tennis</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "sport_hobby[]" value="lawn_tennis">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Yoga</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "sport_hobby[]" value="yoga">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem row mb-2">
                        <div class = "col-12">
                            <p class = "fw-5 me-3">
                                <span class = "form-elem-question-icon">
                                    <i class="fa-solid fa-circle-question"></i>
                                </span>
                                Do you have any experience? </p>
                            <div class = "col-auto d-md-flex align-items-center">
                                <div class = "form-check form-check-inline mb-2 mb-md-0">
                                    <label for = "" class = "form-check-label">National</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "sport_experience[]" value="national">
                                </div>
                                <div class = "form-check form-check-inline mb-2 mb-md-0">
                                    <label for = "" class = "form-check-label">International</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "sport_experience[]" value="international">
                                </div>
                                <div class = "mb-0 d-sm-0 d-sm-flex align-items-center">
                                    <label for = "" class = "form-label me-3 mb-0">If yes:</label>
                                    <div>
                                        <input type = "text" class = "form-control form-control-bottom-only" id = "" name = "have_experience" value="<?php echo $have_experience?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of sports details section -->

                <!-- future desire -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">future desire</h4>
                    </div>

                    <div class = "form-elem row mb-2">
                        <div class = "col-12">
                            <p class = "fw-5 me-3">
                                <span class = "form-elem-question-icon">
                                    <i class="fa-solid fa-circle-question"></i>
                                </span>
                                Would you like to be? </p>
                            <div class = "col-auto">
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Doctor</label>
                                    <input type = "checkbox" class = "form-check-input" id = "" name = "future_desire[]" value="doctor">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Engineer</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="engineer">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Pilot</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="pilot">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Banker</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="banker">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">CA</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="CA">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Business</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="business">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Nurse</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="nurse">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Lawyer</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="lawyer">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Media/Journalist</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="media/journalist">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Professor</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="professor">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Philosopher</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="philosopher">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Writer</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="writer">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Actor/Actress</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire" value="actor/actress">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Manager</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="manager">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Others</label>
                                    <input type = "checkbox" class = "form-check-input" id = ""  name = "future_desire[]" value="others">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of future desire section -->

                <!-- statement of purpose -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">statement of purpose</h4>
                    </div>

                    <div class = "form-elem mb-2">
                        <div class = "col-12">
                            <p class = "fw-5">Please give any other information which your wish to submit in support of your application form, you should include information on why you are applying for it and what are your career aspirations along with any other informations that you would like to give.</p>
                            <div class = "mb-2">
                                <textarea class = "form-control" rows = "4" name="purpose" required value="<?php echo $purpose ?>"></textarea>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of statement of purpose section -->

                <!-- academic referees -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">academic referees</h4>
                    </div>

                    <div class = "form-elem mb-2">
                        <div class = "col-12">
                            <p class = "fw-5">Please give the under mentioned details of at least one referee who know you very well personally.</p>
                            <div class = "form-elem-group row">
                                <div class = "col-lg-6">
                                    <div class = "form-elem row mb-2">
                                        <div class = "col-sm-8 offset-sm-4">
                                            <p class = "fw-5 text-uppercase">1. referee</p>
                                        </div>
                                    </div>
                                    <div class = "form-elem row mb-2 align-items-center">
                                        <label for = "" class = "col-sm-4 form-label fw-5">Name:</label>
                                        <div class = "col-sm-6">
                                            <input type = "text" class = "form-control" name="first_referee_name" required value="<?php echo $first_referee_name?>">
                                        </div>
                                    </div>
                                    <div class = "form-elem row mb-2 align-items-center">
                                        <label for = "" class = "col-sm-4 form-label fw-5">Office Name:</label>
                                        <div class = "col-sm-6">
                                            <input type = "text" class = "form-control" name="first_referee_officename" required value="<?php echo $first_referee_officename?>">
                                        </div>
                                    </div>
                                    <div class = "form-elem row mb-2 align-items-center">
                                        <label for = "" class = "col-sm-4 form-label fw-5">Position:</label>
                                        <div class = "col-sm-6">
                                            <input type = "text" class = "form-control" name="first_referee_position" required value="<?php echo $first_referee_position?>">
                                        </div>
                                    </div>
                                    <div class = "form-elem row mb-2 align-items-center">
                                        <label for = "" class = "col-sm-4 form-label fw-5">Telephone:</label>
                                        <div class = "col-sm-6">
                                            <input type = "text" class = "form-control" name="first_referee_telephone" required value="<?php echo $first_referee_telephone?>">
                                        </div>
                                    </div>
                                    <div class = "form-elem row mb-2 align-items-center">
                                        <label for = "" class = "col-sm-4 form-label fw-5">E-Mail:</label>
                                        <div class = "col-sm-6">
                                            <input type = "text" class = "form-control" name="first_referee_email" required value="<?php echo $first_referee_email?>">
                                        </div>
                                    </div>
                                </div>

                                <div class = "col-lg-6">
                                    <div class = "form-elem row mb-2">
                                        <div class = "col-sm-8 offset-sm-4">
                                            <p class = "fw-5 text-uppercase">2. referee</p>
                                        </div>
                                    </div>
                                    <div class = "form-elem row mb-2 align-items-center">
                                        <label for = "" class = "col-sm-4 form-label fw-5">Name:</label>
                                        <div class = "col-sm-6">
                                            <input type = "text" class = "form-control" name="second_referee_name" value="<?php echo $second_referee_name?>">
                                        </div>
                                    </div>
                                    <div class = "form-elem row mb-2 align-items-center">
                                        <label for = "" class = "col-sm-4 form-label fw-5">Office Name:</label>
                                        <div class = "col-sm-6">
                                            <input type = "text" class = "form-control" name="second_referee_officename" value="<?php echo $second_referee_officename?>">
                                        </div>
                                    </div>
                                    <div class = "form-elem row mb-2 align-items-center">
                                        <label for = "" class = "col-sm-4 form-label fw-5">Position:</label>
                                        <div class = "col-sm-6">
                                            <input type = "text" class = "form-control" name="second_referee_position" value="<?php echo $second_referee_position?>">
                                        </div>
                                    </div>
                                    <div class = "form-elem row mb-2 align-items-center">
                                        <label for = "" class = "col-sm-4 form-label fw-5">Telephone:</label>
                                        <div class = "col-sm-6">
                                            <input type = "text" class = "form-control" name="second_referee_telephone" value="<?php echo $second_referee_telephone?>">
                                        </div>
                                    </div>
                                    <div class = "form-elem row mb-2 align-items-center">
                                        <label for = "" class = "col-sm-4 form-label fw-5">E-Mail:</label>
                                        <div class = "col-sm-6">
                                            <input type = "text" class = "form-control" name="second_referee_email" value="<?php echo $second_referee_email?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of academic referees section -->

                <!-- miscellaneous -->
                <section class = "form-page-section">
                    <div class = "form-page-section-title">
                        <h4 class = "text-uppercase ls-1 fw-6">miscellaneous</h4>
                    </div>

                    <div class = "form-elem row mb-2">
                        <div class = "col-12 d-md-flex">
                            <p class = "fw-5 me-3">
                                <span class = "form-elem-question-icon">
                                    <i class="fa-solid fa-circle-question"></i>
                                </span>
                                Do you require Hostel? </p>
                            <div class = "col-auto">
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Yes</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "require_hostel" value="yes">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">No</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "require_hostel" value="no">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem row mb-2">
                        <div class = "col-12 d-md-flex">
                            <p class = "fw-5 me-3">
                                <span class = "form-elem-question-icon">
                                    <i class="fa-solid fa-circle-question"></i>
                                </span>
                                Do you require the School's transportation? </p>
                            <div class = "col-auto">
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">Yes</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "require_transport" value="yes">
                                </div>
                                <div class = "form-check form-check-inline mb-2">
                                    <label for = "" class = "form-check-label">No</label>
                                    <input type = "radio" class = "form-check-input" id = "" name = "require_transport" value="no">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "form-elem row mb-2">
                        <div class = "col-12 d-md-flex">
                            <div class = "form-elem mb-2 d-flex flex-wrap">
                                <label for = "" class = "col-form-label fw-5 me-4 fst-italic">If yes, please mention your pick up & drop station</label>
                                <div class = "col-12 col-md-auto">
                                    <input type = "text" class = "form-control" name = "pick_drop_station" value="<?php echo $pick_drop_station ?>">
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class = "form-elem row mb-2">
                        <div class = "col-12">
                            <p class = "fw-5">
                                <span class = "form-elem-question-icon">
                                    <i class="fa-solid fa-circle-question"></i>
                                </span>
                                What was the source of information which led you to know Morgan International School?</p>
                            <div class = "col-12">
                                <div class = "row">
                                    <div class = "col-md-6">
                                        <div class = "form-check form-check-inline mb-2">
                                            <label for = "" class = "form-check-label">Friend</label>
                                            <input type = "checkbox" class = "form-check-input" id = "" name = "source_of_information[]" value="friend">
                                        </div>
                                    </div>
                                    <div class = "col-md-6">
                                        <div class = "form-check form-check-inline mb-2">
                                            <label for = "" class = "form-check-label">Family/Relatives</label>
                                            <input type = "checkbox" class = "form-check-input" id = "" name = "source_of_information[]" value="family">
                                        </div>
                                    </div>
                                    <div class = "col-md-6">
                                        <div class = "form-check form-check-inline mb-2">
                                            <label for = "" class = "form-check-label">Former Students of Morgan</label>
                                            <input type = "checkbox" class = "form-check-input" id = "" name = "source_of_information[]" value="former_student">
                                        </div>
                                    </div>
                                    <div class = "col-md-6">
                                        <div class = "form-check form-check-inline mb-2">
                                            <label for = "" class = "form-check-label">Teacher of previous School</label>
                                            <input type = "checkbox" class = "form-check-input" id = "" name = "source_of_information[]" value="teacher_of_previous_school">
                                        </div>
                                    </div>
                                    <div class = "col-md-6">
                                        <div class = "form-check form-check-inline mb-2">
                                            <label for = "" class = "form-check-label">Morgan International School's Prospectus</label>
                                            <input type = "checkbox" class = "form-check-input" id = "" name = "source_of_information[]" value="school_prospectus">
                                        </div>
                                    </div>
                                    <div class = "col-md-6">
                                        <div class = "form-check form-check-inline mb-2">
                                            <label for = "" class = "form-check-label">Newspaper Advertisement</label>
                                            <input type = "checkbox" class = "form-check-input" id = "" name = "source_of_information[]" value="newspaper">
                                        </div>
                                    </div>
                                    <div class = "col-md-6">
                                        <div class = "form-check form-check-inline mb-2">
                                            <label for = "" class = "form-check-label">F.M. Radio Advertisement</label>
                                            <input type = "checkbox" class = "form-check-input" id = "" name = "source_of_information[]" value="f.m._radio">
                                        </div>
                                    </div>
                                    <div class = "col-md-6">
                                        <div class = "form-check form-check-inline mb-2">
                                            <label for = "" class = "form-check-label">Exhibition/Seminar/Stall</label>
                                            <input type = "checkbox" class = "form-check-input" id = "" name = "source_of_information[]" value="exhibition/seminar/stall">
                                        </div>
                                    </div>
                                    <div class = "col-md-6">
                                        <div class = "form-check form-check-inline mb-2">
                                            <label for = "" class = "form-check-label">Internet</label>
                                            <input type = "checkbox" class = "form-check-input" id = "" name = "source_of_information[]" value="internet">
                                        </div>
                                    </div>
                                    <div class = "col-md-6">
                                        <div class = "form-check form-check-inline mb-2">
                                            <label for = "" class = "form-check-label">Other (please specify)</label>
                                            <input type = "checkbox" class = "form-check-input" id = "" name = "source_of_information[]" value="other">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>
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