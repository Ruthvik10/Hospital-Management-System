<!DOCTYPE html>
<html>
<head>
	<title>Doctor Fees</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
	<style type="text/css">
		 
             #con{
                
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
                color:white;
                margin:0px;
                
            }
             .form-fields{
                
                
                font-family: 'Righteous',cursive;
                font-size:20px;
                color:#757575;
                
                
            }
             #con input[type="number"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #con input[type="submit"]{
                
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
             #report-id{
                
                color:red;
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
               	margin-top:0;               
            }
            body{
            	margin:0;
            	padding: 0;
            }
                      
	</style>
</head>
<body>
	<h2>Doctor Fees</h2>
	<div id="con">
		<p class="head">Fees</p>
		<form action="DoctorFees.php" method="post" onsubmit="return validate()">
			<span class="form-fields">DoctorId</span><br><input type="number" id="did" name="doc_id" required><br>
             <p id="report-id"></p>
             <span class="form-fields">Fees</span><br><input type="number" id="fees" name="doc_fee" required><br>
             <input type="submit" name="Submit"><br>
        </form>
	</div>
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
	<?php

		if(isset($_POST['doc_id'])&& isset($_POST['doc_fee'])){
			$id=$_POST['doc_id'];
			$fee=$_POST['doc_fee'];
			$file=fopen("doctor_fees.txt","r");
			$notable=fgetc($file);
			$con=mysql_connect("localhost","root","");
			if(!$con){
	                    echo"<script>";
	                    echo"alert('Error in establishing connection')";
	                    echo"</script>";
	                }
	        else{
	        	mysql_select_db("admin");
	        	if($notable=="1"){
	        		$table="Create table Fees(doc_id int,doc_fees int,primary key(doc_id),
	        			foreign key(doc_id) references doctor(doc_id) on delete cascade)";
	        		$ret_table=mysql_query($table,$con);
	        		if(!$ret_table){
                            echo"<script>";
                            echo"alert('Error in creating table')";
                            echo"</script>";
                            die();
                    }
                    else{
                    	$ins="insert into fees(doc_id,doc_fees)values('$id','$fee')";
                    	$ret_ins=mysql_query($ins,$con);
                    	 if(!$ret_ins){
                                echo"<script>";
                                echo"alert('Error in inserting values into the table.Check the doctor id.')";
                                echo"</script>";
                                die();
                            }
                            else{
                                echo"<script>";
                                echo"alert('Records Successfully inserted!!')";
                                echo"</script>";
                                
                            }
                            fclose($file);
                            $file=fopen("doctor_fees.txt","w");
                            fwrite($file,"0");
                    }

	        	}
	        	else{
	        		$ins="insert into fees(doc_id,doc_fees)values('$id','$fee')";
                    	$ret_ins=mysql_query($ins,$con);
                    	 if(!$ret_ins){
                                echo"<script>";
                                echo"alert('Error in inserting values into the table.Check the doctor id.')";
                                echo"</script>";
                                die();
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