@extends('layouts.main')

@section('content')
    <div class="background firstsection">
        <div class="box-main">
            <div class="firstHalf">       
                <p class="text-big">Contact Us</p>
 
                <p class="text-small">
                    You can Contact Us if you face any problem
                </p>
 
                <br>
                <p class="center"
                   style="text-decoration:none;
                          color:white;">
                    Click on the below options to Contact us
                </p>
 
            </div>
        </div>
    </div>
    <div class="service">
         
        <!-- Heading-->
        <h1 class="h-primary center"
            style="margin-top:30px;">
            <b>Options to Contact</b>
        </h1>
        
        <div id="service">
            <div class="box">
                <!-- Form -->
                <img src=
                https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL7p0vu7vVWVY4dP1gD53SaDRChtoIVGB2Yg&usqp=CAU alt= "FAX">
                <br>
                 
                <!-- Displaying text at
                    the center of the box-->
                <p class="center">
                    Fax:+880 2 56789424
                </p>
 
            </div>
            <div class="box">
                 
                <!-- Email -->
                <img src=
                https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX118cnUbmMtkSgMYy_5B_nucmyDjFP7zI0w&usqp=CAU   alt="MAIL" >
                <br>             
                    <!-- Displaying text at
                    the center of the box-->
                <p class="center">
                    Email:Bloginfo@gmail.com
                </p>
 
            </div>
            <div class="box">
                <img src=
                https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpedKMuZn7Jrf2AKiTyOoLOcQl1IUoWzdcfw&usqp=CAU alt= "CALL">
                <br>
                 
                <!-- Displaying text at
                    the center of the box-->
                <p class="center">
                    Toll Free Number:+888 20 300 400
                </p>
 
            </div>
        </div>
    </div>
@endsection