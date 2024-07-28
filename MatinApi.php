<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");





use function PHPSTORM_META\type;







class Matin {
    
    public static  function HomePage () {
        echo '<!DOCTYPE html>
        <html>
          <head>
        
          </head>
          <body>
            <div class="macbook-pro">
              <div class="div">
                <div class="group"><div class="text-wrapper">Matin Api:B</div><img style="position: absolute;margin-left:333px;" src="./New folder/2f7d4c04-6e9e-4832-aa05-5e57cac4e427_1698319149617693206.svg" alt=""></div>
                <div class="group-2">
                
                <img src="./New folder/9da8fa90-d2ec-4173-9c30-39aebc981b98_1698319149618091186.svg" alt="">
                <div class="text-wrapper-2">Safe<img style="position: absolute;margin-left:60px;" src="./New folder/1a62fe0e-321d-4301-b49e-769ae3b58a6e_1698319149617933351.svg" /> </div>
                  
                  <p class="p">
                    After receiving the message from the sender, it parses the message and checks it. If there is a problem, the
                    command will not be executed.
                  </p>
                </div>
                <img style="margin-top:1968px;" src="./New folder/3264496f-a5e6-46a1-bde0-f380ef6df03e_1698319149618237147.svg" alt="">
                <div class="div-wrapper"><div class="text-wrapper-3">customize</div><img style="position: absolute;margin-left:390px;" src="./New folder/1378b226-756e-4497-9b69-bc47473f0000_1698319149618399237.svg" /></div>
                <p class="the-program-is">
                  <span class="span">The program is OpenCorse, which means you can change it as you wish. <br /></span>
                  <span class="text-wrapper-4"
                    >But the right to change the name of the class, order, and function or the word that matin has, and after
                    personalization, there is no copyright, and otherwise, legal action will be taken.</span
                  >
                </p>
              </div>
            </div>
          </body>
        </html>
        <style>
            .macbook-pro {
                background-color: #ffffff;
                display: flex;
                flex-direction: row;
                justify-content: center;
                width: 100%;
              }
              
              .macbook-pro .div {
                background-color: #ffffff;
                width: 1512px;
                height: 5512px;
                position: relative;
              }
              
              .macbook-pro .group {
                position: absolute;
                width: 673px;
                height: 291px;
                top: 105px;
                left: 109px;
              }
              
              .macbook-pro .text-wrapper {
                position: absolute;
                width: 671px;
                height: 291px;
                top: 0;
                left: 0;
                background: linear-gradient(
                  180deg,
                  rgb(74.93, 95.52, 114.54) 0%,
                  rgba(166.6, 30.54, 129.51, 0.31) 72.67%,
                  rgba(98.6, 17.67, 61.37, 0) 100%
                );
                -webkit-background-clip: text !important;
                background-clip: text;
                -webkit-text-fill-color: transparent;
                text-fill-color: transparent;
                font-family: "Inter-Regular", Helvetica;
                font-weight: 400;
                color: transparent;
                font-size: 133px;
                text-align: center;
                letter-spacing: 0;
                line-height: 204.2px;
              }
              
              .macbook-pro .group-2 {
                position: absolute;
                width: 745px;
                height: 638px;
                top: 1163px;
                left: 56px;
              }
              
              .macbook-pro .text-wrapper-2 {
                position: absolute;
                width: 735px;
                height: 175px;
                top: 0;
                left: 0;
                background: linear-gradient(180deg, rgb(247.35, 19.58, 19.58) 0%, rgba(1.04, 40.62, 248.41, 0) 100%);
                -webkit-background-clip: text !important;
                background-clip: text;
                -webkit-text-fill-color: transparent;
                text-fill-color: transparent;
                font-family: "Inter-Regular", Helvetica;
                font-weight: 400;
                color: transparent;
                font-size: 133px;
                text-align: center;
                letter-spacing: 0;
                line-height: 204.2px;
                white-space: nowrap;
              }
              
              .macbook-pro .p {
                position: absolute;
                width: 733px;
                top: 238px;
                left: 8px;
                font-family: "Inter-Regular", Helvetica;
                font-weight: 400;
                color: #000000;
                font-size: 41px;
                letter-spacing: 0;
                line-height: 62.9px;
              }
              
              .macbook-pro .img {
                position: absolute;
                width: 1444px;
                height: 206px;
                top: 1891px;
                left: 34px;
              }
              
              .macbook-pro .div-wrapper {
                position: absolute;
                width: 678px;
                height: 203px;
                top: 2693px;
                left: 80px;
              }
              
              .macbook-pro .text-wrapper-3 {
                position: absolute;
                width: 676px;
                height: 203px;
                top: 0;
                left: 0;
                background: linear-gradient(180deg, rgb(78.81, 174.04, 76.87) 5.53%, rgba(35.8, 226.1, 226.1, 0) 100%);
                -webkit-background-clip: text !important;
                background-clip: text;
                -webkit-text-fill-color: transparent;
                text-fill-color: transparent;
                font-family: "Inter-Regular", Helvetica;
                font-weight: 400;
                color: transparent;
                font-size: 133px;
                text-align: center;
                letter-spacing: 0;
                line-height: 204.2px;
                white-space: nowrap;
              }
              
              .macbook-pro .the-program-is {
                position: absolute;
                width: 612px;
                height: 408px;
                top: 2924px;
                left: 62px;
                font-family: "Inter-Regular", Helvetica;
                font-weight: 400;
                color: transparent;
                font-size: 30px;
                text-align: center;
                letter-spacing: 0;
                line-height: 46.1px;
              }
              
              .macbook-pro .span {
                color: #000000;
              }
              
              .macbook-pro .text-wrapper-4 {
                color: #ce1515;
                font-size: 39px;
                line-height: 59.9px;
              }
              
        </style>';
    }
    public static function MAtin_API_Custome($NameValue=NULL  , $Work=NULL ){

        $Json= file_get_contents('php://input');
        $Obj = json_decode($Json ,true );
        if ( $NameValue==NULL ){
            echo ' Error : the $NameValue is Null ';
            $MatinQury=0;
        }else{
            if(isset($Obj["$NameValue"])){
               $MatinQury = $Obj["$NameValue"]; 
            }else{
                print_r(['Error'=>"No DataResived"]);
                $MatinQury=0;
            }
            
        }
        if ( $MatinQury !== NULL and isset($MatinQury) ){
            if ( $NameValue !== NULL ){
                if( $Work !== Null ){
                    if ( is_callable($Work) ){

                        function Api($NameValue2,$Work2){
                            $Json= file_get_contents('php://input');
                            $Obj = json_decode($Json ,true );
                            
                            if($Work2!==NULL){
                                $Work2($Obj["$NameValue2"]);
                            }
                        }

                        function Json_Print($Array=[]){
                            header('Content-Type: application/json');

                            echo json_encode($Array);
                        }
                        // function Mysql_Cuntion($Work=Null){
                        //     if( $PDO_Cuntion !== NULL ){
                        //         $conn=$PDO_Cuntion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        //         if($Wolf==NULL){
                        //             Json_Print(['Error'=>'Can Not Found Eny Work']);
                        //         }else{
                        //             $Wolf($conn);
                        //         }
                        //     }else{
                        //         Json_Print(['Error'=>'Cuntion to Databace Faild','ErrorHelper'=>'The Cuntion Varabel is null']);
                        //     }
                        // }
                        

                         


                        $Work($MatinQury);
                    }else{
                        echo ' Error : the $Work Shold be Function ';
                    }
                }
                else{
                    echo 'Erro : The $Work shold not be a Null';
                }
            }else{
                echo ' Error : the $NameValue is Null ';
            }
        }
        /// contion
    }
    public static  function Matin_DB($MatinQury,$DB_Conection){
        
         // رشته ورودی
        $connection=$DB_Conection;
        $pattern = '/^([a-zA-Z_]+)\((.*?)\)(\.delete|\.push|\.update)?(\{(.*)\})?$/';
        if (preg_match($pattern, $MatinQury, $matches)) {
            $tableName = $matches[1] ?? ''; // نام جدول
            $conditions = $matches[2] ?? ''; // شرایط
            $operation = $matches[3] ?? ''; // عملیات delete، push یا update
            $values = $matches[5] ?? ''; // مقادیر جدید

            // تجزیه و تحلیل شرایط به منظور ساخت دستور WHERE
            $conditionPairs = explode(',', $conditions);
            $whereClause = '';
            foreach ($conditionPairs as $pair) {
                list($column, $value) = explode('=', $pair);
                $column = trim($column);
                $value = trim($value);

                if (!empty($whereClause)) {
                    $whereClause .= ' AND ';
                }

                $whereClause .= $column . ' = ' . $value;
            }

            // ایجاد دستور SQL
            if ($operation === '.delete') {
                $sql = "DELETE FROM $tableName WHERE $whereClause";

                // اجرای دستور SQL DELETE
                // به عنوان مثال:
                mysqli_query($connection, $sql);
                // رکورد با موفقیت حذف شد.
            } elseif ($operation === '.push' && !empty($values)) {
                // تجزیه و تحلیل مقادیر جدید
                $valuePairs = explode(',', $values);
                $columns = '';
                $data = '';
                foreach ($valuePairs as $pair) {
                    list($column, $value) = explode(':', $pair);
                    $column = trim($column);
                    $value = trim($value);

                    if (!empty($columns)) {
                        $columns .= ', ';
                        $data .= ', ';
                    }

                    $columns .= $column;
                    if(gettype($value)=='string'){
                        $data .= "'$value'";
                    }else{
                        $data .= "$value";
                        
                    }
                    
                }

                // ایجاد دستور SQL
                $sql = "INSERT INTO $tableName ($columns) VALUES ($data)";
                
                // اجرای دستور SQL INSERT
                // به عنوان مثال:
                mysqli_query($connection, $sql);
                // رکورد با موفقیت اضافه شد.
            } elseif ($operation === '.update' && !empty($values)) {
                // تجزیه و تحلیل مقادیر جدید
                $valuePairs = explode(',', $values);
                $updateData = '';
                foreach ($valuePairs as $pair) {
                    list($column, $value) = explode(':', $pair);
                    $column = trim($column);
                    $value = trim($value);

                    if (!empty($updateData)) {
                        $updateData .= ', ';
                    }

                    $updateData .= $column . ' = ' . $value;
                }

                // ایجاد دستور SQL
                $sql = "UPDATE $tableName SET $updateData WHERE $whereClause";

                // اجرای دستور SQL UPDATE
                // به عنوان مثال:
                
                mysqli_query($connection, $sql);
                // رکورد با موفقیت به روز شد.
            } else {
                // ایجاد دستور SQL
                $sql = "SELECT * FROM $tableName WHERE $whereClause";
                

                // اجرای دستور SQL SELECT
                // به عنوان مثال:
                $result = mysqli_query($connection, $sql);
                print_r($result);
                // ادامه کار با نتیجه
            }
        }
            }



    public static  function Matin_API_DB($MatinQury,$DB_Conection){

                if($MatinQury=="Defult_Api"){
                    $MatinQury='';
                    $Json= file_get_contents('php://input');
                    $Obj = json_decode($Json ,true );
                    $MatinQury = $Obj['MatinQw'];
                    
                }else{

                }
                

                $connection=$DB_Conection;
        $pattern = '/^([a-zA-Z_]+)\((.*?)\)(\.delete|\.push|\.update)?(\{(.*)\})?$/';
        if (preg_match($pattern, $MatinQury, $matches)) {
            $tableName = $matches[1] ?? ''; // نام جدول
            $conditions = $matches[2] ?? ''; // شرایط
            $operation = $matches[3] ?? ''; // عملیات delete، push یا update
            $values = $matches[5] ?? ''; // مقادیر جدید

            // تجزیه و تحلیل شرایط به منظور ساخت دستور WHERE
            $conditionPairs = explode(',', $conditions);
            $whereClause = '';
            foreach ($conditionPairs as $pair) {
                list($column, $value) = explode('=', $pair);
                $column = trim($column);
                $value = trim($value);

                if (!empty($whereClause)) {
                    $whereClause .= ' AND ';
                }

                $whereClause .= $column . ' = ' . $value;
            }

            // ایجاد دستور SQL
            if ($operation === '.delete') {
                $sql = "DELETE FROM $tableName WHERE $whereClause";

                // اجرای دستور SQL DELETE
                // به عنوان مثال:
                
                // رکورد با موفقیت حذف شد.
            } elseif ($operation === '.push' && !empty($values)) {
                // تجزیه و تحلیل مقادیر جدید
                $valuePairs = explode(',', $values);
                $columns = '';
                $data = '';
                foreach ($valuePairs as $pair) {
                    list($column, $value) = explode(':', $pair);
                    $column = trim($column);
                    $value = trim($value);

                    if (!empty($columns)) {
                        $columns .= ', ';
                        $data .= ', ';
                    }

                    $columns .= $column;
                    if(gettype($value)=='string'){
                        $data .= "'$value'";
                    }else{
                        $data .= "$value";
                        
                    }
                    
                }

                // ایجاد دستور SQL
                $sql = "INSERT INTO $tableName ($columns) VALUES ($data)";
                mysqli_query($DB_Conection,$sql);
                // اجرای دستور SQL INSERT
                // به عنوان مثال:
                
                // رکورد با موفقیت اضافه شد.
            } elseif ($operation === '.update' && !empty($values)) {
                // تجزیه و تحلیل مقادیر جدید
                $valuePairs = explode(',', $values);
                $updateData = '';
                foreach ($valuePairs as $pair) {
                    list($column, $value) = explode(':', $pair);
                    $column = trim($column);
                    $value = trim($value);

                    if (!empty($updateData)) {
                        $updateData .= ', ';
                    }

                    $updateData .= $column . ' = ' . $value;
                }

                // ایجاد دستور SQL
                $sql = "UPDATE $tableName SET $updateData WHERE $whereClause";
                mysqli_query($DB_Conection,$sql);
                // اجرای دستور SQL UPDATE
                // به عنوان مثال:
                
                
                // رکورد با موفقیت به روز شد.
            } else {
                // ایجاد دستور SQL
                $sql = "SELECT * FROM $tableName WHERE $whereClause";
                

                // اجرای دستور SQL SELECT
                // به عنوان مثال:
                
                // ادامه کار با نتیجه
            }
        }






             }

             

    
             public static  function Matin_API_DB_Json($MatinQury,$DB_Conection,$Setting = [],$CustomeOperation=[],$CustomeMatch = []){
        
              $Data=[];
                if($MatinQury=="Defult_Api" or $MatinQury=="Defult"  or $MatinQury == true ){
                    $MatinQury='';
                    $Json= file_get_contents('php://input');
                    $Obj = json_decode($Json ,true );
                    $MatinQury = $Obj['MatinQw'];
                    
                }
                $MatinQury='Users()';
                //elseif($MatinQury==""){
                //     Matin::HomePage();
                // }

                $connection=$DB_Conection;
        $pattern = '/^([a-zA-Z_]+)\((.*?)\)(\.delete|\.push|\.update|\.match)?(\{(.*)\})?$/';
        if (preg_match($pattern, $MatinQury, $matches)) {
            $tableName = $matches[1] ?? ''; // نام جدول
            $conditions = $matches[2] ?? ''; // شرایط
            $operation = $matches[3] ?? ''; // عملیات delete، push یا update
            $values = $matches[5] ?? ''; // مقادیر جدید
            
            if ( isset($Setting[$tableName]) and $Setting[$tableName]=='close' and !isset($_COOKIE[$tableName]) ){
                header("Content-Type: application/json");
                $Error=['Error'=>'This Data Is closed'];
                echo json_encode($Error)."\n";
                echo json_encode(" \n Error the Data Closed  \n ")."\n";
            }
            else{


            // تجزیه و تحلیل شرایط به منظور ساخت دستور WHERE
            $conditionPairs = explode(',', $conditions);
            $whereClause = '';
            foreach ($conditionPairs as $pair) {

                list($column, $value) = explode('=', $pair);
                $column = trim($column);
                $value = trim($value);

                if (!empty($whereClause)) {
                    $whereClause .= ' AND ';
                }

                $whereClause .= $column . ' = ' . $value;
                $whereClauseName = $column;
            }

            if( isset($Setting [$tableName]) and $Setting [$tableName]== 'primery'  and !isset($_COOKIE[$tableName]) ){
                if ($operation === '.match' && !empty($values)) {
                    


                    

                    // تجزیه و تحلیل مقادیر جدید
                    $valuePairs = explode(',', $values);
                    $updateData = '';
                    foreach ($valuePairs as $pair) {
                        list($column, $value) = explode(':', $pair);
                        $column = trim($column);
                        $value = trim($value);
    
                        if (!empty($updateData)) {
                            $updateData .= ', ';
                        }
    
                        $updateData .= $column . ' = ' . $value;
                    }

                    // if( isset($CustomeOperation[$tableName]['OpenLine']) ){
                        
                    //     $NameCoditation = $CustomeOperation[$tableName]['OpenLine'];
                    //     if ( $column==$NameCoditation ){
                    //         echo 'Ture';
                    //         $Good=true;
                    //     }else{
                    //         echo "</br>Error in the param</br>";
                    //         $Good=false;
                    //     }

                    // }

                    if (isset($CustomeOperation[$tableName]['line']) and !$column==''  ) {
                        $NameCoditation = $CustomeOperation[$tableName]['line'];
                        if (isset($NameCoditation[$column])) {

                            if ($NameCoditation[$column] == 'open') {
                                echo 'True';
                                $Good = true;
                            }elseif ( $NameCoditation[$column] == 'close') {
                                echo " ----- the $column is close --------  ";
                                $Good = false;
                            }

                        } else {
                            echo "</br>Error in the param</br>";
                            $Good = false;
                        }
                    }  
                   
                    else{
                        $Good=true;
                    }

                    
                    if (isset($CustomeOperation[$tableName]['line']) and !$whereClauseName=='' ) {
                        $NameCoditation = $CustomeOperation[$tableName]['line'];
                        
                        if (isset($NameCoditation[$whereClauseName])) {

                            if ($NameCoditation[$whereClauseName] == 'open') {
                                echo 'True';
                                $Good2 = true;
                            }elseif ( $NameCoditation[$whereClauseName] == 'close') {
                                echo " ---- the $whereClauseName is close  ---------- ";
                                $Good2 = false;
                            }

                        } else {
                            echo "hello";
                            echo "</br>Error in the param</br>";
                            $Good2 = false;
                        }
                    }  
                                        
                    else{
                        $Good2=true;
                    }

                    // if( isset($CustomeOperation[$tableName]['operation']) ){
                    //     $NameOperation = $CustomeOperation[$tableName]['operation'];
                    //     if ($value==$NameOperation){
                    //         $Good2=true;
                    //     }else{
                    //         echo "</br>Error in the param</br>";
                    //         $Good=false;
                    //     }
                    // }
                    // else{
                    //     $Good2=true;
                    // }


    if( $Good==true and $Good2==true ){
                        // ایجاد دستور SQL
                if($Setting [$tableName]== 'primery' or 'match' and !isset($_COOKIE[$tableName]) or $_COOKIE[$tableName]== ''){
                    header("Content-Type: application/json");
                    // echo json_encode("$tableName:match");
                    if ($operation === '.match' && !empty($values)) {
                        // تجزیه و تحلیل مقادیر جدید
                        $valuePairs = explode(',', $values);
                        $updateData = '';
                        foreach ($valuePairs as $pair) {
                            list($column, $value) = explode(':', $pair);
                            $column = trim($column);
                            $value = trim($value);
        
                            if (!empty($updateData)) {
                                $updateData .= ', ';
                            }
        
                            $updateData .= $column . ' = ' . $value;
                        }
        
                        // ایجاد دستور SQL
                        $sql = "SELECT * FROM $tableName WHERE $whereClause";
                        $DoSql=mysqli_query($DB_Conection,$sql);
                        $DoSqlData=mysqli_fetch_assoc($DoSql);
                        if($DoSqlData[$column]== $value){

                            if (isset($CustomeMatch[$tableName]) ){
                                
                            
                                
                                $NameData = $CustomeMatch [$tableName];

                                if ( isset($NameData["open"]) ) {
                                
                                    $NameDb=$NameData['open'];


                                    $i=0;

                                    while($i<count($NameDb)){

                                        setcookie($NameDb[$i], 'open' , time() + 86400 * 10);

                                        // header('');

                                        // echo ".\n the Cooke set for:  ".$NameDb[$i].".\n";


                                        $i++;

                                    }

                                
                                }
                            }
                            else{
                                
                                setcookie($tableName, 'open' , time() + 86400 * 10);
                                echo $_COOKIE[$tableName];
                            }
                            
                            
                            header("Content-Type: application/json");
                            echo json_encode(" Match:Sucsees ,Remember:$_COOKIE[$tableName],$tableName: $_COOKIE[$tableName]");
                            
                        }else{
                            header("Content-Type: application/json");
                            echo json_encode(' Erro: The Data Or match value or Parametr is not Match ');
                        }                    // اجرای دستور SQL UPDATE
                        // به عنوان مثال:
                        
                        
                        // رکورد با موفقیت به روز شد.
                    }
                }
                        // اجرای دستور SQL UPDATE
                        // به عنوان مثال:
                        
                        
                }else{
                    echo 'Error';
                }     // رکورد با موفقیت به روز شد.
                    }
                }
                
                else{
                    echo 'hear';

                // ایجاد دستور SQL
                
                if (isset($CustomeOperation[$tableName]['line']) and $whereClauseName!=='' ) {
                    $NameCoditation = $CustomeOperation[$tableName]['line'];
                    
                    if (isset($NameCoditation[$whereClauseName])) {

                        if ($NameCoditation[$whereClauseName] == 'open') {
                            echo 'True';
                            $GoodLine = true;
                        }elseif ( $NameCoditation[$whereClauseName] == 'close') {
                            echo " ---- the $whereClauseName is close  ---------- ";
                            $GoodLine = false;
                        }

                    } else {
                        echo "</br>Error in the param</br>";
                        $GoodLine = false;
                    }
                }  
                                    
                else{
                    $GoodLine=true;
                }
                if( $GoodLine==true ) {
                

                if ($operation === '.delete') {
                    if (isset($CustomeOperation[$tableName]['line'])) {
                        $NameCoditation = $CustomeOperation[$tableName]['line'];
                        
                        if (isset($NameCoditation[$whereClauseName])) {

                            if ($NameCoditation[$whereClauseName] == 'open') {
                                echo 'True';
                                $GoodDelete = true;
                            }elseif ( $NameCoditation[$whereClauseName] == 'close') {
                                echo " ---- the $whereClauseName is close  ---------- ";
                                $GoodDelete = false;
                            }

                        } else {
                            echo "</br>Error in the param</br>";
                            $GoodDelete = false;
                        }
                    }  
                                        
                    else{
                        $GoodDelete=true;
                    }
                    if( $GoodDelete==true ) {
                        $sql = "DELETE FROM $tableName WHERE $whereClause";

                        // اجرای دستور SQL DELETE
                        // به عنوان مثال:
                        mysqli_query($DB_Conection,$sql);
                    }
                    // رکورد با موفقیت حذف شد.
                }
                if ($operation === ".match") {
                
                    header("Content-Type: application/json");
                    echo json_encode('*********************Warning : your Match wase Curecte ************************ ');

                }
                elseif(!empty($tableName)&&empty($conditions)&&empty($operation)&&empty($values)){

                    $sql = "SELECT * FROM $tableName";
                    $DoSql = mysqli_query($DB_Conection, $sql);
                    
                    while ($Row = mysqli_fetch_assoc($DoSql)) {
                        foreach ($Row as $key => $value) {
                            if(  isset($CustomeOperation[$tableName]['line'][$key])  and  $CustomeOperation[$tableName]['line'][$key]=='close'  ){
                                $Row[$key] = '***NoDataFound***'; 
                            }
                        }
                        $Data[] = $Row;
                    }
    header("Content-Type: application/json");
    echo json_encode($Data);
                }




                elseif ($operation === '.push' && !empty($values)) {
                    // تجزیه و تحلیل مقادیر جدید
                    $valuePairs = explode(',', $values);
                    $columns = '';
                    $data = '';
                    foreach ($valuePairs as $pair) {
                        list($column, $value) = explode(':', $pair);
                        $column = trim($column);
                        $value = trim($value);

                        if (!empty($columns)) {
                            $columns .= ', ';
                            $data .= ', ';
                        }
                        if (isset($CustomeOperation[$tableName]['line'][$column]) and $CustomeOperation[$tableName]['line'][$column]=='open'or 'push' and $CustomeOperation[$tableName]['line'][$column]!=='close' ) {

                            $Confige=true;
                        $columns .= $column;
                        if(gettype($value)=='string'){
                            $data .= "'$value'";
                        }else{
                            $data .= "$value";
                            
                        }
                    }else{
                        $Confige=false;
                        header("Content-Type: application/json");
                        echo json_encode('--------------------------Error to push Data-------------------------------');
                    }
                    }

    if($Confige==true){
                    // ایجاد دستور SQL
                    $sql = "INSERT INTO $tableName ($columns) VALUES ($data)";
                    mysqli_query($DB_Conection,$sql);
    }
                    // اجرای دستور SQL INSERT
                    // به عنوان مثال:
                    
                    // رکورد با موفقیت اضافه شد.
                } elseif ($operation === '.update' && !empty($values)) {
                    // تجزیه و تحلیل مقادیر جدید
                    $valuePairs = explode(',', $values);
                    $updateData = '';
                    foreach ($valuePairs as $pair) {
                        list($column, $value) = explode(':', $pair);
                        $column = trim($column);
                        $value = trim($value);

                        if (!empty($updateData)) {
                            $updateData .= ', ';
                        }

                        $updateData .= $column . ' = ' ."'" .$value."'";
                        
                        if (isset($CustomeOperation[$tableName]['line'][$column]) and $CustomeOperation[$tableName]['line'][$column]=='open'or 'push' and $CustomeOperation[$tableName]['line'][$column]!=='close' ) {

                            $Confige=true;
                    }else{
                        $Confige=false;
                        header("Content-Type: application/json");
                        echo json_encode('--------------------------Error to Update Data-------------------------------');
                    }

                    }

                    // ایجاد دستور SQL
                    if($Confige==true){
                    $sql = "UPDATE $tableName SET $updateData WHERE $whereClause";
                    mysqli_query($DB_Conection,$sql);
                    }
                    // اجرای دستور SQL UPDATE
                    // به عنوان مثال:
                    
                    
                    // رکورد با موفقیت به روز شد.
                } else {
                    // ایجاد دستور SQL
                    $sql = "SELECT * FROM $tableName WHERE $whereClause";
                    $DoSql=mysqli_query($DB_Conection,$sql);
    while($Row=mysqli_fetch_assoc($DoSql)){
        $Data[] = $Row;

        
    }
    header("Content-Type: application/json");
    echo json_encode($Data);
                    // اجرای دستور SQL SELECT
                    // به عنوان مثال:
                    
                    // ادامه کار با نتیجه
                }

            }
                }
            }





        }
                }


        // public static function Matin_Php($Code){
        //     $Final=eval($Code);
        //     echo $Final;
        // }

    }

// echo $sql;
// $WolfQury1="visit(id=453)";
// Wolf::Wolf_DB($WolfQury1,$conn);



// نمایش آرایه نهایی






function Mysql($Work = NULL)
{
    try {
        $connection = new PDO("mysql:host=localhost;dbname=matab01", 'callofdead', '1387');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($Work !== NULL) {
            $Work($connection); // Pass the PDO object
        }

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function Qry($Qry, $connection, $Works = NULL)
{
    if ($Qry !== '') {
        $stmt = $connection->prepare($Qry);
        $stmt->execute();

        if ($Works !== NULL) {
            $Works($stmt, $connection);
        }

    } else {
        echo 'Error';
    }
}

function Fetch($stmt, $Work = NULL)
{
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($Work !== NULL) {
        $Work($result);
    } else {
        return $result;
    }
}




?>
