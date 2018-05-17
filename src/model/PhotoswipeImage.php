<?php

namespace Jules0x\Elements\Model;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;

class PhotoswipeImage extends BaseElement {

    private static $table_name = 'PhotoswipeImage';

    private static $singular_name = 'Photoswipe image';

    private static $plural_name = 'Photoswipe images';

    private static $db = [
        'Text' => 'Varchar(100)'
    ];

    private static $has_one = [
        'Image' => Image::class
    ];

    private static $owns = [
        'Image'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName([
            'BackgroundColor',
            'Constrain',
            'Settings'
        ]);

        return $fields;
    }

    public function getTitle() {
        return $this->Text;
    }

    public function getType()
    {
        return $this->config()->get('singular_name');
    }

    public function getImageThumbnail() {
        return $this->Image->PreviewLink();
    }

    public function getHideElementHolder()
    {
        return true;
    }
}
