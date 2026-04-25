<?php 
class IterationPeakGapAnalyze extends userCollatz  {

public function IterationPeakGapAnalyzer($intervalCollatz) {
    $iterationPeakGap = [];
   $iterationMaxCount = null;
   $previousRecordPeak = null;

foreach ($intervalCollatz as $index => $values) {
   $currentKeyValuesIterationCount = (count($values)-1);

   if ($iterationMaxCount === null || $currentKeyValuesIterationCount > $iterationMaxCount) {
            if ($previousRecordPeak !== null) {
                $iterationPeakGap[] = [
    'Previous record:' => $previousRecordPeak,
    'Current Record:' => $index,
    'Gap between them:' => $index - $previousRecordPeak,
    'newIterationRecord' => $currentKeyValuesIterationCount
];
            }
   $iterationMaxCount = $currentKeyValuesIterationCount;
            $previousRecordPeak = $index;
        }
   } 
   return $iterationPeakGap;
   
} 

}