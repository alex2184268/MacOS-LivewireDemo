<div>
    <input wire:model.debounce.lazy="name" type="text" >
    <h2>{{ $name }}</h2>
    <input wire:model="click" type="checkbox" >
    <select wire:model="greeting" multiple>
        <option>Goodmorning</option>
        <option>Goodafternoon</option>
        <option>Goodevening</option>
    </select>
    {{ implode('，',$greeting)}} {{$name}} 
    @if ($click)
    !
    @endif
</div>
