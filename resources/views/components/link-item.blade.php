@props([
    'active' => false,
    'value' => "samerer"
])


<li><a {{ $attributes->class(["py-3 px-2 block hover:text-blue-600","font-bold"=>$active])}}  > {{ $slot}} </a></li>