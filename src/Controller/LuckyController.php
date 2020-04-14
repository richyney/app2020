<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    
   public function getUserID(){ // skeleton of the function --- also the stub.
    
    $id = 0;
    
        // STEPS
        // 1. make the function - done
        // 2. connect to the db
        // 3. select the record
        // 4. return the record
    return $id;
}
    
    public function getANumber(){
        
        $interest = 2;
        $loan  = 50;
        
        $top = 2;
        
        
        $answer = $interest  + $loan + $top + 1;
        return $answer;
        
        // bad!! dont just write the answer!
        //return 55;
    }
}



