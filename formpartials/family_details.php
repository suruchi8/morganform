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