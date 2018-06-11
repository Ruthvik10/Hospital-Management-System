<?php
    $flag2=1;
    $con=mysql_connect("localhost","root","");
    if(!$con){
         echo"<script>";
         echo"alert('Error in establishing connection')";
         echo"</script>";
         
    }
    else{
        $pid=$_POST['Pid'];
        
        mysql_select_db('admin');
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
            
            if(!empty($_POST['Pname'])){
                $pname=$_POST['Pname'];
                $upd="update Outpatient set pname='$pname'where pid=$pid";
                  
                $ret_upd=mysql_query($upd,$con);
                if(!$ret_upd){
                   echo"<script>";
                    echo"alert('Error in updating name')";
                    echo"</script>";
                    die(mysql_error());
                    
                }
                else{
                    $sql="CREATE TRIGGER ucase_insert BEFORE INSERT ON 'outpatient' FOR EACH ROW
                        SET NEW.pname = UPPER(NEW.pname)";
                        mysql_query($sql);
                    echo"<script>";
                    echo"alert('Success in updating name')";
                    echo"</script>";
                }
             
            }
                
                if(!empty($_POST['Email'])){
                    $email=$_POST['Email'];
                    $upd="update Outpatient set email='$email' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo"<script>";
                        echo"alert('Error in updating email')";
                        echo"</script>";
                        die(mysql_error());
                    }
                    else{
                        echo"<script>";
                        echo"alert('Success in updating email')";
                        echo"</script>";
                    }
                }
                if(!empty($_POST['phno'])){
                    $phno=$_POST['phno'];
                    $upd="update Outpatient set phone=$phno where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo"<script>";
                        echo"alert('Error in updating phone number')";
                        echo"</script>";
                        
                    }
                    else{
                        echo"<script>";
                        echo"alert('Success in updating phone number')";
                        echo"</script>";
                    }
                }
                if(!empty($_POST['date'])){
                    $date=$_POST['date'];
                    $upd="update Outpatient set date='$date' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo"<script>";
                        echo"alert('Error in updating date')";
                        echo"</script>";
                        
                    }
                    else{
                        echo"<script>";
                        echo"alert('Success in updating date')";
                        echo"</script>";
                    }
                }
                if(!empty($_POST['address'])){
                    $address=$_POST['address'];
                    $upd="update Outpatient set address='$address' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo"<script>";
                        echo"alert('Error in updating address')";
                        echo"</script>";
                        
                    }
                    else{
                        echo"<script>";
                        echo"alert('Success in updating address')";
                        echo"</script>";
                    }
                }
                if(!empty($_POST['sex'])){
                    $sex=$_POST['sex'];
                    $upd="update Outpatient set sex='$sex' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo"<script>";
                        echo"alert('Error in updating gender')";
                        echo"</script>";
                        
                    }
                    else{
                        echo"<script>";
                        echo"alert('Success in updating gender')";
                        echo"</script>";
                    }
                }
                if(!empty($_POST['age'])){
                    $age=$_POST['age'];
                    $upd="update Outpatient set age=$age where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo"<script>";
                        echo"alert('Error in updating age')";
                        echo"</script>";
                        
                    }
                    else{
                        echo"<script>";
                        echo"alert('Success in updating age')";
                        echo"</script>";
                    }
                }
                if(!empty($_POST['nod'])){
                    $nod=$_POST['nod'];
                    $upd="update Outpatient set nod=$nod where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo"<script>";
                        echo"alert('Error in updating number of days')";
                        echo"</script>";
                        
                    }
                    else{
                        echo"<script>";
                        echo"alert('Success in number of days')";
                        echo"</script>";
                    }
                }
                if(!empty($_POST['did'])){
                    $doc_id=$_POST['did'];
                    $upd="update Outpatient set doc_id=$doc_id where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo"<script>";
                        echo"alert('Error in updating doctor id')";
                        echo"</script>";
                        
                    }
                    else{
                        echo"<script>";
                        echo"alert('Success in updating doctor id')";
                        echo"</script>";
                    }
                }
                if(!empty($_POST['Rid'])){
                    $room_id=$_POST['Rid'];
                    $upd="update Outpatient set room_id=$room_id where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        echo"<script>";
                        echo"alert('Error in updating room id')";
                        echo"</script>";
                        
                    }
                    else{
                        echo"<script>";
                        echo"alert('Success in updating room id')";
                        echo"</script>";
                    }
                }
               if(!empty($_POST['AAT'])){
                    $AAT=$_POST['AAT'];
                    $upd="update Outpatient set AAT='$AAT' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                       $flag2=0;
                    }
                    
                }
                 if(!empty($_POST['AIC'])){
                    $AIC=$_POST['AIC'];
                    $upd="update Outpatient set AIC='$AIC' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                                   
                 if(!empty($_POST['ANA'])){
                    $ANA=$_POST['ANA'];
                    $upd="update Outpatient set ANA='$ANA' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                 if(!empty($_POST['aPTT'])){
                    $aPTT=$_POST['aPTT'];
                    $upd="update Outpatient set aPTT='$aPTT' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                   if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if(!empty($_POST['BMP'])){
                    $BMP=$_POST['BMP'];
                    $upd="update Outpatient set BMP='$BMP' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if(!empty($_POST['CBC'])){
                    $CBC=$_POST['CBC'];
                    $upd="update Outpatient set CBC='$CBC' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if(!empty($_POST['CMP'])){
                    $CMP=$_POST['CMP'];
                    $upd="update Outpatient set CMP='$CMP' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }

                if(!empty($_POST['Electrolytes'])){
                    $Electrolytes=$_POST['Electrolytes'];
                    $upd="update Outpatient set Electrolytes='$Electrolytes' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if(!empty($_POST['ELISA'])){
                    $ELISA=$_POST['ELISA'];
                    $upd="update Outpatient set ELISA='$ELISA' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if(!empty($_POST['ESR'])){
                    $ESR=$_POST['ESR'];
                    $upd="update Outpatient set ESR='$ESR' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if(!empty($_POST['Rapid_Malarial_Test'])){
                    $Rapid_Malarial_Test=$_POST['Rapid_Malarial_Test'];
                    $upd="update Outpatient set Rapid_Malarial_Test='$Rapid_Malarial_Test' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if(!empty($_POST['Throat_culture'])){
                    $Throat_culture=$_POST['Throat_culture'];
                    $upd="update Outpatient set Throat_culture='$Throat_culture' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if(!empty($_POST['Urine_culture'])){
                    $Urine_culture=$_POST['Urine_culture'];
                    $upd="update Outpatient set Urine_culture='$Urine_culture' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if(!empty($_POST['VidalTest'])){
                    $VidalTest=$_POST['VidalTest'];
                    $upd="update Outpatient set VidalTest='$VidalTest' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if(!empty($_POST['Xray'])){
                    $Xray=$_POST['Xray'];
                    $upd="update Outpatient set Xray='$Xray' where pid=$pid";
                    $ret_upd=mysql_query($upd,$con);
                    if(!$ret_upd){
                        $flag2=0;
                        
                    }
                }
                if($flag2==1)
                {
                    echo"<script>";
                    echo"alert('Success in updating test(s)')";
                    echo"</script>";
                }
                if($flag2==0){
                    echo"<script>";
                    echo"alert('Error in updating one or more tests')";
                    echo"</script>";
                }
                                       
        }
        else{
            echo"<script>";
            echo"alert('Patient id '+$pid+' does not exist')";
            echo"</script>";
        }
    }
        
        
    
?>  
    