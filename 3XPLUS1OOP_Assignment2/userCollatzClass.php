<?php

    class userCollatz {
    protected $startingUserNum,$startingUserIntervalNum,$endingUserIntervalNum,$cumulativeIntervalValuesStatistics;

     public function __construct($startingUserNum) {
        $this->startingUserNum= $startingUserNum;
      }

    public function collatzCalculate() {
        $startingUserNum = $this->startingUserNum;
  $listCollatz = [$startingUserNum];
    
   while ($startingUserNum != 1){
        if ($startingUserNum % 2 == 0) {
            $startingUserNum = $startingUserNum / 2;
        } else {
            $startingUserNum = 3 * $startingUserNum + 1;
        }

        $listCollatz[] = $startingUserNum;
    }
    return $listCollatz;
    }


   public function intervalCalculate($startingUserIntervalNum,$endingUserIntervalNum) {

    $intervalCollatz = [];

    $i = $startingUserIntervalNum;
    while ($i <= $endingUserIntervalNum) {
         $this->startingUserNum = $i;
    $intervalCollatz[$i] = $this->collatzCalculate();
$i++;
}
$this->cumulativeIntervalValuesStatistics = $intervalCollatz;
return $intervalCollatz;

    }

public function gloriousStatistics($intervalCollatz) {
  
    $iterationMinCount = null;
    $numberofMinIterations = null;
  

     $iterationMaxCount = null;
     $numberOfMaxIteration = null;
  
     
    $currentSelectedKeyHighestValue = 0;
    $numberOfKeyWithHighestValue  = null;
   

            
foreach ($intervalCollatz as $index => $values) {
   $currentKeyValuesIterationCount = (count($values)-1);
    
    if ($iterationMinCount ==null) {  
    $iterationMinCount =$currentKeyValuesIterationCount;
    $numberofMinIterations = $index;
   }
    if ($iterationMaxCount === null) {
            $iterationMaxCount = $currentKeyValuesIterationCount;
            $numberOfMaxIteration = $index;
        }

   if ($currentKeyValuesIterationCount > $iterationMaxCount) {
    $iterationMaxCount = $currentKeyValuesIterationCount;
    $numberOfMaxIteration = $index;
   }

   if ($currentKeyValuesIterationCount < $iterationMinCount) { 
    $iterationMinCount = $currentKeyValuesIterationCount;
    $numberofMinIterations = $index;
   }
    foreach ($values as $value) {
        if ($value > $currentSelectedKeyHighestValue) {
         $currentSelectedKeyHighestValue = $value;
$numberOfKeyWithHighestValue = $index;
        }
    }
   
}
    $keyWithMaxIterations = 
   ['Number:' => $numberOfMaxIteration,
   'The maximum count of iterations:' => $iterationMaxCount,
    ];

    $keyWithMinIterations = 
    ['Number:' => $numberofMinIterations,
    'iterationMinCount' => $iterationMinCount,
    ];

    $keyWithHighestValue = 
    [
      'Number:' => $numberOfKeyWithHighestValue,
     'The highest value is:' => $currentSelectedKeyHighestValue,
      
    ];

    $statisticsArray = 
    [ 
        'The number with Maximum Iterations:' => $keyWithMaxIterations,
        'The number with the Least Iterations:' => $keyWithMinIterations,
        'The number with the highest value:' => $keyWithHighestValue
    ];


return $statisticsArray ;
}

    }
    


//Create a method statistics that returns: the number with max iterations, the number with min iterations, the number with max reached value.
//okay.. ^ uses the interval function for data
//counter,  loop, replace? 