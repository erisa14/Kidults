<x-navbar />
<div class="bg-[#292f36] mx-auto p-5">
    <h1 class="text-white text-3xl text-center">Compila questi dati per effettuare la registrazione. </h1>

    <div class="bg-white">
    <!-- <x-forms.form action="/dati">
<h4 class=" text-right mr-10">*Campo obbligatorio</h4>
<x-forms.input name="text" type="text" placeholder="Scegli"  class="w-[20lvw] h-12" required/>

<x-buttons.mainbutton>conferma</x-buttons.mainbutton>
    </x-forms.form> -->
    <!-- <h4 class=" text-right mr-10">*Campo obbligatorio</h4> -->

    <x-forms.form action="/dati">

<x-forms.input name="text" type="text" placeholder="Scegli"  class="w-[20lvw] h-12" required/>

  <x-buttons.mainbutton>richiedila subito</x-buttons.mainbutton>

</x-forms.form>
    </div>

</div>