<html>
    <head>
        <title>Admin Functions</title>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <style>
        
         h2{
                
                height:80px;
                font-family: 'Righteous';
                font-size:50px;
                background-color:#b6dde7;
                color: white;
                text-align: left;
                text-shadow: 4px 4px rgba(0,0,0,0.2);
                padding:10px 10px 5px 10px ; 
                margin:0;  
                
            } 
            body{
                margin: 0;
            }
        #fun{
                
                width:900px;
                margin:0px auto;
                background-color:#f5f5f5;
                margin-top:80px;
                box-shadow: 8px 8px rgba(0,0,0,0.7);
                
            }
         #fun input[type="radio"]{
                padding:10px;
                
                margin:10px 10px 10px 0px;
        }
         #fun input[type="submit"]{
                
                width:100%;      
                padding:10px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                margin:40px 0px 0px 0px;
                color:white;
                background-color:#b6dde7;
                border-style:outset;
                border-radius:5px;
                cursor:pointer;
                font-weight:bold;
                
                
            }
        .form-fields{
                
                
                font-family: 'Righteous',cursive;
                font-size:25px;
                color:#757575;
                margin-left:20px;

               
            }
        .margin{
            margin-right:325px;
        }
         .margin2{
            margin-right:335px;
        }
        .label{
            font-family: 'Righteous',cursive;
            font-size:30px;
            background-color:#b6dde7;
            color: white;
            padding:0px;
            margin:20px,0px,0px,0px;
            width:100%;
            text-align: center;
            text-shadow: 3px 4px rgba(0,0,0,0.2);
                
        }
            
    </style>
    <body>
        <h2>Admin Functions</h2>
        <div id="fun">
            <p class="label">Select the category</p>   
            <form action="AdminFunctions.php" method="post">
                
                <input type="radio" name="name" value="patient"><span class="form-fields margin">Patient</span>
                <input type="radio" name="name" value="doctor"><span class="form-fields">Doctor</span>
                <p><input type="radio" name="name" value="rooms"><span class="form-fields margin2">Rooms</span>
                <input type="radio" name="name" value="pinfo"><span class="form-fields"> Complete Patient Information</span></p>
                <input type="submit" value="Select">
                
        </form>
        
        </div>
        
        <?php
            if(isset($_POST['name'])){
                $name=$_POST['name'];
                switch($name){
                case "patient":
                    header('Location: http://localhost/HMS/Patient-menu.php');
                    exit();
                    break;
                
                case "doctor":
                    header('Location: http://localhost/HMS/Doctor-menu.php');
                    exit();
                    break;
                case "rooms":
                    header('Location: http://localhost/HMS/Room-menu.php');
                    exit();
                    break;
                case "pinfo":
                    header('Location: http://localhost/HMS/PatientManagement.php');
                    exit();
                    break;
                
               }
            }
            
        ?>
    </body>
</html>