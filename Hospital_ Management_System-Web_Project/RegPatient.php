<html>

    <head>
    
        <title>Register Patient</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <style>
        
            #inpatient{
                width:600px;
                margin-left:20px;
                background-color: #f5f5f5;
                float:left;
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
            input[type="text"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            
            input[type="email"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            input[type="tel"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            input[type="number"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            input[type="submit"]{
                
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
            
            input[type="date"]{
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
            }
             input[type="radio"]{
                padding:10px;
                margin:10px 10px 10px 0px;
                
                
            }
            .form-fields{
                
                
                font-family: 'Righteous',cursive;
                font-size:20px;
                color:#757575;
                
                
            }
            #outpatient{
                width:600px;
                background-color: #f5f5f5;
                margin-left:100px;
                float:left;
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
            #report-date{
                
                color:red;
            }
             #report-name2{
                
                color:red;
            }
            #report-email2{
                
                color:red;
            }
            #report-phone2{
                
                color:red;
            }
            #report-date2{
                
                color:red;
            }
            body{
                margin:0;
            }
        </style>
    </head>
    <body>
        <h2>Register Patient</h2>
        <div id="inpatient">
            <p class="head">Inpatient-Login</p>
            <form action="RegPatientIn.php" method="post" onsubmit="return validateform()">
                
                
                <span class="form-fields">Patient Name</span><br><input type="text" id="pn" name="Pname" required ><br>
                <p id="report-name"></p>
                <span class="form-fields">Email</span><br><input type="text" id="em" name="Email" required><br>
                <p id="report-email"></p>
                <span class="form-fields">Contact number</span><br><input type="tel" id="co" name="phno" required><br>
                <p id="report-phone"></p>
                <span class="form-fields">Date</span><br><input type="date" name="date" id="da" required><br>
                <p id="report-date"></p>
                <span class="form-fields">Address</span><br><input type="text"  name="address" required><br>
                <span class="form-fields">Sex</span><br><input type="radio" name="sex" value="M" required><span class="form-fields">Male</span><br>
                <input type="radio" name="sex" value="F" required><span class="form-fields">Female</span><br>
                <span class="form-fields">Age</span><br><input type="number" name="age" required ><br>
                <span class="form-fields">No of days</span><br><input type="number" name="nod" required ><br>
                
                <span class="form-fields">Doctor ID</span><br><input type="number" name="did" ><br>
                <span class="form-fields">Room ID</span><br><input type="number" name="Rid"  ><br>
                <input type="submit" value="Submit" >  
                             
                
            </form>
            
        </div>
        
        <div id="outpatient">
            <p class="head">Outpatient-Login</p>
            <form action="RegPatientOut.php" method="post" onsubmit="return validateform2()">
                
                
                <span class="form-fields">Patient Name</span><br><input type="text" id="pna" name="Pname" required ><br>
                <p id="report-name2"></p>
                <span class="form-fields">Email</span><br><input type="text" id="ema" name="Email" required><br>
                <p id="report-email2"></p>
                <span class="form-fields">Contact number</span><br><input type="tel" id="con" name="phno" required><br>
                <p id="report-phone2"></p>
                <span class="form-fields">Date</span><br><input type="date" id="dat" name="date" required><br>
                <p id="report-date2"></p>
                <span class="form-fields">Address</span><br><input type="text" name="address" required><br>
                <span class="form-fields">Sex</span><br><input type="radio" name="sex" value="M" required><span class="form-fields">Male</span><br>
                <input type="radio" name="sex" value="F" required><span class="form-fields">Female</span><br>
                <span class="form-fields">Age</span><br><input type="number" name="age" required ><br>
                
                <span class="form-fields">Doctor ID</span><br><input type="number" name="did" ><br>
               
                <input type="submit" value="Submit">  
                             
                
            </form>
            
        </div>
        
        <script type="text/javascript">
            
            function validateform(){
                
                var name=document.getElementById('pn').value;
                var email=document.getElementById('em').value;
                var phno=document.getElementById('co').value;
                var date=document.getElementById('da').value;
                var mydate=new Date(date);
                var today=new Date();
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
                if(mydate<today){
                    document.getElementById('report-date').innerHTML="*Invalid date";
                    flag=0;
                }
                if(flag==0){
                    return false;
                }
                
         }
            function validateform2(){
                
                var name=document.getElementById('pna').value;
                var email=document.getElementById('ema').value;
                var phno=document.getElementById('con').value;
                var date=document.getElementById('dat').value;
                var mydate=new Date(date);
                var today=new Date();
                var flag=1;
                if(/^[A-z ]+$/.test(name)==false){
                    document.getElementById('report-name2').innerHTML="*Invalid name";
                    flag=0;
                }
                if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)==false){
                    document.getElementById('report-email2').innerHTML="*Invalid email";
                    flag=0;
                }
                if(/^\d{10}$/.test(phno)==false){
                    document.getElementById('report-phone2').innerHTML="*Invalid phone number";
                    flag=0;
                }
                if(mydate<today){
                    document.getElementById('report-date2').innerHTML="*Invalid date";
                    flag=0;
                }
                if(flag==0){
                    return false;
                }
                
         }
            
            
        </script>        
    </body>
</html>