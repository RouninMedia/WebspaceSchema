<?php
  
function convertJSONtoWebspaceSchema ($webspaceJSON) {
  
  $webspaceJSON = str_replace('\"', '＂', $webspaceJSON);
  $webspaceJSON = str_replace("'", "＇", $webspaceJSON);
  $webspaceJSON = str_replace("`", "｀", $webspaceJSON);
  $webspaceJSON = str_replace("<", "‹", $webspaceJSON);
  $webspaceJSON = str_replace(">", "›", $webspaceJSON);

  $webspaceArray = explode('"', $webspaceJSON);
  
  for ($i = 1; $i < count($webspaceArray); $i = $i + 2) {

    $webspaceArray[$i] = '«'.$webspaceArray[$i].'»';
  }

  $webspaceJSON = implode('', $webspaceArray);

  $webspaceSchema = $webspaceJSON;

  return $webspaceSchema;
}

?>
