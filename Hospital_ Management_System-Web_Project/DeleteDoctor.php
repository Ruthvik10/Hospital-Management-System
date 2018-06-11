<html>

    
    <head>
    
        <title>Delete Doctor</title>
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
            #del{
                
                width:600px;
                background-color:#f5f5f5;
                margin:0px auto;
                
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
            #report-id{
                color:red;
            }
            
                        
        </style>
    </head>
    <body>
    
        <h2>Delete Doctor</h2>
        
        <div id="del">
            <p class="head">Doctor-Delete</p>
            <form action="DeleteDoctor.php" method="post" onsubmit="return validate()">
                <span class="form-fields">Doctor ID</span><br><input type="number" name="doc_id" id="did"><br>
                <p id="report-id"></p>
                <input type="submit" value="Delete"><br>
                
            </form>
            <script>
                function validate(){
                    var doc_id=document.getElementById('did').value;
                    var flag=1;
                    if(/^\d{4}$/.test(doc_id)==false){
                            document.getElementById('report-id').innerHTML="*Invalid Doctor ID";
                            flag=0;
                        }
                    if(flag==0){
                        return false;
                    }
                }
            </script>
            
        </div>
        
        <?php
            if(isset($_POST['doc_id'])){
                $doc_id=$_POST['doc_id'];
                $con=mysql_connect("localhost","root","");
                if(!$con){
                     echo"<script>";
                     echo"alert('Error in establishing connection')";
                     echo"</script>";
                     die();
                 }
                else{
                    mysql_select_db('admin');
                    $del="Delete from doctor where doc_id=$doc_id";
                    $sel="select doc_id from doctor";
                    $ret_sel=mysql_query($sel,$con);
                    $flag=0;
                    while($rows=mysql_fetch_array($ret_sel,MYSQL_ASSOC)){
                        if($rows['doc_id']==$doc_id){
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
                            echo"alert('Record with Doctor_ID '+$doc_id+' is deleted')";
                            echo"</script>";
                            die();
                        } 
                                          
                    }
                    else{
                            echo"<script>";
                            echo"alert('Record with Doctor_ID '+$doc_id+' doesn\'t exist')";
                            echo"</script>";
                        
                            die();
                    }
                    
                }
            }
       
        
    ?>
    
    </body>
    
</html>