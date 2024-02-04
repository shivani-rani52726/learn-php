<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php
      

      $Shivani=
        [
        
         
          
          'Shivani' => 
         [
          [
            'Name'=>'Shivani',
            'Age'=>19,
            'class'=>'bca'                                 
          ],
        ],
         
            'company'=>
            [
            [
              'Name' =>'abc',
              'Addresss' =>'Mumbai'
            ]
            ]
          
           
      ];  

      if($Shivani['company'][0]['Name'] =='abc'){
        echo 'yes';
      }
      else{
        echo 'no';
      }


      $Rajbir=
      ['Rajbir' => [
         'Name'=>'Rajbir',
         'Age'=>28,
          'class'=>'bca'
      ]
      ];
    
      echo "<pre>";
      print_r($Shivani);  
  
      //  print_r($Rajbir);
      echo "</pre>";
      // if($Shivani['Shivani']['Name'] =='Shivani'){
      //   echo 'yes';
      // }
      
    
      
      
    //   function Shivani(){
    //     $Shivani=
    //       ['Shivani' => [
    //          'Name'=>'Shivani',
    //          'Age'=>19,
    //           'class'=>'bca'
    //       ]
       
    //       ]; 
    //       echo '<pre>';
    //       print_r($Shivani);
    //       echo '</pre>';
         
    //   }
    //  Shivani();
     


    ?>
</body>
</html>