<html>

    <head>
    
        <title>Update Rooms</title>
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
            #report-id{
                
                color:red;
            }
            
        </style>
    </head>
    <body>
        <h2>Update Rooms</h2>
        <div id="room">
            <p class="head">Update Room Details</p>
            <form action="UpdateRoom.php" method="post" onsubmit="return validateform()">
                <span class="form-fields">Room ID</span><br><input type="number" id="rid" name="room_id" required><br>
                <p id="report-id"></p>
                <span class="form-fields">Room Name</span><br><input type="text" id="rm" name="rname"><br>
                <p id="report-name"></p>
                <span class="form-fields">Cost/Day</span><br><input type="number" name="cost"><br>
                 <input type="Submit" value="Update Room">     
                             
                
            </form>
            
        </div>
        
       
        <script type="text/javascript">
            
            function validateform(){
                
                var name=document.getElementById('rm').value;
                var room_id=document.getElementById('rid').value;
                var flag=1;
                if(/^[A-z ]*$/.test(name)==false){
                    document.getElementById('report-name').innerHTML="*Invalid name";
                    flag=0;
                }
                if(/^\d{4}*$/.test(room_id)==false){
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
                        echo"<script>";
                        echo"alert('Error in establishing connection')";
                        echo"</script>";
                        die();
                    }
            if(isset($_POST['room_id'])){
                $room_id=$_POST['room_id'];
                $flag=0;
                 mysql_select_db('admin');
                $sel="Select room_id from room";
                $ret_sel=mysql_query($sel,$con);
                while($rows=mysql_fetch_assoc($ret_sel)){
                    if($room_id==$rows['room_id']){
                        $flag=1;
                    }
                }
                if($flag==1){
                    if(isset($_POST['rname']) && !empty($_POST['rname'])){
                    $rname=$_POST['rname'];
                    $flag=0;

                        $upd="update room set room_name='$rname' where room_id=$room_id ";
                        $ret_upd=mysql_query($upd,$con);
                        if(!$ret_upd){
                            echo"<script>";
                            echo"alert('Error in updating room name')";
                            echo"</script>";
                            die();
                        }
                        else{
                            echo"<script>";
                            echo"alert('Room name successfully updated')";
                            echo"</script>";
                        }
                        
                                                 
                    }
                    if(isset($_POST['cost']) && !empty($_POST['cost'])){
                    $cost=$_POST['cost'];
                    
                        mysql_select_db('admin');
                        $upd="update room set room_cost=$cost where room_id=$room_id ";
                        $ret_upd=mysql_query($upd,$con);
                        if(!$ret_upd){
                            echo"<script>";
                            echo"alert('Error in updating cost')";
                            echo"</script>";
                            die();
                        }
                        else{
                            echo"<script>";
                            echo"alert('Cost successfully updated')";
                            echo"</script>";
                        }
                        
                                                 
                    }
                }
                else{
                    echo"<script>";
                    echo"alert('Room id '+$room_id+' does not exist')";
                    echo"</script>";
                    die();
                }
                
            }
            
         ?>
            
               
    </body>
</html>