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