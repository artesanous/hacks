/ Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
   $matches = 0;
   $countSocks  = 0;
   $arr2Search = $ar;

   
   for($searchIndex=0; $searchIndex<count($arr2Search); $searchIndex++ ){

       if($arr2Search[$searchIndex] == "x") continue;
       
       $search = $arr2Search[$searchIndex];

      for($i=0; $i < count($ar); $i++){

        if($search == $ar[$i] && $ar[$i] != "x"){           
            $ar[$i] = "x";     //clean the record
            $arr2Search[$i] = "x";
            $countSocks++;      
            }//if
            
        } //for2
        $matches += intdiv($countSocks, 2);
        $countSocks =0;
   }//for1 

   return $matches;

}//end sockMerchant
