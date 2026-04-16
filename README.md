# yellow-EditOverrides
Css overwrites for the yellow edit extension.
https://github.com/annaesvensson/yellow-edit/

<p align="center"><img src="01-yellow-editoverwrite.png?raw=true" alt="Bildschirmfoto"></p>

## My Target
My goal was to create a consistent look and feel for the editor that appears the same in all themes, developed using the ibbtown theme.

## Before installation
Note: This extension works with my Ibbtown theme. With other themes, problems may occur if the `<body>` is narrower than 1500px. Display errors may also occur in other cases. Please make a backup before installing this extension!

## File structure

```
├── system               
    ├── extensions            
    ├── layouts           
    ├── themes
    │   └── editoverwrites
    │       ├── css
    │       │   ├── editoverwrites.min.css
    │       │   └── editoverwrites.min.css.map
    │       └── scss
    │           └── editoverwrites.scss
    ├── trash           
    └── workers
        └── editoverwrites.php
```

## How to install an extension
Download ZIP file and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update)

## Acknowledgements
* Thank you [Datenstrom](https://datenstrom.se/de/) for the great »Yellow CMS«
