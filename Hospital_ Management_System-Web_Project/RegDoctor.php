<html>

    <head>
    
        <title>Register Doctor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <style>
        
            #doctor{
                width:600px;
                background-color: #f5f5f5;
                margin:0px auto;
                
            }
            body{
                margin:0;
            }
            .head{
                width:100%;
                font-size:30px;
                text-align: center;
                text-shadow: 3px 4px rgba(0,0,0,0.2);
                background-color:#b6dde7;
                color:white;
                margin:0px;
                
            }
            #doctor input[type="text"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            
            #doctor input[type="email"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #doctor input[type="tel"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            #doctor input[type="number"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #doctor input[type="submit"]{
                
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
                
            }
            
            #doctor input[type="date"]{
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
            }
             #doctor input[type="radio"]{
                padding:10px;
                margin:10px 10px 10px 0px;
                
                
            }
             #doctor select{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            .form-fields{
                
                
                font-family: 'Righteous',cursive;
                font-size:20px;
                color:#757575;
                
                
            }
                      
            
             h2{
                
                height:80px;
                font-family: 'Righteous';
                font-size:50px;
                background-color:#b6dde7;
                color: whitesmoke;
                text-align: left;
                text-shadow: 4px 4px rgba(0,0,0,0.2);
                padding:10px 10px 5px 10px ;   
                
            } 
            #report-name{
                
                color:red;
            }
            #report-email{
                
                color:red;
            }
            #report-phone{
                
                color:red;
            }
            
        </style>
    </head>
    <body>
        <h2>Register Doctor</h2>
        <div id="doctor">
            <p class="head">Doctor Details</p>
            <form action="RegDoctor.php" method="post" onsubmit="return validateform()">
                
                
                <span class="form-fields">Doctor Name</span><br><input type="text" id="dn" name="dname" required ><br>
                <p id="report-name"></p>
                <span class="form-fields">Email</span><br><input type="text" id="em" name="Email" required><br>
                <p id="report-email"></p>
                <span class="form-fields">Contact number</span><br><input type="tel" id="co" name="phno" required><br>
                <p id="report-phone"></p>
                <span class="form-fields">Address</span><br><input type="text"  name="address" required><br>
                <span class="form-fields">Sex</span><br><input type="radio" name="sex" value="M" required><span class="form-fields">Male</span><br>
                <input type="radio" name="sex" value="F" required><span class="form-fields">Female</span><br>
                <span class="form-fields">Specialization</span>

                <select name="specialization">
                
                    <option value="GeneralPhysician">General Physician </option>
                    <option value="Gynecologist">Gynecologist </option>
                    <option value="Pediatrician">Pediatrician </option>
                    <option value="Ophthalmologist">Ophthalmologist </option>
                    <option value="Dermatologist">Dermatologist </option>
                    <option value="ENT doctor">ENT doctor </option>
                    <option value="Orthopedic">Orthopedic </option>
                    <option value="Cardiologist">Cardiologist </option>
                    <option value="Neurologist">Neurologist </option>
                    <option value="Dentist">Dentist </option>
                    <option value="Urologist">Urologist </option>
                    <option value="Psychiatrist">Psychiatrist </option>
                    <option value="Pathologist">Pathologist </option>
                    <option value="Radiologists">Radiologists </option>
                    <option value="Anesthesiologist">Anesthesiologist </option>
                    <option value="General Surgeon">General Surgeon </option>
                    <option value="Oncologist">Oncologist </option>
                    <option value="Nephrologist">Nephrologist </option>
                    <option value="Endocrinologist">Endocrinologist </option>
                    <option value="Gastrologist">Gastrologist </option>
                    
                
                </select><br>
               
                <span class="form-fields">Age</span><br><input type="number" name="age" required ><br>
                 <input type="Submit" value="Register">     
                             
                
            </form>
            
        </div>
        
       
        <script type="text/javascript">
            
            function validateform(){
                
                var name=document.getElementById('dn').value;
                var email=document.getElementById('em').value;
                var phno=document.getElementById('co').value;
    
                var flag=1;
                if(/^[A-z ]+$/.test(name)==false){
                    document.getElementById('report-name').innerHTML="*Invalid name";
                    flag=0;
                }
                if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)==false){
                    document.getElementById('report-email').innerHTML="*Invalid email";
                    flag=0;
                }
                if(/^\d{10}$/.test(phno)==false){
                    document.getElementById('report-phone').innerHTML="*Invalid phone number";
                    flag=0;
                }
                if(flag==0){
                    return false;
                }
                
         }
         </script> 
         <?php
           

            if(isset($_POST['dname']) && isset($_POST['Email']) && isset($_POST['phno']) && isset($_POST['address']) && isset($_POST['sex']) && isset($_POST['age'])){
                $doc_name=$_POST['dname'];
                $email=$_POST['Email'];
                $phno=$_POST['phno'];
                $address=$_POST['address'];
                $sex=$_POST['sex'];
                $age=$_POST['age'];
                $specialization=$_POST['specialization'];
                $file=fopen("doctor_tb.txt","r");
                $notable=fgetc($file);
               
                $con=mysql_connect("localhost","root","");
                if(!$con){
                    echo"<script>";
                    echo"alert('Error in establishing connection')";
                    echo"</script>";
                }
                else{
                    mysql_select_db('admin');
                    if($notable=="1"){
                        $table="create table Doctor(doc_id int Auto_increment,doc_name varchar(20),email varchar(30),phone bigint,address varchar(100),specialization varchar(30),sex char,age int,
                        primary key(doc_id))";
                        
                        $ret_table=mysql_query($table,$con);
                        if(!$ret_table){
                            echo"<script>";
                            echo"alert('Error in creating table')";
                            echo"</script>";
                            die();
                        }
                        else{
                            $ins="insert into Doctor(doc_id,doc_name,email,phone,address,specialization,sex,age)values(3101,'$doc_name','$email',$phno,'$address','$specialization','$sex',$age)";
                            $ret_ins=mysql_query($ins,$con);
                            if(!$ret_ins){
                                echo"<script>";
                                echo"alert('Error in inserting values into the table')";
                                echo"</script>";
                                die();
                            }
                            else{
                                echo"<script>";
                                echo"alert('Records Successfully inserted!!')";
                                echo"</script>";
                                
                            }
                        }
                        fclose($file);
                        $file=fopen("doctor_tb.txt","w");
                        fwrite($file,"0");
                        fclose($file);
                    }
                    else{
                             $ins="insert into Doctor(doc_name,email,phone,address,specialization,sex,age)values('$doc_name','$email',$phno,'$address','$specialization','$sex',$age)";
                            $ret_ins=mysql_query($ins,$con);
                            if(!$ret_ins){
                                echo"<script>";
                                echo"alert('Error in inserting values into the table')";
                                echo"</script>";
                               
                            }
                            else{
                                echo"<script>";
                                echo"alert('Records Successfully inserted!!')";
                                echo"</script>";
                                
                                
                            }
                        }
                }
                              
            }
         ?>
            
               
    </body>
</html>