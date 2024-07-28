## Hi there 👋


**MatinApi/MatinApi** is a ✨ _special_ ✨ repository because its `README.md` (this file) appears on your GitHub profile.

Here are some ideas to get you started:

- 🔭 I’m currently working on ...
- 🌱 I’m currently learning ...
- 👯 I’m looking to collaborate on ...
- 🤔 I’m looking for help with ...
- 💬 Ask me about ...
- 📫 How to reach me: ...
- 😄 Pronouns: ...
- ⚡ Fun fact: ...

##Hello Welcome to MatinApi


#you can write your api or use the defult api 

First you shold to habe the MatinApi.php From https://github.com/MatinApi/MatinApi then you can write your api inide it or import in youre php file

#DefultApi:

#you can use the defult api by Matin_API_DB_Json function in MAtin Class:
    Matin::Matin_API_DB_Json('','');
    -1_ the firest prametr is the api request abele that shold by true : Matin::Matin_API_DB_Json(true,'');
    -2_the secound prametr is aboute the cunecction to MysqlDB : Matin::Matin_API_DB_Json(true,$conn);


    #Now You can use it Use it :
       - in hear we have the oun sintax from MAtinApi that like the function usage:
         -its very easer and shorter than sql sintax form example you what to show the Matin tabel in sql you shold write SELECT * from Matin but in MatinApi you write Matin();

            -1_Show Matin Tabel From Db        Sql Code: select from * Matin;                         MatinApi Code: Matin();
           - 2_Show By Value From Matin Tabel  Sql Code:select from * Matin wher id=1;                 MatinApi Code: Matin(id=1);
           - 2_Delete                          Sql Code:DELETE FROM Matin WHERE id=1;                  MatinApi Code: Matin(id=1).delete 
           - 3_Insertin                        Sql Code:INSERT INTO Matin (Matinname) VALUES (Matin);   MatinApi Code: Matin().push{Matinname:Matin}
            -5_Update                          Sql Code:UPDATE Matin SET Matinname=MatinApi WHERE $whereClause; MatinApi Code :Matin(id=1).update{Matinname:MatinApi}

    #Usage:
        Send this Matin Api Code to your server that have the MatinApi Code;


    Personalization and security:
        This api has many features to personalize, close a database, its houses, or limit access, for example, you can close a tabel or culmn until the user allows the login as you said, then the user's access will be released.
        to Use this :
            thred Pram from  Matin::Matin_API_DB_Json(true,$conn,[]); is one array that set your setting at thear the first Param in array is your tabele name like ['MatinTabel'] and set your setting the setting is open,close,match in this example i set it open Matin::Matin_API_DB_Json(true,$conn,['MatinTabel'=>'open']);

            1_Open Setting : Matin::Matin_API_DB_Json(true,$conn,['MatinTabel'=>'open']); Evry One Can See it With Requset;

            2_Close Setting : Matin::Matin_API_DB_Json(true,$conn,['MatinTabel'=>'close']); Its Close and No One Can see It;



            4_Match Setting: Matin::Matin_API_DB_Json(true,$conn,['MatinTabel'=>'match']); Its Close But Users can sing in whit that you say in to it and Open or Close And Change the Setting Form Example the Table_Tow is Close You can change it After UserLogin To Open that Tabele:
                Change Settin By Match Got to five param of Matin::Matin_API_DB_Json(true,$conn,['MatinTabel'=>'open'],'',['MatinTabel'=>]); and set the first array param to the tabele have the match setting Like this ['MatinTabel'=>] and then  write the open it mean after match wes complet opne this tabelse like this ['MatinTabel'=>['open'=>]] and then for value of open its array of name the tabel the setting change to the open like this ['MatinTabel'=>['open'=>['Users','Photos']]] its mean after the MatinTabel matching whase complete set the setting open for the Users and photo tabele .
                the sender shold send this to server MatinTabel(id=2).match{UserPassword=123} and then the server chek it if its true set sum cooke and the resulte be your setting
        Close the Culms :
            Go to the foure param from Matin::Matin_API_DB_Json(true,$conn,['MatinTabel'=>'match'],[]); the first param from this array is the tabele name like this['MatinTabel'] and the value is one array and the first param is the line like this ['MatinTabel'=>['line']] and the value of that is One Array is the name of the culomn and the settin for thakr like this  ['MatinTabel'=>['line'=>['id'=>'open','UserPassword'=>'close']]] the setting for culmn is open it mean if user what see db can see it and the closde it mean you can see that;


#the Custome Api :
    #Build Youre Api Very Faster And Easyer And Safety useing Matin::MAtin_API_Custome() function like :
        -Create Api By Matin::MAtin_API_Custome() set first parametr to your Get Methode Name for example MatinApi  Matin::MAtin_API_Custome('MatinApi') and in secound parameter is function that you what to do your code in side it and the function should have the one varabel to pass the value reived from the user to your function like this Matin::MAtin_API_Custome('MatinApi' , function ($value){ echo $value} ); and if you send MatinApi:'hello' the youre Api Get Methode Name that in example it names MatinApi you get hello;
   # Write Get Mothde  inside the Youre Api form get more valueus useing Api() function:
      -  fist param is the Get methode name an secound is the function should have the value to get value of user inserted like this Api('UsaerName',function ($value){echo $value});

   # Example Code App:
       ``php <?php Matin::MAtin_API_Custome('Model', function ($Get){
    $UserPhoneNumber;
    if ( $Get == 'Create' ){
        $UserNationalCode;
        $UserName;
        $UserPaswword;
        $UserRole;
        $VerifyCode;
        
        $time=time();
        $EndTime = $time + (2 * 60);  
        $UserCreated=false;
        $UserPaswword;



        Api( 'UserNationalCode' , function ($Value1) use (&$UserNationalCode) {
            if ( $Value1=='' ){
                Json_Print(['Error'=>'UserNationalCode is Null']);
            }else{
                $Contion = new PDO("mysql:host=localhost;dbname=matab01", 'callofdead', '1387');
                $conn=$Contion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $Contion->prepare("SELECT * FROM `RoleUsers` WHERE `UserNationalCode` = :value");  
                $stmt->bindParam(':value', $Value1 ,  PDO::PARAM_STR );  
                $stmt->execute();  
    
                $count = $stmt->rowCount();  
    
                if($count !== 0){  
                    Json_Print(['Error'=>'This UserNationalCode Has Created Erlear']);  
                }else{
                    $UserNationalCode=$Value1;
    
                }
            }
            

        } );

        Api( 'UserPhoneNumber' , function ($Value2) use (&$UserPhoneNumber) {
            
            if ($Value2==''){
                Json_Print(["Error"=>"UserPhoneNumber Is Null"]);
            }else{
                $Contion = new PDO("mysql:host=localhost;dbname=matab01", 'callofdead', '1387');
                $conn=$Contion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $Contion->prepare("SELECT * FROM `RoleUsers` WHERE `UserPhoneNumber` = :value");  
                $stmt->bindParam(':value', $Value1 ,  PDO::PARAM_STR );  
                $stmt->execute();  
    
                $count = $stmt->rowCount();  
    
                if($count !== 0){  
                    Json_Print(['Error'=>'This PhoneNumber Has Created Erlear']);  
                }else{
                    $UserPhoneNumber=$Value2;
    
                }
            }
            
        } );
        APi( 'SetUserName' , function($value) use (&$UserName){
            if($value===null){
                Json_Print(['error'=>'UserName is Null']);
            }else{
                $UserName=$value;
            }
        } );
        APi( 'SetUserPassword' , function($value) use (&$UserPaswword){
            if($value==''){
                Json_Print(['error'=>'UserPaswword is Null']);
            }else{
                $UserPaswword=password_hash($value,PASSWORD_DEFAULT);
                
            }
        } );
        APi( 'SetUserRole' , function($value) use (&$UserRole){
            if($value==''){
                Json_Print(['error'=>'UserRole is null']);
            }else{
                $UserRole=$value;
            }
        } );



        if($UserNationalCode !== NULL and $UserPhoneNumber !== NULL and $UserName !==NULL and $UserRole !== null ){
            function Insert($One,$Tow){
                $stmt->bindParam($One,$Tow);
            }
            function generateUniqueRandomNumber($min = 10000, $max = 90000) {  
                $randomNumber = rand($min, $max);  
            
                // Ensure no repeating digits  
                $digits = str_split($randomNumber);  
                if (count(array_unique($digits)) !== count($digits)) {  
                    return generateUniqueRandomNumber($min, $max); // Try again if duplicates  
                }  
            
                return $randomNumber;  
            }  
            

            $Contion = new PDO("mysql:host=localhost;dbname=matab01", 'callofdead', '1387');
            $conn=$Contion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $Sql = "INSERT INTO `RoleUsers` (`id`, `UserName`, `UserPassword`, `UserPhoneNumber`, `UserNationalCode`, `UserId`, `UserRole`, `UserVerifyCode`) VALUES (NULL, :UserName, :UserPaswword, :phone , :NationalCode , :time , :Role, :VerifyCode);";  
            $stmt = $Contion->prepare($Sql);  

            $uniqueNumber = generateUniqueRandomNumber(); 

            

            $VerifyCode = password_hash($uniqueNumber, PASSWORD_DEFAULT); 

            $stmt->bindParam(':UserName',$UserName);    
            $stmt->bindParam(':UserPaswword',$UserPaswword);        
            $stmt->bindParam(':phone', $UserPhoneNumber);              
            $stmt->bindParam(':NationalCode', $UserNationalCode);
      
            $stmt->bindParam(':time', $time);  
            $stmt->bindParam(':Role',$UserRole);
            $stmt->bindParam(':VerifyCode',$VerifyCode);
  
        
            try {  
                if ($stmt->execute()) {  
                    
                    $UserCreated = true;
                    Json_Print(['Creating'=>'Sucsses','VerifyCodeIs'=>"$uniqueNumber"]);
                    
                } else {  
                    echo "Error creating record: " . $stmt->errorInfo()[2];  
                }  
            } catch (PDOException $e) {  
                echo "Error: " . $e->getMessage();  
            }   

 

            ///create 

            // $Sql="INSERT INTO `Active` (`id`, `UserId`, `VerifyCode`, `Active`) VALUES (NULL, :time, :Verify , 'false',:EndTime);";
            // $stmt = $Contion->prepare($Sql);  
        
            // $stmt->bindParam(':time', $time);
            // $stmt->bindParam(':Verify', $VerifyCode);
            // $stmt->bindParam(':EndTime', $EndTime);
            
            // try {  
            //     if ($stmt->execute()) {  
                    
            //         if ($UserCreated == true){
            //             Json_Print(["Success" => "Account created successfully","UserId"=>"$time","VerifyCode"=>"$uniqueNumber","VerifyTimeOute"=>"2"]); 
            //         }
                    
            //     } else {  
            //         echo "Error creating record: " . $stmt->errorInfo()[2];  
            //     }  
            // } catch (PDOException $e) {  
            //     echo "Error: " . $e->getMessage();  
            // } 
              
        }else{
            Json_Print(['Error'=>'Fill oute All of Datas']);
        }

}
elseif( $Get == 'Verify' ){
    $UserVerifyCode;
    $VerifyCode='';
    Api( 'UserPhoneNumber' , function($value) use(&$UserPhoneNumber){
        if($value==null){
            Json_Print(['Error'=>'No dta seted for UserPhoneNumber']);
        }else{
            $UserPhoneNumber=$value;
        }
    } );
    Api('VerifyCode' , function ($value) use (&$UserVerifyCode) {
        if($value==null){
            Json_Print(['Error'=>'No dta seted for UserVerifyCode']);
        }else{
            $UserVerifyCode=$value;
        }
    } );
    if ( $UserPhoneNumber !==null and $UserVerifyCode !==null ){
        Mysql(function ($connection) use (&$UserPhoneNumber) {
            Qry("SELECT * FROM RoleUsers WHERE UserPhoneNumber=$UserPhoneNumber", $connection, function ($stmt, $connection) {
                Fetch($stmt, function ($result) use (&$VerifyCode) {
                    $VerifyCode=$result[0]['UserVerifyCode'];
                    Json_Print(["$UserPhoneNumber","$UserVerifyCode","$VerifyCode"]);
                });
            });
        });
        if( password_verify($UserVerifyCode,$VerifyCode) ){
            Json_Print("verifyed");
        }else{
            Json_Print(['No Match']);
        }
    }else{
        Json_Print(['Error'=>'Data No seted']);
    }
}

});

        
    

