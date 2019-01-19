silverstripe-gridfield-html
===============================

GridField component to add any HTML fragment around the GridField

[![Total Downloads](https://poser.pugx.org/ivoba/silverstripe-gridfield-html/downloads.png)](https://packagist.org/packages/ivoba/silverstripe-gridfield-html)

Stupid simple ...

## Install

Via Composer

``` json
{
    "require": {
        "ivoba/silverstripe-gridfield-html": "^1.0"
    }
}
```

## Requirements
- SilverStripe 4

## Usage
Sometimes you just want to add a Link next to the actions, sometimes some text on top of the grid and sometimes an important image under the grid.

$gridField->getConfig()->addComponent(new GridFieldHtmlComponent([
          'buttons-before-left' => '<a href="/api/model/v1.json" target="_blank" class="font-icon-rocket btn btn-secondary">API</a>',
          'before' => '<div class="alert-info">Here comes the grid</div>',
          'after' => '<div class="alert-info center"><img src="https://www.seashepherd.org.au/images/news/2016/news-160204-2-3-Clean-Up-Banner-650w-2.jpg"/></div>'
          ]));

See here:
https://docs.silverstripe.org/en/4/developer_guides/forms/field_types/gridfield/#flexible-area-assignment-through-fragments

## License

The MIT License (MIT). Please see [License File](https://github.com/ivoba/silverstripe-gridfield-html/blob/master/LICENSE) for more information.
