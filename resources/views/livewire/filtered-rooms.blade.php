<div>
    @foreach ($hotels as $hotel)
       <div>
        <p>{{ $hotel->city->name}}</p>
       </div>

    @endforeach
</div>
