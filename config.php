<?php
    $Name = $_POST['Name']; 
    $Email = $_POST['Email']; 
    $PhoneNo = $_POST['PhoneNo']; 
    $PinCode = $_POST['Pincode']; 
    $VehicleType = $_POST['VehicleType']; 
    $Brand = $_POST['Brand']; 
    $BrandModel = $_POST['Model']; 
    $FuleType = $_POST['FuleType'];  

    // Database Connection
    $conn = new mysqli('localhost',' u122882057_formdata','Scrapgo@22','testing');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into testing(Name,Email,PhoneNo,PinCode,VehicleType,Brand,BrandModel,FuleType)
        values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssissssss",$Name, $Email, $PhoneNo, $PinCode, $VehicleType, $Brand, $BrandModel, $FuleType);
        $stmt->execute();
        echo "Registration Successfull...";
        $stmt->close();
        $conn->close();
    }
?>

<!-- https://www.youtube.com/watch?v=2HVKizgcfjo -->