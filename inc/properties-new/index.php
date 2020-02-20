<?php get_header(); ?>

<style>

    body {
        background-image: url("https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/P1_Quarto_white-scaled.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        /* background-opacity:0.5; */
        font-family: "roboto";
    }

    /*.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {*/
    /*    border-color: #8f734e !important;*/
    /*    background-color: #8f734e !important;*/
    /*}*/

    .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
        background-color: #8f734e;
        border-radius: 50rem;
    }
    .footer-form{
        padding-right:1rem;
    }
    .custom-control{
        padding-left:3rem;
    }
   
  

</style>

<div class="row container box-center container-box py-3" style="margin-bottom: 10rem !important;">
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" id="container__center" style="width: 100%;">

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3 class="font-weight-bold">Add New Property</h3>

                    <div class="md-form">
                        <input type="text" id="name" class="form-control">
                        <label for="name">Name</label>
                    </div>

                    <div class="md-form">
                        <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
                        <label for="form7">About Property</label>
                    </div>

                    <select class="mdb-select md-form">
                        <option value="" disabled selected>City</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <select class="mdb-select md-form">
                        <option value="" disabled selected>Foreseen Conclusion</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <select class="mdb-select md-form">
                        <option value="" disabled selected>Uses</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <select class="mdb-select md-form">
                        <option value="" disabled selected>Architect</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>

                <div class="col-12">
                    <div class="md-form ">
                        <input type="text" id="address" class="form-control">
                        <label for="address">Address</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <h5>Properties Status</h5>
                    <!-- Group of default radios - option 1 -->
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadiosLeft">
                    <label class="custom-control-label" for="defaultGroupExample1"> Completed</label>
                    </div>

                    <!-- Group of default radios - option 2 -->
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadiosLeft" checked>
                    <label class="custom-control-label" for="defaultGroupExample2">Current</label>
                    </div>

                    <!-- Group of default radios - option 3 -->
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadiosLeft">
                    <label class="custom-control-label" for="defaultGroupExample3">Sold</label>
                    </div>
    <!-- <div class="form-check">
        <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
        <label class="form-check-label" for="materialChecked2">Completed</label>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="materialChecked3">
        <label class="form-check-label" for="materialChecked3">Current</label>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="materialChecked4">
        <label class="form-check-label" for="materialChecked4">Sold</label>
    </div> -->
                    <div class="md-form">
                        <input type="text" id="name" class="form-control">
                        <label for="name">Website</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <h5>Progression</h5>
                    <!-- Group of default radios - option 1 -->
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample4" name="groupOfDefaultRadiosRight">
                    <label class="custom-control-label" for="defaultGroupExample4">[1]Promissory Contract</label>
                    </div>

                    <!-- Group of default radios - option 2 -->
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample5" name="groupOfDefaultRadiosRight" checked>
                    <label class="custom-control-label" for="defaultGroupExample5">[2]Licence Construction</label>
                    </div>

                    <!-- Group of default radios - option 3 -->
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample6" name="groupOfDefaultRadiosRight">
                    <label class="custom-control-label" for="defaultGroupExample6">[3]Construction Completed</label>
                    </div><!-- Group of default radios - option 4 -->
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample7" name="groupOfDefaultRadiosRight">
                    <label class="custom-control-label" for="defaultGroupExample7">[4]Habitation License</label>
                    </div>

                    <!-- Group of default radios - option 5 -->
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample8" name="groupOfDefaultRadiosRight" >
                    <label class="custom-control-label" for="defaultGroupExample8">[5]Completion od Sale</label>
                    </div>



    <!-- <div class="form-check">
        <input type="checkbox" class="form-check-input" id="materialChecked5" checked>
        <label class="form-check-label" for="materialChecked5">[1]Promissory Contract</label>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="materialChecked6">
        <label class="form-check-label" for="materialChecked6">[2]Licence Construction</label>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="materialChecked7">
        <label class="form-check-label" for="materialChecked7">[3]Construction Completed</label>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="materialChecked8" checked>
        <label class="form-check-label" for="materialChecked8">[4]Habitation License</label>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="materialChecked9">
        <label class="form-check-label" for="materialChecked9">[5]Completion od Sale</label>
    </div> -->
                   

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                <select class="mdb-select md-form">
                        <option value="" disabled selected>Number os Sellable Units</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="md-form ">
                        <input type="text" id="Estimated-date-for-begining-of-construction" class="form-control">
                        <label for="Estimated-date-for-begining-of-construction">Estimated date for begining of construction</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="md-form ">
                        <input type="text" id="Estimated-delivery-date" class="form-control">
                        <label for="Estimated-delivery-date">Estimated delivery date</label>
                    </div>
                </div>
            </div>
       
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="footer-form">
                        <h5>Main Image</h5>
                        <button type="button" class="btn btn-default btn-sm"style="background:#947956 !important;width:8rem;">Upload</button>
                    </div>
                    <div class="md-form">
                        <input type="text" id="form10" class="form-control">
                        <label for="form10">Choose your file</label>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="footer-form">
                        <h5>Gallery Image</h5>
                        <button type="button" class="btn btn-default btn-sm"style="background:#947956 !important;width:8rem;">Upload</button>
                    </div>
                    <div class="md-form">
                        <input type="text" id="form11" class="form-control">
                        <label for="form11">Choose your file</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="footer-form">
                        <h5>Logo</h5>
                        <button type="button" class="btn btn-default btn-sm"style="background:#947956 !important;width:8rem;">Upload</button>
                    </div>
                    <div class="md-form">
                        <input type="text" id="form12" class="form-control">
                        <label for="form12">Choose your file</label>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="footer-form">
                        <h5>Documents</h5>
                        <button type="button" class="btn btn-default btn-sm"style="background:#947956 !important;width:8rem;">Upload</button>
                    </div>
                    <div class="md-form">
                        <input type="text" id="form13" class="form-control">
                        <label for="name">Choose your file</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" style="background:#947956 !important;width:12rem;">Save</button>
                </div>
            </div>
               

        </section>
        <!--Section: Content-->

    </div>
</div>

<?php get_footer(); ?>