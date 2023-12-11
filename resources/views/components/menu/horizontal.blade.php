<div class="menu menu_horizontal">
    <div>Menu</div>
    <div>Type: horizontal</div>
    <div class="menu__list menu__list_horizontal">
        <ul>
            @foreach($elementList as $elementName => $elementLink)
                <li class="menu__element {{$isSelectedElement($elementName) ? 'menu__element_selected' : ''}}">
                    <a href="{{$elementLink}}">{{$elementName}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>