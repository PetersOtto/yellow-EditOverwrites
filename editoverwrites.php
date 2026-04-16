<?php
// Editoverwrites extension for the Datenstrom Yellow CMS 

class YellowEditoverwrites
{
    const VERSION = "0.9.1";
    public $yellow;         // access to API

    // Handle initialisation
    public function onLoad($yellow)
    {
        $this->yellow = $yellow;
    }

    // Handle page extra data
    public function onParsePageExtra($page, $name)
    {
        $output = null;
        $base = $page->getBase(true);
        $editBase = rtrim($this->yellow->system->get("coreServerBase") . $this->yellow->system->get("editLocation"), "/");
        if ($base == $editBase && $name == "header") {
            $assetLocation = $this->yellow->system->get("coreServerBase") . $this->yellow->system->get("coreAssetLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$assetLocation}editoverwrites/css/editoverwrites.min.css\" />\n";
        }
        return $output;
    }
}
