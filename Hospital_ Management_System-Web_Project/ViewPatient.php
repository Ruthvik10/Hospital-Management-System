<html>

    <head>
    
        <title>View Patient Records</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        
        <script src="jquery.js"></script>
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
            #inpatient{
               
                display:block;
            }
        #inpatient button{
             margin-left:400px;
            margin-bottom:10px;
            padding:10px;
            box-shadow:5px 5px rgba(0,0,0,0.5);
            color:white;
            cursor:pointer;
            background-color:#b6dde7;
            border-style:outset;
            font-size:30px;
            font-family: 'Righteous';  
        }
            #records{
                
                
                display:none;
                overflow:scroll;
                height:350px;
                width:100%;
                
            }
            
            #records th,td{
                padding: 10px;
                font-family: 'Righteous';
                font-size:20px;
                text-align: center;
                
            }
            #records table{
                                
                    
                    border-collapse: collapse;
                    width:100%;

            }
            #records th{
                                
                    background-color: #b6dde7;

            }
            
            #records tr:nth-child(even){
                background-color: #f2f2f2;
            }
            
             #outpatient{
                
                display:inline-block;
                
            }
        #outpatient button{
            margin-left:400px;
            margin-top:10px;
            margin-bottom:10px;
            padding:10px;
            box-shadow:5px 5px rgba(0,0,0,0.5);
            color:white;
            cursor:pointer;
            background-color:#b6dde7;
            border-style:outset;
            font-size:30px;
            font-family: 'Righteous';    
            
        }
            #records2{
                
                display:none;
                overflow:scroll;
                width:100%;
                height:350px;
                
            }
            
            #records2 th,td{
                padding: 10px;
                font-family: 'Righteous';
                font-size:20px;
                text-align: center;
                
            }
            #records2 table{
                                
                    
                    border-collapse: collapse;
                    width:100%;

            }
            #records2 th{
                                
                    background-color: #b6dde7;

            }
            
            #records2  tr:nth-child(even){
                background-color: #f2f2f2;
            }
        
    </style>
        
    </head>
    
    <body>
    
        <h2>View Patient Records</h2>
        <div id="inpatient">
        
            <button id="inp">Click here to view Inpatient Records</button>
        </div>
        
        <div id="records">
            
            <table>
            
                <thead>
            
                <tr>
                
                    <th>PATIENT ID</th> 
                    <th>PATIENT NAME</th> 
                    <th>DATE</th> 
                    <th>EMAIL</th> 
                    <th>PHONE</th> 
                    <th>ADDRESS</th> 
                    <th>SEX</th>
                    <th>AGE</th> 
                    <th>NOD</th>
                    <th>DOCTOR ID</th>
                    <th>ROOM ID</th>
                   <th>TEST1</th>
                   <th>TEST2</th>
                   <th>TEST3</th>
                   <th>TEST4</th>
                   <th>TEST5</th>
                   <th>TEST6</th>
                   <th>TEST7</th>
                   <th>TEST8</th>
                   <th>TEST9</th>
                   <th>TEST10</th>
                   <th>TEST11</th>
                   <th>TEST12</th>
                   <th>TEST13</th>
                   <th>TEST14</th>
                   <th>TEST15</th> 
                </tr>
                </thead>
                <tbody>
                
                    <?php
                        $con=mysql_connect("localhost","root","");
                    if(!$con){
                        echo"<script>";
                        echo"alert('Error in establishing connection')";
                        echo"</script>";
                        die();
                    }
                    else{
                        mysql_select_db('admin');
                        $select="select *from Inpatient" ;
                        $ret_sel=mysql_query($select,$con);
                        if(!$ret_sel){
                            echo"<script>";
                            echo"alert('Error in retrieving values')";
                            echo"</script>";
                            die();
                        }
                        else{
                            while($rows=mysql_fetch_array($ret_sel,MYSQL_NUM)){
                                echo"<tr>";
                                echo"<td>$rows[0]</td>";
                                echo"<td>$rows[1]</td>";
                                echo"<td>$rows[2]</td>";
                                echo"<td>$rows[3]</td>";
                                echo"<td>$rows[4]</td>";
                                echo"<td>$rows[5]</td>";
                                echo"<td>$rows[6]</td>";
                                echo"<td>$rows[7]</td>";
                                echo"<td>$rows[8]</td>";
                                echo"<td>$rows[9]</td>";
                                echo"<td>$rows[10]</td>";
                                echo"<td>$rows[11]</td>";
                                echo"<td>$rows[12]</td>";
                                echo"<td>$rows[13]</td>";
                                echo"<td>$rows[14]</td>";
                                echo"<td>$rows[15]</td>";
                                echo"<td>$rows[16]</td>";
                                echo"<td>$rows[17]</td>";
                                echo"<td>$rows[18]</td>";
                                echo"<td>$rows[19]</td>";
                                echo"<td>$rows[20]</td>";
                                echo"<td>$rows[21]</td>";
                                echo"<td>$rows[22]</td>";
                                echo"<td>$rows[23]</td>";
                                echo"<td>$rows[24]</td>";
                                echo"<td>$rows[25]</td>";
                                echo"</tr>";
                            }
                        }
                        
                    }
                        
                    ?>
                </tbody>
            </table>
        
            </div>
        
        
        <div id="outpatient">
        
            <button id="op">Click here to view Outpatient records</button>
        </div>
        
        <div id="records2">
            
            <table>
            
                <thead>
            
                <tr>
                
                    <th>PATIENT ID</th> 
                    <th>PATIENT NAME</th> 
                    <th>DATE</th> 
                    <th>EMAIL</th> 
                    <th>PHONE</th> 
                    <th>ADDRESS</th> 
                    <th>SEX</th>
                    <th>AGE</th> 
                    <th>DOCTOR ID</th>
                   <th>TEST1</th>
                   <th>TEST2</th>
                   <th>TEST3</th>
                   <th>TEST4</th>
                   <th>TEST5</th>
                   <th>TEST6</th>
                   <th>TEST7</th>
                   <th>TEST8</th>
                   <th>TEST9</th>
                   <th>TEST10</th>
                   <th>TEST11</th>
                   <th>TEST12</th>
                   <th>TEST13</th>
                   <th>TEST14</th>
                   <th>TEST15</th> 
                </tr>
                </thead>
                <tbody>
                
                    <?php
                        $con=mysql_connect("localhost","root","");
                    if(!$con){
                        echo"<script>";
                        echo"alert('Error in establishing connection')";
                        echo"</script>";
                        die();
                    }
                    else{
                        mysql_select_db('admin');
                        $select="select *from Outpatient";
                        $ret_sel=mysql_query($select,$con);
                        if(!$ret_sel){
                            echo"<script>";
                            echo"alert('Error in retrieving values')";
                            echo"</script>";
                            die();
                        }
                        else{
                            while($rows=mysql_fetch_array($ret_sel,MYSQL_NUM)){
                                echo"<tr>";
                                echo"<td>$rows[0]</td>";
                                echo"<td>$rows[1]</td>";
                                echo"<td>$rows[2]</td>";
                                echo"<td>$rows[3]</td>";
                                echo"<td>$rows[4]</td>";
                                echo"<td>$rows[5]</td>";
                                echo"<td>$rows[6]</td>";
                                echo"<td>$rows[7]</td>";
                                echo"<td>$rows[8]</td>";
                                echo"<td>$rows[9]</td>";
                                echo"<td>$rows[10]</td>";
                                echo"<td>$rows[11]</td>";
                                echo"<td>$rows[12]</td>";
                                echo"<td>$rows[13]</td>";
                                echo"<td>$rows[14]</td>";
                                echo"<td>$rows[15]</td>";
                                echo"<td>$rows[16]</td>";
                                echo"<td>$rows[17]</td>";
                                echo"<td>$rows[18]</td>";
                                echo"<td>$rows[19]</td>";
                                echo"<td>$rows[20]</td>";
                                echo"<td>$rows[21]</td>";
                                echo"<td>$rows[22]</td>";
                                echo"<td>$rows[23]</td>";
                                echo"</tr>";
                            }
                        }
                        
                    }
                        
                    ?>
                </tbody>
            </table>
        
            
        </div>
        <script>
                $("#inp").click(function(){
                    $("#records").toggle(3000);
                });
                 $("#op").click(function(){
                    $("#records2").toggle(3000);
                });
                
            </script>
    </body>
</html>