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
                                    <select class = "form-select" name = "grade[]" id = "">
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
                                    <input type = "text" class = "form-control" id = "" name = "school[]" >
                                </div>
                                <div class = "col-xl-2 col-md-4 col-sm-6 mb-3">
                                    <label for = "" class = "form-label fw-5">Passed Year (B.S.)</label>
                                    <input type = "date" class = "form-control" id = "" name = "passed_year[]" value="<?php echo $passed_year?>">
                                </div>
                                <div class = "col-xl-2 col-md-4 col-sm-6 mb-3">
                                    <label for = "" class = "form-label fw-5">% Obtained</label>
                                    <input type = "number" class = "form-control" id = "" name = "percent_obtain[]" min = "1" max = "100">
                                </div>
                                <div class = "col-xl-1 col-md-4 col-sm-6 mb-3">
                                    <label for = "" class = "form-label fw-5">Division</label>
                                    <select class = "form-select" name = "division[]" id = "">
                                        <option value = "">First</option>
                                        <option value = "">Second</option>
                                        <option value = "">Third</option>
                                    </select>
                                </div>
                                <div class = "col-xl-2 col-md-4 col-sm-6 mb-3">
                                    <label for = "" class = "form-label fw-5">Board</label>
                                    <select class = "form-select" name = "board[]" id = "">
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