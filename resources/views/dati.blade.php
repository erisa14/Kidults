<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class=" overflow-hidden">
<x-layouts.navbar />
<div class="bg-[#292f36] mx-auto p-5">
  <h1 class="text-white xl:text-3xl lg:text-2xl text-xl text-left xl:translate-x-[15%] lg:translate-x-[10%] py-8 font-bold">Compila questi dati per effettuare la registrazione. </h1>

 <x-layouts.pg3-form  :interessi="$interessi"/>

</div>

</div>