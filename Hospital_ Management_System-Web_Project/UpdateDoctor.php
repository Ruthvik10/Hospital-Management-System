<html>

    <head>
    
        <title>Update Doctor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <style>
        
            #doctor{
                width:600px;
                background-color: #f5f5f5;
                margin:0px auto;
                
            }
            .head{
                width:100%;
                font-size:30px;
                text-align: center;
                text-shadow: 3px 4px rgba(0,0,0,0.2);
                background-color:#b6dde7;
                color: white;
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
            body{
                margin:0;
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
            #report-id{
                
                color:red;
            }
            
        </style>
    </head>
    <body>
        <h2>Update Doctor</h2>
        <div id="doctor">
            <p class="head">Update Doctor Details</p>
            <form action="UpdateDoctor.php" method="post" onsubmit="return validateform()">
                
                <span class="form-fields">Doctor ID</span><br><input type="number" name="doc_id" id="did" required="required"><br>
                <p id="report-id"></p>
                <span class="form-fields">Doctor Name</span><br><input type="text" id="dn" name="dname"><br>
                <p id="report-name"></p>
                <span class="form-fields">Email</span><br><input type="text" id="em" name="email"><br>
                <p id="report-email"></p>
                <span class="form-fields">Contact number</span><br><input type="tel" id="co" name="phno"><br>
                <p id="report-phone"></p>
                <span class="form-fields">Address</span><br><input type="text"  name="address"><br>
                <span class="form-fields">Sex</span><br><input type="radio" name="sex" value="M"><span class="form-fields">Male</span><br>
                <input type="radio" name="sex" value="F"><span class="form-fields">Female</span><br>
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
               
                <span class="form-fields">Age</span><br><input type="number" name="age"><br>
                <span class="form-fields">Fees</span><br><input type="number" name="fees"><br>
                 <input type="Submit" value="Update">     
                             
                
            </form>
            
        </div>
        
       
        <script type="text/javascript">
            
            function validateform(){
                
                var name=document.getElementById('dn').value;
                var email=document.getElementById('em').value;
                var phno=document.getElementById('co').value;
                var doc_id=document.getElementById('did').value;
                var flag=1;
                if(/(^[A-z ]*)$/.test(name)==false){
                    document.getElementById('report-name').innerHTML="*Invalid name";
                    flag=0;
                }
                if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})*/.test(email)==false){
                    document.getElementById('report-email').innerHTML="*Invalid email";
                    flag=0;
                }
                if(/^\d{10}*/.test(phno)==false){
                    document.getElementById('report-phone').innerHTML="*Invalid phone number";
                    flag=0;
                }
                if(/^\d{4}$/.test(doc_id)==false){
                            document.getElementById('report-id').innerHTML="*Invalid Doctor ID";
                            flag=0;
                        }
                if(flag==0){
                    return false;
                }
                
         }
         </script> 
         <?php
            $con=mysql_connect("localhost","root","");
            if(!$con){
                echo "<script>";
                echo"alert('Error establishing connection')";
                echo"</script>";
                die();
            }
            mysql_select_db('admin');
            if(isset($_POST['doc_id'])) {
                $doc_id=$_POST['doc_id'];
                 $flag=0;
                 $sel="Select doc_id from doctor";
                $ret_sel=mysql_query($sel,$con);
                while($rows=mysql_fetch_assoc($ret_sel)){
                    if($doc_id==$rows['doc_id']){
                        $flag=1;
                    }
                }

                if($flag==1) {

                   if(isset($_POST['dname']) && !empty($_POST['dname'])){
                    $dname=$_POST['dname'];
                    $upd="update doctor set doc_name='$dname' where doc_id=$doc_id";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo "<script>";
                        echo"alert('Error updating the doctor name')";
                        echo"</script>";
                        die();
                    }
                    else{
                        echo "<script>";
                        echo"alert('Doctor name successfully updated')";
                        echo"</script>";
                    }
                }
                    if(isset($_POST['email']) && !empty($_POST['email'])){
                    $email=$_POST['email'];
                    $upd="update doctor set email='$email' where doc_id=$doc_id";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo "<script>";
                        echo"alert('Error updating the email address')";
                        echo"</script>";
                        die();
                    }
                    else{
                        echo "<script>";
                        echo"alert('Email Id successfully updated')";
                        echo"</script>";
                    }

                }
                 if(isset($_POST['phno']) && !empty($_POST['phno'])){
                    $phno=$_POST['phno'];
                    $upd="update doctor set phone='$phno' where doc_id=$doc_id";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo "<script>";
                        echo"alert('Error updating the phone number')";
                        echo"</script>";
                        die(mysql_error());
                    }
                    else{
                        echo "<script>";
                        echo"alert('Phone number successfully updated')";
                        echo"</script>";
                    }
                }
                 if(isset($_POST['address']) && !empty($_POST['address'])){
                    $address=$_POST['address'];
                    $upd="update doctor set address='$address' where doc_id=$doc_id";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo "<script>";
                        echo"alert('Error updating the address')";
                        echo"</script>";
                        die(mysql_error());
                    }
                    else{
                        echo "<script>";
                        echo"alert('Address successfully updated')";
                        echo"</script>";
                    }
                }
                    if(isset($_POST['age']) && !empty($_POST['age'])){
                    $age=$_POST['age'];
                    $upd="update doctor set age='$age' where doc_id=$doc_id";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo "<script>";
                        echo"alert('Error updating the  age')";
                        echo"</script>";
                        die();
                    }
                    else{
                        echo "<script>";
                        echo"alert('Age successfully updated')";
                        echo"</script>";
                    }
                } 
                    if(isset($_POST['sex']) && !empty($_POST['sex'])){
                    $sex=$_POST['sex'];
                    $upd="update doctor set sex='$sex' where doc_id=$doc_id";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo "<script>";
                        echo"alert('Error updating gender')";
                        echo"</script>";
                        die();
                    }
                    else{
                        echo "<script>";
                        echo"alert('Gender successfully updated')";
                        echo"</script>";
                    }
                }
                if(isset($_POST['specialization']) && !empty($_POST['specialization'])) {
                    $specialization=$_POST['specialization'];
                    $upd="update doctor set specialization='$specialization' where doc_id=$doc_id";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                            echo "<script>";
                            echo"alert('Error updating the specialization')";
                            echo"</script>";
                            die();
                  }
                    else{
                            echo "<script>";
                            echo"alert('Specialization successfully updated')";
                            echo"</script>";
                    }
                    
                    
                }
                 if(isset($_POST['fees']) && !empty($_POST['fees'])){
                    $flag=0;
                    $fees=$_POST['fees'];
                    $sel="Select doc_id from fees";
                    $ret_sel=mysql_query($sel,$con);
                    while($rows=mysql_fetch_assoc($ret_sel)){
                        if($doc_id==$rows['doc_id']){
                            $flag=1;
                        }
                    }
                    if($flag==0){
                        echo "<script>";
                        echo"alert('The fees of the doctor is not set')";
                        echo"</script>";
                        die();
                    }
                    $upd="update fees set doc_fees='$fees' where doc_id=$doc_id";
                    $ret_upd=mysql_query($upd,$con);
                    echo $ret_upd;
                    if(!$ret_upd){
                        echo "<script>";
                        echo"alert('Error updating the fees.')";
                        echo"</script>";
                        die();
                    }
                    else{
                        echo "<script>";
                        echo"alert('Fees successfully updated')";
                        echo"</script>";
                    }
                }   
            
            }                
             else{
                echo"<script>";
                 echo"alert('Record with Doctor_ID '+$doc_id+' doesn\'t exist')";
                 echo"</script>";
                 die();
                 }
            
        }
        

                
         
            
         ?>
            
               
    </body>
</html>