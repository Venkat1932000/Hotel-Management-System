<?php include("head.html");
?>

<head>
    <style>
        body {


            font-family: 'Lobster', cursive;
            color: black;

        }

        .order {

            background-image: url("images/4.jpeg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;


        }

        input {

            border-radius: 5px;

        }

        button {

            color: red;
        }

        .text-sizing {

            font-size: 30px;
        }
    </style>
    <script>
    
    function validate(){

        var name = document.forms["Bookform"]["name"];
        var age = document.forms["Bookform"]["age"];
        var gender= document.forms["Bookform"]["gender"];
        var nrooms= document.forms["Bookform"]["rooms_req"];
        var nmembers= document.forms["Bookform"]["members_req"];
        var country =document.forms["Bookform"]["country"];
        var checkin =document.forms["Bookform"]["check_in_date"];

        if(name.value == ""){

            window.alert("please enter your name");
            name.focus();
            
        }
        if(age.value == 0 || age.value == null){

            window.alert("please enter your age");
            age.focus();
            

        }
        if(gender.value == null||gender.value==""){
            window.alert("please select the gender");
            gender.focus();
            

        }
        if(nrooms.value == 0 || nrooms.value == null){

            window.alert("please enter the no of rooms required");
            nrooms.focus();
            
        }
        if(nmembers.value == 0 || nmembers.value == null){

            window.alert("please enter the no of peoples going to stay!.");
            nmembers.focus();
           
        }
        if(country.value == null){

            window.alert("please enter your Country");
            country.focus();
            
        }
    
        

    }
    
    
    
    </script>

</head>

<body>
    <div class="order" width="900px" height="700px">

        <center>
            <form name="Bookform" onsubmit= "validate()">

                <table>

                    <tr>
                        <td class="text-sizing">Name:</td>
                        <td><input type="text" name="name" placeholder="Enter your name"   ></td>
                    </tr>
                    <br>
                    <tr>
                        <td class="text-sizing">Age:</td>
                        <td><input type="number" name="age" placeholder=" Enter your age"   ></td>
                    </tr>
                    <br>

                    <tr>
                        <td class="text-sizing">Gender:</td>
                        <td>Male<input type="radio" name="gender" value="male"  >
                            Female<input type="radio" name="gender" value="female"  >
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td class="text-sizing">No.of.rooms   :</td>
                        <td><input type="number" name="rooms_req" placeholder="Enter total number of rooms   "
                                  >
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td class="text-sizing">No.of.Members:</td>
                        <td><input type="number." name="members_req" placeholder=" Enter total number of members"
                                  ></td>
                    </tr>
                    <br>
                    <tr>
                        <td class="text-sizing">Country:</td>
                        <td><input type="text" name="country" placeholder=" Enter your country "   ></td>
                    </tr>

                    <tr>
                        <td class="text-sizing">Check in:</td>
                        <td><input type="date" name="Check_in_date" required>
                    </tr>


                </table><br>
                <button type="submit" >Submit</button>




            </form>
        </center>
    </div>
</body>

<?php include("foot.html");
?>
