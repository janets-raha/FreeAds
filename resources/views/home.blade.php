<div>
    <ul>
        @foreach($products as $i)
        <li>{{$i->name}}</li>
        <li>{{$i->price}}</li>

        @endforeach

    </ul>

</div>