<html>

    <head>
    
        <title>Registration</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        
        <style type="text/css">
        
           h1{
                
                height:80px;
                font-family: 'Righteous';
                font-size:50px;
                background-color:#b6dde7;
                color: whitesmoke;
                text-align: left;
                text-shadow: 4px 4px rgba(0,0,0,0.2);
                padding:10px 10px 5px 10px ;   
                
            } 
            
            #reg{
                
                width:600px;
                margin-left:400px;
                background-color:#f5f5f5;
                padding:10px;
               
                
            }
            #reg input[type="text"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #reg input[type="password"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #reg input[type="email"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #reg input[type="tel"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #reg input[type="submit"]{
                
                width:100%;      
                padding:10px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                margin:20px 0px 0px 0px;
                color:white;
                background-color:#b6dde7;
                border-style:outset;
                border-radius:5px;
                cursor:pointer;
                font-weight:bold;
                opacity:0.8;
                
            }
            
            #reg input[type="date"]{
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
            }
             #reg input[type="radio"]{
                padding:10px;
                margin:10px 10px 10px 0px;
                
                
            }
            .form-fields{
                
                
                font-family: 'Righteous',cursive;
                font-size:20px;
                color:#757575;
                
                
            }
            
            #report-username{
                
                color:red;
                
            }
            
            #report-pass1{
                
                color:red;
                
            }
            
            #report-pass2{
                
                color:red;
                
            }
            
            #report-pass3{
                
                color:red;
                
            }
            
            #report-email{
                
                color:red;
                
            }
            
            #report-phone{
                
                color:red;  
            }
            #report-dob{
                
                color:red;  
            }
            
            #Login{
                
               
                height:20px;
                display:inline-block;
                background-color:#b6dde7;
                color:white;
                text-decoration: none;
                padding: 10px 275px 10px 275px;
                margin-left:410px;
                
            }
            
            #Login:hover{
                
                color:white;
                background-color: black;
                
            }
                   
        </style>
        
    </head>
    
    <body>
    
        <h1>REGISTRATION</h1>
        
        <div id="reg">
        
            <form action="Registration.php" method="post">
                
                <span class="form-fields">Name</span><br><input type="text" name="Username" required ><br>
                <p id="report-username"></p>
                <span class="form-fields">Password</span><br><input type="password" name="Password" required ><br>
                <p id="report-pass1"></p>
                <p id="report-pass2"></p>
                <span class="form-fields">Confirm Password</span><br><input type="password" name="Password2" required><br>
                <p id="report-pass3"></p>
                <span class="form-fields">Email</span><br><input type="text" name="Email" required><br>
                <p id="report-email"></p>
                <span class="form-fields">Contact number</span><br><input type="tel" name="phno" required><br>
                <p id="report-phone"></p>
                <span class="form-fields">Date of birth</span><br><input type="date" name="dob" required><br>
                <p id="report-dob"></p>
                <span class="form-fields">Address</span><br><input type="text" name="address" required><br>
                <span class="form-fields">Sex</span><br><input type="radio" name="sex" value="M" required><span class="form-fields">Male</span><br>
                <input type="radio" name="sex" value="F" required><span class="form-fields">Female</span><br>
                <input type="submit" value="Submit">  
                             
                
            </form>
        
        </div>
        
        <?php
        
            if(isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['Password2']) && isset($_POST['Email']) && isset($_POST['phno'])){
                
                $username=$_POST['Username'];
                $pass=$_POST['Password'];
                $password=password_hash($pass,PASSWORD_DEFAULT);
                $c_pass=$_POST['Password2'];
                $email=$_POST['Email'];
                $email=filter_var($email,FILTER_SANITIZE_EMAIL);
                $dob=$_POST['dob'];
                list($y,$m,$d)=explode("-",$dob);
                $years=date('Y');
                $months=date('m');
                $day=date('d');
                $phno=$_POST['phno'];
                $phone=(string)$phno;
                $sex=$_POST['sex'];
                $address=$_POST['address'];
                $containsLetter  = preg_match('/[a-zA-Z]/',    $pass);
                $containsDigit   = preg_match('/\d/',          $pass);
                $containsSpecial = preg_match('/[^a-zA-Z\d]/', $pass);
                $flag=1;
                
                if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
                    
                    echo"<script >";
                    echo "document.getElementById('report-username').innerHTML=\"* Only letters and spaces are allowed\"";
                    echo"</script>";
                    $flag=0;
                }
                
                if(!(strlen($pass)>=6)){
                    
                   echo"<script >";
                   echo"document.getElementById('report-pass1').innerHTML=\"* Password must be greater than six characters\"";
                   echo"</script>"; 
                   $flag=0;    
                }
                
                if(($containsLetter && $containsDigit && $containsSpecial)===false){
                    
                   echo"<script >";
                   echo"document.getElementById('report-pass2').innerHTML=\"* Password must contain atleast 1 number and special characters\"";
                   echo"</script>"; 
                   $flag=0;
                    
                }
                
                if(!($pass===$c_pass) ){
                    
                   echo"<script >";
                   echo"document.getElementById('report-pass3').innerHTML=\"* Passwords do not match\"";
                   echo"</script>";  
                   $flag=0; 
                }
                                
                if(!(filter_var($email,FILTER_VALIDATE_EMAIL))===true){
                    
                   echo"<script >";
                   echo"document.getElementById('report-email').innerHTML=\"* Invalid email address\"";
                   echo"</script>"; 
                   $flag=0;    
                }
                
                if((strlen($phone)!==10)){
                    
                   echo"<script >";
                   echo"document.getElementById('report-phone').innerHTML=\"* Invalid phone number\"";
                   echo"</script>";
                   $flag=0;
                }
                if($y>$years || ($y===$years && $m>$months) || ($y===$years && $m===$months && $d>$day)) {
                   echo"<script >";
                   echo"document.getElementById('report-dob').innerHTML=\"* Invalid date of birth\"";
                   echo"</script>";
                   $flag=0;
                }
                
                if($flag==1){
                    
                    $con=mysql_connect("localhost","root","");
                    if(!$con){
                        
                        echo"<script>";
                        echo"alert('Error in establishing connection')";
                        echo"</script>";
                        
                        
                    }
                    else{
                        
                        $db="CREATE database Admin";
                        $ret_db=mysql_query($db,$con);
                        if(!$ret_db){
                        
                            echo"<script>";
                            echo"alert('Error in creating Database')";
                            echo"</script>";
                            
                        }
                        else{
                            
                            mysql_select_db('Admin');
                            
                            $table="create table reginfo(username varchar(20) not null,password varchar(255),email varchar(30),contact_no bigint,date_of_birth date ,sex char,address varchar(100));";	
                            
                            $ret_table=mysql_query($table,$con);
                             if(!$ret_table){
                        
                                echo"<script>";
                                echo"alert('Error in creating table')";
                                echo"</script>";
                                

                            }
                            
                            else{
                                
                                $insert="insert into reginfo(username,password,email,contact_no,date_of_birth,sex,address) values ('$username','$password','$email',$phno,'$dob','$sex','$address')";
                                $ret_insert=mysql_query($insert,$con);
                                if(!$ret_insert){
                        
                                    echo"<script>";
                                    echo"alert('Error in inserting values into the database')";
                                    echo"</script>";
                                    

                                }
                                else{
                                    
                                    echo"<script>";
                                    echo"alert('Registration Successful')";
                                    echo"</script>";
                                    
                                }

                            }
                            
                        }
                        
                    
                }
                
            }
        }
        
    ?>
         <a href="http://localhost/HMS/Login.php" id="Login">LOGIN</a>
        
    </body>
</html>