<html>

    
    <head>
    
        <title>Delete Patient</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <style>
        
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
             .head{
                width:100%;
                font-size:30px;
                text-align: center;
                text-shadow: 3px 4px rgba(0,0,0,0.2);
                background-color:#b6dde7;
                color:white;
                margin:0px;
                
            }
            #del{
                
                width:600px;
                margin-left:20px;
                background-color:#f5f5f5;
                float:left;
                margin-top:50px;
                
            }
            #del input[type="number"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            #del input[type="submit"]{
                
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
            
            #del2{
                
                width:600px;
                background-color:#f5f5f5;
                float:left;
                margin-left: 120px;
                margin-top: 50px;
                
            }
            #del2 input[type="number"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            #del2 input[type="submit"]{
                
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
            body{
                margin:0;
            }
            
        </style>
    </head>
    <body>
    
        <h2>Delete Patient</h2>
        
        <div id="del">
            <p class="head">Inpatient-Delete</p>
            <form action="DeletePatient.php" method="post">
                <span class="form-fields">Patient ID</span><br><input type="number" name="pid"><br>
                <input type="submit" value="Submit" name="inp"><br>
                
            </form>
            
        </div>
        <div id="del2">
            <p class="head">Outpatient-Delete</p>
            <form action="DeletePatient.php" method="post">
                <span class="form-fields">Patient ID</span><br><input type="number" name="pid"><br>
                <input type="submit" value="Submit" name="op"><br>
                
            </form>
            
        </div>
        <?php
            if(isset($_POST['pid'])&&isset($_POST['inp'])){
                $pid=$_POST['pid'];
                $con=mysql_connect("localhost","root","");
                if(!$con){
                     echo"<script>";
                     echo"alert('Error in establishing connection')";
                     echo"</script>";
                     die();
                 }
                else{
                    mysql_select_db('admin');
                    $del="Delete from Inpatient where pid=$pid";
                    $sel="select pid from Inpatient";
                    $ret_sel=mysql_query($sel,$con);
                    $flag=0;
                    while($rows=mysql_fetch_array($ret_sel,MYSQL_ASSOC)){
                        if($rows['pid']==$pid){
                            $flag=1;
                            break;
                        }
                    }
                    
                    if($flag==1){
                        
                        $ret_del=mysql_query($del,$con);
                        if(!$ret_del){
                            
                             echo"<script>";
                             echo"alert('Error in deleting')";
                             echo"</script>";
                             die();
                        }
                        else{
                            echo"<script>";
                            echo"alert('Record with Patient_ID '+$pid+' is deleted')";
                            echo"</script>";
                            die();
                        } 
                                          
                    }
                    else{
                            echo"<script>";
                            echo"alert('Record with Patient_ID '+$pid+' doesn\'t exist')";
                            echo"</script>";
                        
                            die();
                    }
                    
                }
            }
        if(isset($_POST['pid'])&&isset($_POST['op'])){
                $pid=$_POST['pid'];
                $con=mysql_connect("localhost","root","");
                if(!$con){
                     echo"<script>";
                     echo"alert('Error in establishing connection')";
                     echo"</script>";
                     die();
                 }
                else{
                    mysql_select_db('admin');
                    $del="Delete from Outpatient where pid=$pid";
                    $sel="select pid from Outpatient";
                    $ret_sel=mysql_query($sel,$con);
                    $flag=0;
                    while($rows=mysql_fetch_array($ret_sel,MYSQL_ASSOC)){
                        if($rows['pid']==$pid){
                            $flag=1;
                            break;
                        }
                    }
                    
                    if($flag==1){
                        
                        $ret_del=mysql_query($del,$con);
                        if(!$ret_del){
                            
                             echo"<script>";
                             echo"alert('Error in deleting')";
                             echo"</script>";
                             die();
                        }
                        else{
                            echo"<script>";
                            echo"alert('Record with Patient_ID '+$pid+' is deleted')";
                            echo"</script>";
                            die();
                        } 
                                          
                    }
                    else{
                            echo"<script>";
                            echo"alert('Record with Patient_ID '+$pid+' doesn\'t exist')";
                            echo"</script>";
                        
                            die();
                    }
                    
                }
            }
    ?>
    
    </body>
    
</html>