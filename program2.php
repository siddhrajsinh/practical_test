<?php

function findMatchingKeysAndValues($word, $wordBank)
{
    $wordBank = array_map('strtolower', $wordBank);
    $word = strtolower($word);
    $pattern = '/(' . implode("|", $wordBank) . ')/i';
    preg_match_all($pattern, $word, $matches);
    $matchingValues = [];
    if (!empty($matches)) {
        $matchingValues = array_values(array_filter(array_unique(array_map('strtolower', $matches[0])), function ($value) use ($wordBank) {
            return in_array($value,  $wordBank);
        }));
    }
    $matchingKeys = array_keys(array_intersect($wordBank, $matchingValues));
    return ["matchingKeys" => $matchingKeys, "matchingValues" => $matchingValues];
}

$word = "CyXnet InJnfoiristech";
$wordBank = ["c", "xyz", "total", "info", "te", "tech"];
$output = findMatchingKeysAndValues($word, $wordBank);

echo "<b> Program 2 </b>";
echo "<br/> <b> Result: </b><br/>";
echo "Matching Keys are: " . (count($output["matchingKeys"]) ?  implode(", ", $output["matchingKeys"]) : "None");
echo "<br/>";
echo "Matching Values are: " . (count($output["matchingValues"]) ? implode(", ", $output["matchingValues"]) : "None");

?>