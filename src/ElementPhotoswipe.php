<?php

namespace Jules0x\Elements;

use DNADesign\ElementalList\Model\ElementList;
use SilverStripe\Forms\LiteralField;

class ElementPhotoswipe extends ElementList
{
    private static $icon = 'font-icon-picture';

    private static $table_name = 'ElementPhotoswipe';

    private static $singular_name = 'Photoswipe gallery';

    private static $description = 'Photoswipe gallery';

    private static $db = [
        'Width' => 'Enum("2, 3, 4", 3)'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        if (!$this->isInDB()) {
            $fields->addFieldToTab('Root.Main', LiteralField::create('SaveNotice', '<p class="message warning">Save this element before adding images</p>'));
        }

        return $fields;
    }

    public function getType()
    {
        return $this->config()->get('singular_name');
    }
}