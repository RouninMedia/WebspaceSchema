<?php

function convertWebspaceSchematoJSON ($webspaceSchema) {
  
  $webspaceSchema = str_replace('＂', '\"', $webspaceSchema);
  $webspaceSchema = str_replace("＇", "'", $webspaceSchema);
  $webspaceSchema = str_replace("｀", "`", $webspaceSchema);
  $webspaceSchema = str_replace("‹", "<", $webspaceSchema);
  $webspaceSchema = str_replace("›", ">", $webspaceSchema);
  $webspaceSchema = str_replace(['«', '»'], '"', $webspaceSchema);

  $webspaceJSON = $webspaceSchema;

  return $webspaceJSON;
}

?>
