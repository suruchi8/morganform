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