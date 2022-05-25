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