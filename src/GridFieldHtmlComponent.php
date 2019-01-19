<?php

namespace Ivoba\GridFieldHtml;

use SilverStripe\Forms\GridField\GridField_HTMLProvider;

class GridFieldHtmlComponent implements GridField_HTMLProvider
{

    private $fragments;

    /**
     * Expects assoc array [fragment => HTML]
     *
     * GridFieldHtmlComponent constructor.
     * @param array $fragments
     */
    public function __construct(array $fragments)
    {
        $this->fragments = $fragments;
    }

    /**
     * GridField will render thes fragments
     *
     * @param GridField
     *
     * @return array
     */
    public function getHTMLFragments($gridField)
    {
        return $this->fragments;
    }

}
