<div>
    <div>Menu</div>
    <div>Type: horizontal</div>
    <div>
        <ul>
            @foreach($elementList as $elementName => $elementLink)
                <li>
                    <a href="{{$elementLink}}">{{$elementName}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>