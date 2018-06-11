<?php  ob_start();?>
<html>

    <head>
    
        <title>Login</title>
        
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
            body{
                margin:0;
            }
            
            #reg{
                
                width:600px;
                margin-left:400px;
                background-color:#f5f5f5;
                padding:10px;
                height:auto;
                
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
               
                
            }
            .form-fields{
                
                
                font-family: 'Righteous',cursive;
                font-size:20px;
                color:#757575;
                
                
            }
                   
        </style>
        
    </head>
    
    <body>
    
        <h1>LOGIN</h1>
        
        <div id="reg">
        
            <form action="Login.php" method="post">
                
                <span class="form-fields">User Name</span><br><input type="text" name="Username" required ><br>
                <span class="form-fields">Password</span><br><input type="password" name="Password" required><br>
               <br>
                <input type="submit" value="Login">  
                             
                
            </form>
        
        </div>
        <?php

                if(isset($_POST['Username']) && $_POST['Password']){
                $username=$_POST['Username'];
                $password=$_POST['Password'];
                $flag=0;
                $con=mysql_connect("localhost","root","");
                if(! $con){
                    echo "<script>";
                    echo "alert('Error establishing connection')";
                    echo "</script>";
                }
                else{
                    mysql_select_db('admin');
                    $sql="select username,password from reginfo";
                    $ret_sel=mysql_query($sql,$con);
                    if(! $ret_sel){
                        echo "<script>";
                        echo "alert('Error in database selection')";
                        echo "</script>";
                        
                    }
                    else{
                        while($rows=mysql_fetch_array($ret_sel,MYSQL_ASSOC)){
                            if($username===$rows['username'] && password_verify($password,$rows['password'])){
                                
                                    $flag=1;
                                    header('Location: http://localhost/HMS/AdminFunctions.php') ;
                                    exit();
                                    echo "<script>";
                                    echo "alert('Authentication Successful')";
                                    echo "</script>";
                                    
                               
                        }
                            
                    }
                        if($flag==0){
                            
                                    echo "<script>";
                                    echo "alert('Authentication unsuccessful.Check your username and password')";
                                    echo "</script>";
                                    die();
                            
                        }

                       
                    
                }
            }
        }
      ?>  
   </body>
</html>