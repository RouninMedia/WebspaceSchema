<?

function convertWebspaceSchematoJSON ($webspaceSchema) {
  
  $webspaceSchema = str_replace('＂', '\"', $webspaceSchema);
  $webspaceSchema = str_replace("＇", "'", $webspaceSchema);
  $webspaceSchema = str_replace("｀", "`", $webspaceSchema);
  $webspaceSchema = str_replace(['«', '»'], '"', $webspaceSchema);

  $webspaceJSON = $webspaceSchema;

  echo $webspaceJSON;

  return $webspaceJSON;
}

?>
