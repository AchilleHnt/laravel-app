@props([
    'msg',
    'type' => 'info',
    'dismissible' => false
])

<div  {{ $attributes->class(['p-4 rounded shadow-'.$type,]) }}>
    <h3 class="text-lg font-bold mb-2">{{ $msg }}</h3>
    {{ $slot }}
    @if ($dismissible === true)
        <button>&times;</button>     
    @endif
</div>
