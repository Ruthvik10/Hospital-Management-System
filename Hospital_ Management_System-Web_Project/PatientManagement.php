<html>

    <head>
    
        <title>Patient Management Information</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
            padding:10px 35px 10px 10px;
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
    
        <h2>Patient Management Information</h2>
        <div id="inpatient">
        
            <button id="inp">Inpatient Information</button>
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
                   <th>DOCTOR NAME</th>
                   <th>CONSULTATION</th>
                   <th>ROOM TYPE</th>
                   <th>TEST COST</th>
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
                        $select="select inpatient.*,doctor.doc_name,fees.doc_fees,room.room_name from inpatient,doctor,room,fees where inpatient.doc_id=doctor.doc_id AND inpatient.room_id=room.room_id AND doctor.doc_id=fees.doc_id";
                        $ret_sel=mysql_query($select,$con);

                        if(!$ret_sel){
                           /* echo"<script>";
                            echo"alert('Error in retrieving values')";
                            echo"</script>";*/
                            echo(mysql_error());
                        }
                        else{
                            while($rows=mysql_fetch_array($ret_sel,MYSQL_ASSOC)){
                                echo"<tr>";
                                echo"<td>{$rows['pid']}</td>";
                                echo"<td>{$rows['pname']}</td>";
                                echo"<td>{$rows['date']}</td>";
                                echo"<td>{$rows['email']}</td>";
                                echo"<td>{$rows['phone']}</td>";
                                echo"<td>{$rows['address']}</td>";
                                echo"<td>{$rows['sex']}</td>";
                                echo"<td>{$rows['age']}</td>";
                                echo"<td>{$rows['nod']}</td>";
                                echo"<td>{$rows['doc_id']}</td>";
                                echo"<td>{$rows['room_id']}</td>";
                                echo"<td>{$rows['ANA']}</td>";
                                echo"<td>{$rows['aPTT']}</td>";
                                echo"<td>{$rows['AIC']}</td>";
                                echo"<td>{$rows['BMP']}</td>";
                                echo"<td>{$rows['CBC']}</td>";
                                echo"<td>{$rows['CMP']}</td>";
                                echo"<td>{$rows['Electrolytes']}</td>";
                                echo"<td>{$rows['ESR']}</td>";
                                echo"<td>{$rows['AAT']}</td>";
                                echo"<td>{$rows['Urine_culture']}</td>";
                                echo"<td>{$rows['Throat_culture']}</td>";
                                echo"<td>{$rows['Rapid_Malarial_Test']}</td>";
                                echo"<td>{$rows['VidalTest']}</td>";
                                echo"<td>{$rows['ELISA']}</td>";
                                echo"<td>{$rows['Xray']}</td>";
                                echo"<td>{$rows['doc_name']}</td>";
                                echo"<td>{$rows['doc_fees']}</td>";
                                echo"<td>{$rows['room_name']}</td>";
                                
                                
                                $total=cost($rows['ANA'])+cost($rows['aPTT'])+cost($rows['AIC'])+cost($rows['BMP'])+cost($rows['CBC'])+cost($rows['CMP'])+cost($rows['Electrolytes'])+cost($rows['ESR'])+cost($rows['AAT'])+cost($rows['Urine_culture'])+cost($rows['Throat_culture'])+cost($rows['Rapid_Malarial_Test'])+cost($rows['VidalTest'])+cost($rows['ELISA'])+cost($rows['Xray']);
                                echo"<td>$total</td>";
                                echo"</tr>";
                                                              
                            }
                            
                                
                           }

                        }
                         function cost($test){
                                    if(!empty($test)){
                                        $con=mysql_connect("localhost","root","");
                                        $sel="select cost from tests where test_name='$test'";
                                        $retval=mysql_query($sel,$con);
                                        if(!$retval){
                                             /* echo"<script>";
                                             echo"alert('Error in retrieving values')";
                                             echo"</script>";*/
                                             echo(mysql_error());    
                                        }
                                        while($row=mysql_fetch_array($retval,MYSQL_ASSOC)){
                                            return $row['cost'];
                                        }

                                    }
                                    else{
                                        return 0;
                                    }
                                } 
                    ?>
                </tbody>
            </table>
        
            </div>
        
        
        <div id="outpatient">
        
            <button id="op"> Outpatient Information</button>
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
                   <th>DOCTOR NAME</th>
                   <th>CONSULTATION FEES</th>   
                   <th>TEST COST</th>
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
                        $select="select outpatient.*,doctor.doc_name,fees.doc_fees from outpatient,doctor,fees where outpatient.doc_id=doctor.doc_id AND fees.doc_id=doctor.doc_id";
                        $ret_sel=mysql_query($select,$con);
                        if(!$ret_sel){
                           /* echo"<script>";
                            echo"alert('Error in retrieving values')";
                            echo"</script>";*/
                            echo(mysql_error());
                        }
                        else{
                            while($rows=mysql_fetch_array($ret_sel,MYSQL_ASSOC)){
                               echo"<tr>";
                                echo"<td>{$rows['pid']}</td>";
                                echo"<td>{$rows['pname']}</td>";
                                echo"<td>{$rows['date']}</td>";
                                echo"<td>{$rows['email']}</td>";
                                echo"<td>{$rows['phone']}</td>";
                                echo"<td>{$rows['address']}</td>";
                                echo"<td>{$rows['sex']}</td>";
                                echo"<td>{$rows['age']}</td>";
                                echo"<td>{$rows['doc_id']}</td>";
                                echo"<td>{$rows['ANA']}</td>";
                                echo"<td>{$rows['aPTT']}</td>";
                                echo"<td>{$rows['AIC']}</td>";
                                echo"<td>{$rows['BMP']}</td>";
                                echo"<td>{$rows['CBC']}</td>";
                                echo"<td>{$rows['CMP']}</td>";
                                echo"<td>{$rows['Electrolytes']}</td>";
                                echo"<td>{$rows['ESR']}</td>";
                                echo"<td>{$rows['AAT']}</td>";
                                echo"<td>{$rows['Urine_culture']}</td>";
                                echo"<td>{$rows['Throat_culture']}</td>";
                                echo"<td>{$rows['Rapid_Malarial_Test']}</td>";
                                echo"<td>{$rows['VidalTest']}</td>";
                                echo"<td>{$rows['ELISA']}</td>";
                                echo"<td>{$rows['Xray']}</td>";
                                echo"<td>{$rows['doc_name']}</td>";
                                echo"<td>{$rows['doc_fees']}</td>";
                                  $total=cost($rows['ANA'])+cost($rows['aPTT'])+cost($rows['AIC'])+cost($rows['BMP'])+cost($rows['CBC'])+cost($rows['CMP'])+cost($rows['Electrolytes'])+cost($rows['ESR'])+cost($rows['AAT'])+cost($rows['Urine_culture'])+cost($rows['Throat_culture'])+cost($rows['Rapid_Malarial_Test'])+cost($rows['VidalTest'])+cost($rows['ELISA'])+cost($rows['Xray']);
                                echo"<td>$total</td>";
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