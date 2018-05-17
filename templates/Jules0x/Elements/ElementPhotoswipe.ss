<% if $ShowTitle %>
    <div class="title-wrap">
        <h2 class="title">$Title</h2>
    </div>
<% end_if %>

<div class="element-photoswipe width__{$Width}" id="e{$ID}">
    <div class="flex-wrap">
        $Elements
    </div>
    <% include Photoswipe_base %>
</div>
