<meta name="viewport" content="width=device-width, initial-scale=1">

<x-img.background-img class="flex md:flex-row flex-col justify-evenly">

@section('content')
  <x-layouts.checkbox-form  :interessi="$interessi" />

  @endsection
</x-img.background-img>