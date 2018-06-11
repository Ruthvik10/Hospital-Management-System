<html>

    <head>
    
        <title>Add Rooms</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <style>
        
            #room{
                width:600px;
                background-color: #f5f5f5;
                margin:0px auto;
                
            }
            body{
                margin:0px;
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
            #room input[type="text"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
               
               #room input[type="number"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #room input[type="submit"]{
                
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
            
            #room input[type="date"]{
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
            }
             #room input[type="radio"]{
                padding:10px;
                margin:10px 10px 10px 0px;
                
                
            }
             #room select{
                
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
           
        </style>
    </head>
    <body>
        <h2>Add Rooms</h2>
        <div id="room">
            <p class="head">Room Details</p>
            <form action="AddRoom.php" method="post" onsubmit="return validateform()">
                
                
                <span class="form-fields">Room Name</span><br><input type="text" id="rm" name="rname" required ><br>
                <p id="report-name"></p>
                <span class="form-fields">Cost/Day</span><br><input type="number" name="cost" required ><br>
                 <input type="Submit" value="Add Room">     
                             
                
            </form>
            
        </div>
        
       
        <script type="text/javascript">
            
            function validateform(){
                
                var name=document.getElementById('dn').value;
                 
                var flag=1;
                if(/^[A-z ]+$/.test(name)==false){
                    document.getElementById('report-name').innerHTML="*Invalid name";
                    flag=0;
                }
                if(flag==0){
                    return false;
                }
                
         }
         </script> 
         <?php
           

            if(isset($_POST['rname']) && isset($_POST['cost'])){
                $rname=$_POST['rname'];
                $cost=$_POST['cost'];
                $file=fopen("room_tb.txt","r");
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
                        $table="create table room(room_id int Auto_increment,room_name varchar(20),room_cost int,
                        primary key(room_id))";
                        
                        $ret_table=mysql_query($table,$con);
                        if(!$ret_table){
                            echo"<script>";
                            echo"alert('Error in creating table')";
                            echo"</script>";
                            die();
                        }
                        else{
                            $ins="insert into room(room_id,room_name,room_cost)values(4101,'$rname',$cost)";
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
                        $file=fopen("room_tb.txt","w");
                        fwrite($file,"0");
                        fclose($file);
                    }
                    else{
                             $ins="insert into room(room_name,room_cost)values('$rname',$cost)";
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