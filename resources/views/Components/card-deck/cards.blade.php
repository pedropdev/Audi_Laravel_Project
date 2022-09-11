<div class="card-deck">

    @component('Components.card-deck.card',[
        'image' =>'https://wallpaperset.com/w/full/d/f/4/346112.jpg',
        'button' => 'button 1'
       ])
        ;
    @endcomponent

    @component('Components.card-deck.card',[
        'image' =>'https://cdn.suwalls.com/wallpapers/cars/2013-white-audi-a3-hatchback-quattro-52621-1920x1080.jpg',
        'button' => 'button 2'
       ])
        ;
    @endcomponent

    @component('Components.card-deck.card',[
            'image' =>'https://images.ctfassets.net/gutd6ifzn6vi/2SClKOulJb3wQ5UIwDeoBE/a2503494d502c9a2edb436d5301b4c05/Audi-R8-V10.jpg?w=1200&h=680&q=50&fm=webp',
            'button' => 'button 3'
           ])
        ;
    @endcomponent
</div>

