<!DOCTYPE html>
<html>
<head>
	<title>Doctor Fees</title>
	<style type="text/css">
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
                margin:0px;
                
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
	<h2>Doctor Fees</h2>
	<div id="con">
		<div class="head">Fees</div>
		<form action="DoctorFees.php" method="POST" onsubmit="return validate()">
			<span class="form-fields">DoctorId</span><br><input type="number" id="did" name="doc_id" required><br>
             <p id="report-id"></p>
             <span class="form-fields">Fees</span><br><input type="number" id="fees" name="doc_fee" required><br>
        </form>
	</div>
	<script>
		var doc_id=document.getElementById('did').value;
		var fee=document.getElementById('fee').value;
		var flag=1;
		var id=/^[0-9]{4}$/;
		if(id.test(doc_id)==false){
			flag=1;
			document.getElementById('report-id').innerHTML="Invalid doctor id";
		}
		if(flag==0){
			return false;
		}
	</script>

</body>
</html>