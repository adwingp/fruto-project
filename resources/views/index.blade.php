
@extends('layouts.app')
@section('content')
    <!-- slider_area_start -->
    <div class="header-bann">
        <div class="overlay"></div>
        <video autoplay muted loop id="myVideo" autoplay="autoplay" muted="muted" loop="loop">
            <source src="public/videos/hope.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>

    <!-- who we are  -->
    <div class="about_area about_wrap_area about_wrap_area2" >
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_info">
                        <h2>Who  We Are.. ?</h2>
                        <br>
                        <p>I-EON PRIVATE LIMITED is an Indian Robotic technology company headquartered in the District of Trivandrum, Kerala, India.</p>

                        <p>Our vision is to disrupt the health sector with robotics technology. A Upper Limb Exoskeleton for movement therapy,  a smart and efficient solution to replace the manual movement therapy is our first step towards this vision. The company recently got recognition from Department of Industrial Policy & Promotion India.</p>

                        <p>The company is founded by Arshed A Samad, CET Trivandrum & Menino Fruto, CET Trivandrum. The company also has reputed mentors and advisors from physiotherapy department, Engineering professors from robotics and mechanical field. The company is now incubated at Trivandrum.</p>
                        </p>

                         <!-- <ul>
                            <li> Apartments frequently or motionless. </li>
                            <li> Duis aute irure dolor in reprehenderit in voluptate. </li>
                            <li> Voluptatem quia voluptas sit aspernatur.</li>
                        </ul> -->

                        <div class="about_btn">
                            <a class="boxed-btn3" href="about-us">About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_image">
                        <div class="embed-responsive embed-responsive-16by9">
                        <video width="320" height="240" controls>
                            <source src="public/videos/hope.mp4" type="video/mp4">
                        </video>
                            <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=HpIBFFNzK8g"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ who we are  -->

    <!-- rehabilitation  -->
    <div class="about_area" >
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="about_info">
                        <h2>Future Of Movement Rehabilitation</h2>
                        <br>
                        <ul> <li><h4>Background</h4> </li></ul>
                        <p>Health care environments are continuously improving conditions, especially regarding the use of current technology. In the field of rehabilitation, the use of video games and related technology has helped to develop new rehabilitation procedures. Patients are able to work on their disabilities through new processes that are more motivating and entertaining. However, these patients are required to leave their home environment to complete their rehabilitation programs.</p>
                        <br>
                        <ul> <li><h4>Objective</h4> </li></ul>
                        <p>The focus of our research interests is on finding a solution to eliminate the need for patients to interrupt their daily routines to attend rehabilitation therapy. We have developed an innovative system that allows patients with a balance disorder to perform a specific rehabilitation exercise at home. Additionally, the system features an assistive tool to complement the work of physiotherapists. Medical staff are thus provided with a system that avoids the need for them to be present during the exercise in specific cases in which patients are under suitable supervision.</p>
                        <br>        
                        <ul> <li><h4>Methods</h4> </li></ul>
                        <p>A movement-based interaction device was used to achieve a reliable system for monitoring rehabilitation exercises performed at home. The system accurately utilizes parameters previously defined by the specialist for correct performance of the exercise. Accordingly, the system gives instructions and corrects the patient’s actions. The data generated during the session are collected for assessment by the specialist to adapt the difficulty of the exercise to the patient’s progress.</p>
                        <br>        
                        <ul> <li><h4>Results</h4> </li></ul>
                        <p>The evaluation of the system was conducted by two experts in balance disorder rehabilitation. They were required to verify the effectiveness of the system, and they also facilitated the simulation of real patient behavior. They used the system freely for a period of time and provided interesting and optimistic feedback. First, they evaluated the system as a tool for real-life rehabilitation therapy. Second, their interaction with the system allowed us to obtain important feedback needed to improve the system.</p>
                        <br>        
                        <ul> <li><h4>Conclusions</h4> </li></ul>
                        <p>The system improves the rehabilitation conditions of people with balance disorder. The main contribution comes from the fact that it allows patients to carry out the rehabilitation process at home under the supervision of physiotherapists. As a result, patients avoid having to attend medical centers. Additionally, medical staff have access to an assistant, which means their presence is not required in many exercises that involve constant repetition.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ rehabilitation  -->


    <!-- service_area_start -->
    <!-- <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Explore Our Solutions</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service service_bg_1">
                        <div class="service_hover">
                            <img src="public/img/svg_icon/legal-paper.svg" alt="">
                            <h3>Invoicing</h3>
                            <div class="hover_content">
                                <div class="hover_content_inner">
                                    <h4>Invoicing</h4>
                                    <p>These cases are perfectly simple and easy to distinguish. In a free hour power.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service service_bg_2">
                        <div class="service_hover">
                            <img src="public/img/svg_icon/case.svg" alt="">
                            <h3>Business Growth</h3>
                            <div class="hover_content">
                                <div class="hover_content_inner">
                                    <h4>Business Growth</h4>
                                    <p>These cases are perfectly simple and easy to distinguish. In a free hour power.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service service_bg_3">
                        <div class="service_hover">
                            <img src="public/img/svg_icon/survey.svg" alt="">
                            <h3>Problem Solving</h3>
                            <div class="hover_content">
                                <div class="hover_content_inner">
                                    <h4>Problem Solving</h4>
                                    <p>These cases are perfectly simple and easy to distinguish. In a free hour power.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- service_area_end -->

    <!-- counter  -->
    <!-- <div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4 panel panel_mob">
                    <div class="single_counter text-center">
                        <h3> <span class="counter">520</span> <span>+</span> </h3>
                        <span>Total Projects</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 panel panel_mob">
                    <div class="single_counter text-center">
                        <h3> <span class="counter">244</span> </h3>
                        <span>On Going Projects</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 panel panel_mob">
                    <div class="single_counter text-center">
                        <h3> <span class="counter">95</span> <span>%</span> </h3>
                        <span>Job Success</span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--/ counter  -->


    <!-- gallery -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Our Recent Works</h3>
                        <p>These cases are perfectly simple and easy to distinguish. In a free <br> hour, when our power
                            of choice is untrammelled.</p>
                    </div>
                </div>
            </div>

            <div class="row grid">
                <div class="col-xl-4 col-lg-6 grid-item cat1 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="public/img/gallery/content-3.jpg" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a href="#" class="hover_inner" style="pointer-events: none;">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 grid-item cat3 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="public/img/gallery/content-3.jpg" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a href="#" class="hover_inner" style="pointer-events: none;">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 grid-item cat4 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="public/img/content-3.jpg" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a href="#" class="hover_inner" style="pointer-events: none;">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 grid-item cat3 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="public/img/gallery/content-3.jpg" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a href="#" class="hover_inner" style="pointer-events: none;">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="public/img/gallery/content-3.jpg" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a href="#" class="hover_inner" style="pointer-events: none;">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>

                 <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="public/img/gallery/content-3.jpg" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a href="#" class="hover_inner" style="pointer-events: none;">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="More_Works_btn text-center">
                        <a class="boxed-btn3-green-2" href="#">More Works</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ gallery -->

    <!-- about wrap  -->
    <div class="about_wrap_area about_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service_wrap text-center">
                        <img src="public/img/svg_icon/controls.svg" alt="">
                        <h3>Unlimited Control</h3>
                        <!-- <p>These cases are perfectly simple and easy to </p> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service_wrap text-center">
                        <img src="public/img/svg_icon/bar-chart.svg" alt="">
                        <h3>Rapidly Growth</h3>
                        <!-- <p>These cases are perfectly simple and easy to </p> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service_wrap text-center">
                        <img src="public/img/svg_icon/puzzle.svg" alt="">
                        <h3>Problem Solving</h3>
                        <!-- <p>These cases are perfectly simple and easy to </p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about wrap  -->


    <!-- financial_solution -->
    <div class="financial_solution_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="financial_active owl-carousel">
                        <div class="single_finalcial_wrap">
                            <h3> Demo Heading<br>
                                Test 1 </h3>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power
                                of choice is untrammelled and when nothing prevents our being able to do what we like
                                best.</p>
                        </div>
                        <div class="single_finalcial_wrap">
                            <h3> Demo Heading<br>
                                Test 2 </h3>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power
                                of choice is untrammelled and when nothing prevents our being able to do what we like
                                best.</p>
                        </div>
                        <div class="single_finalcial_wrap">
                            <h3> Demo Heading<br>
                                Test 3 </h3>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power
                                of choice is untrammelled and when nothing prevents our being able to do what we like
                                best.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="finance_thumb">
                        <img src="public/img/about/content-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ financial_solution -->

    <div class="testmonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="testmonial_active2 owl-carousel">
                        <div class="single_slider text-center" data-dot='<img src="public/img/testmonial/1.png" alt="#" '>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power
                                of choice is untrammelled and when nothing prevents our being able.</p>
                            <div class="author_name text-center">
                                <h4>Robert Jonson</h4>
                                <span> Business Owner</span>
                            </div>
                        </div>
                        <div class="single_slider text-center" data-dot='<img src="public/img/testmonial/1.png" alt="#" '>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power
                                of choice is untrammelled and when nothing prevents our being able.</p>
                            <div class="author_name text-center">
                                <h4>Robert Jonson</h4>
                                <span> Business Owner</span>
                            </div>
                        </div>
                        <div class="single_slider text-center" data-dot='<img src="public/img/testmonial/1.png" alt="#" '>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power
                                of choice is untrammelled and when nothing prevents our being able.</p>
                            <div class="author_name text-center">
                                <h4>Robert Jonson</h4>
                                <span> Business Owner</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- project  -->
    
    <!--/ project  -->
     
@endsection

