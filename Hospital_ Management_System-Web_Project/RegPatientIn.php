<?php

    if(isset($_POST['Pname']) && isset($_POST['Email']) && isset($_POST['phno']) && isset($_POST['date']) && isset($_POST['address']) && isset($_POST['sex']) && isset($_POST['age']) && isset($_POST['nod'])  && isset($_POST['did']) && isset($_POST['Rid'])){
        $pname=$_POST['Pname'];
        $email=$_POST['Email'];
        $phno=$_POST['phno'];
        $date=$_POST['date'];
        $address=$_POST['address'];
        $sex=$_POST['sex'];
        $age=$_POST['age'];
        $nod=$_POST['nod'];
        $doc_id=$_POST['did'];
        $room_id=$_POST['Rid'];
        
        $file=fopen("patient_tb.txt","r");
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
                $table="create table Inpatient(pid int Auto_increment,pname varchar(20),date date,email varchar(30),phone bigint,address varchar(100),sex char,age int,nod int,doc_id int not null,room_id int not null,ANA varchar(3),aPTT varchar(4),AIC varchar(3),BMP varchar(3),CBC varchar(3),CMP varchar(3),Electrolytes varchar(20),ESR varchar(3),AAT varchar(3),Urine_culture varchar(20),Throat_culture varchar(20),Rapid_Malarial_Test varchar(30),VidalTest varchar(20),ELISA varchar(5),Xray varchar(5),
                primary key(pid),
                foreign key(AAT) references tests(test_name),
                foreign key(AIC) references tests(test_name),
                foreign key(ANA) references tests(test_name),
                foreign key(aPTT) references tests(test_name),
                foreign key(BMP) references tests(test_name),
                foreign key(CBC) references tests(test_name),
                foreign key(CMP) references tests(test_name),
                foreign key(Electrolytes) references tests(test_name),
                foreign key(ELISA) references tests(test_name),
                foreign key(ESR) references tests(test_name),
                foreign key(Rapid_Malarial_Test) references tests(test_name),
                foreign key(Throat_culture) references tests(test_name),
                foreign key(Urine_culture) references tests(test_name),
                foreign key(VidalTest) references tests(test_name),
                foreign key(Xray)references tests(test_name),
                foreign key(doc_id) references doctor(doc_id),
                foreign key(room_id) references room(room_id)
                
            )";
                
                $ret_table=mysql_query($table,$con);
                if(!$ret_table){
                    echo"<script>";
                    echo"alert('Error in creating table')";
                    echo"</script>";
                    die(mysql_error());
                }
                else{
                    fclose($file);
                    $file=fopen("patient_tb.txt","w");
                    fwrite($file,"0");
                    fclose($file);
                    $ins="insert into Inpatient(pid,pname,date,email,phone,address,sex,age,nod,doc_id,room_id)values(1101,'$pname','$date','$email',$phno,'$address','$sex',$age,$nod,$doc_id,$room_id)";
                    $ret_ins=mysql_query($ins,$con);
                    $sql = "CREATE TRIGGER `Uppercase2` BEFORE INSERT ON `inpatient` FOR EACH ROW SET NEW.pname=UPPER(NEW.pname);";
                     mysql_query($sql); 
                    if(!$ret_ins){
                        echo"<script>";
                        echo"alert('Error in inserting values into the table')";
                        echo"</script>";
                        die(mysql_error());
                    }
                    
                    else{
                      
                    
                        echo"<script>";
                        echo"alert('Records Successfully inserted!!')";
                        echo"</script>";
                        
                    }
                }
                
            }
            else{
                    $ins="insert into Inpatient(pname,date,email,phone,address,sex,age,nod,doc_id,room_id)values('$pname','$date','$email',$phno,'$address','$sex',$age,$nod,$doc_id,$room_id)";
                    $ret_ins=mysql_query($ins,$con);
                    $sql = "CREATE TRIGGER `Uppercase2` BEFORE INSERT ON `inpatient` FOR EACH ROW SET NEW.pname=UPPER(NEW.pname);";
                     mysql_query($sql);
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
        }
                      
    }
?>