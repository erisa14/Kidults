<x-navbar />
<div class="bg-[#292f36] mx-auto p-5">
    <h1 class="text-white text-3xl text-center">Compila questi dati per effettuare la registrazione. </h1>

    <div class="bg-white">
    <h4 class=" text-right mr-10">*Campo obbligatorio</h4>

    <x-forms.form action="/dati">

<div class="flex flex-col lg:gap-20 md:gap-12 gap-10">
  <x-forms.input name="text" type="text" placeholder="Scegli il negozio*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />
  <x-forms.input name="name" type="text" placeholder="Nome*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />

  <x-forms.input name="lastname" type="text" placeholder="Cognome*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />

  <x-forms.input name="email" type="email" placeholder="Email*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />

  <x-forms.input name="number" type="text" placeholder="Cellulare*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />

  <x-forms.input name="data" type="date" placeholder="Data di nascita*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />
  <x-forms.input name="genere" type="text" placeholder="Genere*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />

  <!-- duhet bere me select options per genere -->
  <!-- <select placeholder="Genere*" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
  <option readonly>Genere*</option>
          
  <option>New Mexico</option>
          <option>Missouri</option>
          <option>Texas</option>
        </select> -->


        <h3>Dati aggiuntivi</h3>
        <x-forms.input name="text" type="text" placeholder="Indirizio*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />
        <x-forms.input name="text" type="text" placeholder="Nr.civico*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />
        <x-forms.input name="text" type="text" placeholder="CAP*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />
        <x-forms.input name="text" type="text" placeholder="Provinca*" class="lg:w-[20lvw] lg:h-11 md:w-[30lvw] md:h-10 w-[75lvw] h-10 " required />

  <x-buttons.mainbutton>richiedila subito</x-buttons.mainbutton>
</div>

</x-forms.form>
    </div>

</div>