<div class="card card-compact w-full border-t border-primary bg-base-300 z-0 rounded-t-md shadow-primary mb-3">
    @if(isset($image))
        <figure class="object-cover">
            <img src={{$image}} alt="..." />
        </figure>
    @endif
    <div class="card-body">
        <h1 class="card-title text-lg font-bold">{{$title}}</h1>
        {{$slot}}
    </div>
</div>