# WebspaceSchema
A JSON-like data format used to express entire webspaces: folders, files, filedata

_______

## Simple example of a `WebspaceSchema`:

{«AshivaWebspaceTitle»:«Ready Write Web»,«AshivaWebspace»:{«# Ready Write Web»:{«Files»:{}},«.ashiva-assets»:{«capsules»:{«Files»:{}},«content»:{«pages»:{«Files»:{}},«templates»:{«Files»:{}},«webrig»:{«product-feeds»:{«Files»:{}},«sitemap»:{«Files»:{}},«status»:{«Files»:{}},«syndication»:{«Files»:{}},«Files»:{}},«Files»:{}},«media»:{«Files»:{}},«site»:{«core»:{«Files»:{«core.php»:«»}},«meta»:{«manifests»:{«Files»:{}},«Files»:{}},«system»:{«Files»:{}},«theme»:{«Files»:{}},«Files»:{}},«Files»:{}},«Files»:{«favicon.ico»:«»,«index.php»: «\<?php include $_SERVER[＇DOCUMENT_ROOT＇].＇/.ashiva-assets/site/core/core.php＇; getAshivaPage(); ?>»}}}

____

## Description of `WebspaceSchema`

A **WebspaceSchema** has a very close syntax to `JSON` with the following **four** differences:

 1. `keys` and `values` are surrounded by `«` and `»` (instead of `"` and `"`)
 2. `keys` and `values` use a full-width `＇` instead of a `'`
 3. `keys` and `values` use a full-width `＂` instead of a `\"`
 4. `keys` and `values` use a full-width `｀` instead of a \`

_____

## PHP Function `convertWebspaceSchematoJSON()`

```
function convertWebspaceSchematoJSON ($webspaceSchema) {
  
  $webspaceSchema = str_replace('＂', '\"', $webspaceSchema);
  $webspaceSchema = str_replace("＇", "'", $webspaceSchema);
  $webspaceSchema = str_replace("｀", "`", $webspaceSchema);
  $webspaceSchema = str_replace(['«', '»'], '"', $webspaceSchema);

  $webspaceJSON = $webspaceSchema;

  echo $webspaceJSON;

  return $webspaceJSON;
}
```
_____

## PHP Function `convertJSONtoWebspaceSchema()`

```
function convertJSONtoWebspaceSchema ($webspaceJSON) {
  
  $webspaceJSON = str_replace('\"', '＂', $webspaceJSON);
  $webspaceJSON = str_replace("'", "＇", $webspaceJSON);
  $webspaceJSON = str_replace("`", "｀", $webspaceJSON);

  $webspaceArray = explode('"', $webspaceJSON);
  
  for ($i = 1; $i < count($webspaceArray); $i = $i + 2) {

    $webspaceArray[$i] = '«'.$webspaceArray[$i].'»';
  }

  $webspaceJSON = implode('', $webspaceArray);

  $webspaceSchema = $webspaceJSON;

  return $webspaceSchema;
}
```
