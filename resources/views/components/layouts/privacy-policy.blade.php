<div class="flex border text-left p-5 rounded-xl gap-2">
<x-forms.toggle/>
<div class="ml-2">
<h1 {{ $attributes->merge(['class'=>'text-[#073b92]  py-2 rounded'])}}>{{$heading}}</h1>
    <p class="text-gray-400 text-sm ">{{$paragraph}}</p>
</div>


</div>