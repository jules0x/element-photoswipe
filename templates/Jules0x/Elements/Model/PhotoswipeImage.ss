<figure class="element"
        itemprop="associatedMedia"
        itemscope
        itemtype="http://schema.org/ImageObject">

    <a href="{$Image().URL}"
       data-size="{$Image().width()}x{$Image().height()}">

        <img src="{$ImageThumbnail}"
             class="tile"
             itemprop="thumbnail"
             alt="{$Title}"/>
    </a>
</figure>
