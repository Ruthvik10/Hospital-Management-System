<html>

    <head>
    
        <title>View Doctor Records</title>
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
                margin: 0;
            }
           
            #records{
                
                position: relative;
                top:40px;
                overflow:scroll;
                width:100%;
                height:400px;
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
            
           
    </style>
        
    </head>
    
    <body>
    
        <h2>View Doctor Records</h2>
        
        <div id="records">
            
            <table>
            
                <thead>
            
                <tr>
                
                    <th>DOCTOR ID</th> 
                    <th>DOCTOR NAME</th> 
                    <th>EMAIL</th> 
                    <th>PHONE</th> 
                    <th>ADDRESS</th> 
                    <th>SPECIALIZATION</th>
                    <th>SEX</th>
                    <th>AGE</th> 
                    <th>FEES</th>
                </tr>
                </thead>
                <tbody>
                
                    <?php
                        $con=mysql_connect("localhost","root","");
                    if(!$con){
                        echo"<script>";
                        echo"alert('Error in establishing connection')";
                        echo"</script>";
                        die(mysql_error());
                    }
                    else{
                        mysql_select_db('admin');
                        $select=mysql_query("CALL ViewDoctors()");
                        if(!$select){
                            /*echo"<script>";
                            echo"alert('Error in establishing connection')";
                            echo"</script>";*/
                            die(mysql_error());
                        }
                        else{
                            while($rows=mysql_fetch_array($select,MYSQL_NUM)){
                                echo"<tr>";
                                echo"<td>$rows[0]</td>";
                                echo"<td>$rows[1]</td>";
                                echo"<td>$rows[2]</td>";
                                echo"<td>$rows[3]</td>";
                                echo"<td>$rows[4]</td>";
                                echo"<td>$rows[5]</td>";
                                echo"<td>$rows[6]</td>";
                                echo"<td>$rows[7]</td>";
                                echo"<td>$rows[9]</td>";
                                echo"</tr>";
                            }
                        }
                        
                    }
                        
                    ?>
                </tbody>
            </table>
        
            </div>
      
            
    </body>
</html>