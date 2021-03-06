<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(<?php echo base_url('assets/images/dubai_3.jpg') ?>)">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1 style="margin-bottom:0">Dubai</h1>
                                <h3 style="color:white!important;font-weight:300">Top Holiday Experiences</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<!-- <?php echo '<pre>';
print_r($tour)?> -->
<div class="nav_heading bg-primary">
    <h3><?php echo $tour[0]['name'] ?></h3>
</div>
<div>
    <ul class="nav_link">
        <li class="nav-item">
            <a class="nav-link" href="#details"><i class="fas fa-file-alt"></i> Details</a>
        </li>
        <li class="nav-item" style="display:none">
            <a class="nav-link" href="#"><i class="fas fa-list"></i> Inclusions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#useful_info"><i class="fas fa-info-circle"></i>Useful Info</a>
        </li>
    </ul>
</div>
<div class="container" style="width:95%">
    <div class="row">
        <!-- Left side working -->
        <div class="left col-sm-8">
            <!-- Experience highlight area -->
            <!-- <div class="experience">
                <div class="experience_head"><i class="fa fa-star" aria-hidden="true"></i>Experience HighLights</div>
                <div class="experience_body">
                    <ul class="m-0">
                        <li>Experience Desert Safari with Bar be que dinner</li>
                        <li>Explore the city highlights and famous landmarks during city tour</li>
                        <li>Go to the 124th Floor of world's highest building and experience panoramic views</li>
                    </ul>
                </div>
            </div> -->
            <!-- Details Area -->
            <div id="details">
                <hr class="sHd" data-content="Details">
                <div class="shadow">
                    <div class="content row m-0">
                        <div class="c_img col-sm-4">
                            <img class="card-img-top p-0" src="<?php echo base_url('upload/').$tour[0]['image'] ?>" alt="Card image" style='height:200px; width:200px;'>
                        </div>
                        <div class="c_text col-sm-8">
                            <div class="row m-0">
                                <div class="col-sm-2 day">Day 1</div>
                                <div class="col-sm-10 day_heading"><?php echo $tour[0]['name'] ?></div>
                            </div>
                            <div>
                                <p style="margin:10px 0"><?php echo $tour[0]['Description'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- info area -->
            <div id="useful_info">
                <hr class="sHd" data-content="Useful Info">
                <div class="shadow">
                    <div class="experience_head"><i class="fas fa-info-circle"></i> Useful Info Before Booking</div>
                    <ul class="tips_list">
                        <li>lorem ipsum init assolt demp dumbler toe noeit</li>
                        <li>lorem ipsum init assolt demp dumbler toe noeit</li>
                        <li>lorem ipsum init assolt demp dumbler toe noeit</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="right_fixed col-sm-4">
            <div id="pkgQtSmryCtr" class="pkg-summ__i pkgQtSmryCtr inPkgQtMode">
                <div class="pkgPrcPPCtr">
                    <div class="fm">Starting from</div>
                    <div class="prcD">AED 244</div>
                    <div class="prcQ">per person</div>
                </div>
            </div>

            <div class="shadow" id="booknow">
                <div class="experience_head"><i class="fas fa-check"></i> Choose your Activity</div>

                <?php $subActivity = $this->CustomModel->select_tour_Activity($tour[0]['id']);
                // echo '<pre>';
                //                 print_r($subActivity);
                if (!empty($subActivity)) {
                    for ($j = 0; $j < count($subActivity); $j++) { ?>
                        <div class="sub_activity">
                            <div id="<?php echo $subActivity[$j]['id'] ?>" pid="<?php echo base64_encode($tour[0]['id']) ?>" data-toggle="collapse" data-target="#activity<?php echo $j ?>">
                                <div class="form-group form-check m-0 row">
                                    <input class="form-check-input col-sm-1 checked" name='activities' type="checkbox">
                                    <label class="form-check-label col-sm-11">
                                        <?php echo $subActivity[$j]['activity'] ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                <?php   }
                }
                ?>
            </div>

            <div class="form_chart shadow " id="fill_details">
                <div class="experience_head"><i class="fas fa-check"></i> Fill Your Details</div>
                <div>
                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6 m-0">Transfer Option</label>
                        <select class="col-sm-6 m-0" id="transfer">
                            <option>With Transfer</option>
                            <option>Without Transfer</option>
                        </select>
                    </div>
                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6">Tour Date</label>
                        <input type="text" id="txtDate" placeholder="dd/mm/yyyy" name="date" required class="col-sm-6 date">
                    </div>
                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6">Adult</label>
                        <input type="number" class=" col-sm-6" placeholder="0" value="" required min=0 name="adult" id="adult" required>
                    </div>
                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6">Child (2-12Yrs)</label>
                        <input type="number" class=" col-sm-6" placeholder="0" min=0 name="child" id="child">
                    </div>
                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6">Infant (0-2Yrs)</label>
                        <input type="number" class=" col-sm-6" placeholder="0" min=0 name="infant" id="infant">
                    </div>

                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6">Total Price <span>(AED)</span></label>
                        <input type="text" disabled class="price col-sm-6" name="price" value="" id="price">
                    </div>

                </div>
                <button type="button" id="booking" book-btn="" class="btn btn-primary book_btn mt-25 r_pos">Book Now</button>
            </div>
        </div>

    </div>

</div>

<script>
    $(document).ready(function() {

        amt = () => {
            var transfer = $('#transfer').val();
            var adult = $('#adult').val();
            var child = $('#child').val();
            var infant = $('#infant').val();
            if (transfer == "1") {
                return (adult * <?php echo (isset($data)) ? $data['Adult'] : 0; ?>) + (child * <?php echo (isset($data['Child'])) ? $data['Child'] : 0; ?>) + (infant * <?php echo (isset($data)) ? $data['Infont'] : 0 ?>);
            } else if (transfer == "2") {
                return (adult * <?php echo (isset($amt_without)) ? $amt_without['Adult'] : 0; ?>) + (child * <?php echo (isset($amt_without['Child'])) ? $amt_without['Child'] : 0; ?>) + (infant * <?php echo (isset($amt_without)) ? $amt_without['Infont'] : 0 ?>);
            }
        };

        $('#transfer').change(() => {
            let amount = amt();
            $('#price').val(amount);
        });

        $('#adult').change(() => {
            let amount = amt();
            $('#price').val(amount);
        });

        $('#adult').trigger('change');

        $('#child').change(() => {
            let amount = amt();

            $('#price').val(amount);
        });

        $('#infant').change(() => {
            let amount = amt();
            $('#price').val(amount);
        });

        $('#txtDate').datepicker();
        $('#txtDate').datepicker('setDate', 'today');
    });
</script>