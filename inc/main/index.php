<?php get_header(); ?>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

    .container-child-right {
        margin: 0.5rem 0 0.5rem 0.5rem;
        height: 100px;
        display: flex;
        align-items: center;
    }

    .container-child-left {
        margin: 0.5rem 0.5rem 0.5rem 0;
        height: 100px;
        display: flex;
        align-items: center;
    }

    #background_1 {
        /*height: 200px;*/
        /*display:flex;*/
        /*align-items:center;*/
        padding: 15px 15px;
    }

    #container__center h3 {
        font-size: 45px;
        font-weight: 300;
    }

    #container__center p {
        font-size: 22px;
    }

    .container-box {
        margin-right: 2rem;
        margin-left: 2rem;
    }

    body {
        background-image: url("https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/fondo.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        font-family: "roboto";
    }

    @media (max-width: 425px) {
        .container-box {
            display: flex;
            flex-direction: column;
        }

        #background_3 {
            margin-left: 0;
        }

        #background_5 {
            margin-left: 0;
        }

        #background_1 h3 {
            font-size: 16px;
        }

        .container-box-2 {
            margin-top: 0;
        }

        .container-child-right {
            margin: 1rem 0 0.5rem 0.5rem;
            display: block !important;
        }

        .container-child-left {
            margin: 0.5rem 0.5rem 1rem 0;
            display: block !important;
        }
    }

    /*                                                                          revisar lo que esta encerrado */
    @media (min-width: 1400px) {
        .container-box {
            margin: auto 15%;
        }

    }

    @media (max-width: 650px) {
        #background_1 {
            padding: 0 1rem;
            height: auto;
        }

        #background_1 h3 {
            font-size: 30px;
            /*text-align:center;*/
        }

        #background_1 p {
            /*text-align:center;*/
        }
    }


    #background_1 {
        background: white;
    }

    #background_2 {
        background: white;

    }

    #background_3 {
        background: white;

    }

    #background_4 {
        background: white;

    }

    #background_5 {
        background: white;

    }

    .card-body{
        padding:0.5rem;
    }
    .card-img-top{
        height:auto;
    }
    .col mb-4 {
        height: fit-content;
    }

    @media (max-width: 450px) {
        .card-title {
            font-size: 1rem !important;
        }
        .card-text {
            font-size: 0.75rem !important;
            line-height: initial;
        }
        #background_1 p {
            font-size: 1rem !important;
            line-height: initial;
        }
    }
    #background_2:hover{
        background: #8f734e;
    }
    #background_3:hover{
        background-color: #8f734e;
    }
    #background_4:hover{
        background-color: #8f734e;
    }
    #background_5:hover{
        background-color: #8f734e;
    }
    #background_2 section {
        display:flex;
        flex-direction: row;
        justify-content:space-between;
        width:inherit;
    }
    #background_3 section {
        display:flex;
        flex-direction: row;
        justify-content:space-between;
        width:inherit;
    }
    #background_4 section {
        display:flex;
        flex-direction: row;
        justify-content:space-between;
        width:inherit;
    }
    #background_5 section {
        display:flex;
        flex-direction: row;
        justify-content:space-between;
        width:inherit;
    }
    #background_2 section .fa-ellipsis-v {
        color:#b6bcbf;
    }
    #background_3 section .fa-ellipsis-v {
        color:#b6bcbf;
    } 
    #background_4 section .fa-ellipsis-v {
        color:#b6bcbf;
    }
    #background_5 section .fa-ellipsis-v {
        color:#b6bcbf;
    }
    #background_2:hover section .fa-ellipsis-v, #background_2:hover section h4 {
        color:white;
    }
    #background_3:hover section .fa-ellipsis-v, #background_3:hover section h4 {
        color:white;
    } 
    #background_4:hover section .fa-ellipsis-v, #background_4:hover section h4 {
        color:white;
    }
    #background_5:hover section .fa-ellipsis-v, #background_5:hover section h4 {
        color:white;
    }
    .dropdown .dropdown-menu .dropdown-item:hover{
        background:#f9f8f6!important;
        color: #000 !important;
        box-shadow: none;
    }
     footer{
        /* position:fixed;
        width:100%; */
    }

    @media (max-height: 850px) {
        footer{
            position:relative !important;
        }
    }

</style>

<div class="row mt-3 container-box">
    <div class="py-3 z-depth-1 col" id="background_1" style="margin: 1rem 0rem 0.5rem 0;">


        <!--Section: Content-->
        <section class="px-sm-2 mx-sm-2 dark-grey-text" id="container__center" style="margin-top: 1rem;">

            <h3>Welcome Ana Malgahaes,</h3>
            <p>This is your <strong>Stone Journey Dashboard,</strong> from here you can manage your Properties, Clients,
                Milestones and Documents.</p>

        </section>
        <!--Section: Content-->


    </div>
</div>

<!--<div class="container">-->
<div class="row mt-3 container-box">
    <div class="py-3 z-depth-1 col container-child-left" id="background_2">
        <section class="px-sm-2 mx-sm-2 dark-grey-text">

            <h4>Properties</h4>
            <div class="nav-item dropleft">
                <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">View Grid</a>
                <a class="dropdown-item" href="#">View List</a>
                <a class="dropdown-item" href="#">Create New</a>
            </div>
        </section>
    </div>


    <div class=" py-3 z-depth-1 col container-child-right" id="background_3">
        <section class="px-sm-2 mx-sm-2 dark-grey-text ">

            <h4>Clients&nbsp;&nbsp;&nbsp;</h4>
            <div class="nav-item dropleft">
                <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">View Grid</a>
                <a class="dropdown-item" href="#">View List</a>
                <a class="dropdown-item" href="#">Create New</a>
            </div>

        </section>
    </div>
</div>
<div class="row mt-3 container-box container_box_2">
    <div class="py-3 z-depth-1 col container-child-left" id="background_4">
        <section class="px-sm-2 mx-sm-2 dark-grey-text">

            <h4>Milestones</h4>
            <div class="nav-item dropleft">
                <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">View Grid</a>
                <a class="dropdown-item" href="#">View List</a>
                <a class="dropdown-item" href="#">Create New</a>
            </div>

        </section>
    </div>

    <div class=" py-3 z-depth-1 col container-child-right" id="background_5">
        <section class="px-sm-2 mx-sm-2 dark-grey-text">

            <h4>Documents</h4>
            <div class="nav-item dropleft">
                <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">View Grid</a>
                <a class="dropdown-item" href="#">View List</a>
                <a class="dropdown-item" href="#">Create New</a>
            </div>
    



        </section>
    </div>
</div>
<!--</div>-->


<?php get_footer(); ?>
