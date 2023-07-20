# WebspaceSchema
A JSON-like data format used to express entire webspaces: folders, files, filedata

## Simple example of a `WebspaceSchema`:

```
{«AshivaWebspaceTitle»:«Ready Write Web»,«AshivaWebspace»:{«# Ready Write Web»:{«Files»:{}},«.ashiva-assets»:{«capsules»:{«Files»:{}},«content»:{«pages»:{«Files»:{}},«templates»:{«Files»:{}},«webrig»:{«product-feeds»:{«Files»:{}},«sitemap»:{«Files»:{}},«status»:{«Files»:{}},«syndication»:{«Files»:{}},«Files»:{}},«Files»:{}},«media»:{«Files»:{}},«site»:{«core»:{«Files»:{«core.php»:«»}},«meta»:{«manifests»:{«Files»:{}},«Files»:{}},«system»:{«Files»:{}},«theme»:{«Files»:{}},«Files»:{}},«Files»:{}},«Files»:{«favicon.ico»:«»,«index.php»: «<?php include $_SERVER[＇DOCUMENT_ROOT＇].＇/.ashiva-assets/site/core/core.php＇; getAshivaPage(); ?>»}}}
```
