<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<x-navbar />
<div class="bg-[#292f36] mx-auto p-5">
  <h1 class="text-white text-3xl text-center">Compila questi dati per effettuare la registrazione. </h1>

  <div class="bg-white">
    <h4 class=" text-right mr-10">*Campo obbligatorio</h4>

    <x-forms.form action="/dati">

      <div class="flex flex-col lg:gap-20 md:gap-12 gap-10">


        <div class="relative w-[30%]">
          <x-forms.inputformat type="text" id="floating" required />
          <x-forms.label for="floating" class=" ">Scegli il negozio*</x-forms.label>
        </div>


        <div class="relative w-[30%]">
          <x-forms.inputformat type="text" id="name" required />
          <x-forms.label for="name">Nome*</x-forms.label>
        </div>
        <div class="relative w-[30%]">
          <x-forms.inputformat name="lastname" type="text" id="lastname" required />
          <x-forms.label for="lastname">Cognome*</x-forms.label>
        </div>
        <div class="relative w-[30%]">
          <x-forms.inputformat name="email" type="email" id="email" required />
          <x-forms.label for="email">Email*</x-forms.label>
        </div>

        <div class="relative w-[30%]">

          <x-forms.inputformat name="phone" type="text" id="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
          <x-forms.label for="phone"><span class="border-r border-black">+39</span>Cellulare*</x-forms.label>

        </div>


        <div class="relative w-[30%]">
          <x-forms.inputformat name="date" type="text" id="datepicker" class="data" required></x-forms.inputformat>
          <x-forms.label for="date"> Data di nascita*</x-forms.label>




        </div>



        <div class="relative w-[30%] ">

          <x-forms.select id="gender" required :options="[

        'Female' => 'Female',
        'Male' => 'Male'
    ]"><x-forms.label for="gender">Genere*</x-forms.label></x-forms.select>

        </div>


        <h3>Dati aggiuntivi</h3>

        <div class="relative w-[30%] ">
          <x-forms.inputformat name="indirizio" type="text" id="indirizio" required />
          <x-forms.label for="indirizio">Indirizio*</x-forms.label>
        </div>

        <div class="relative w-[30%] ">
          <x-forms.inputformat name="nr-civico" type="text" id="nr-civico" required />
          <x-forms.label for="nr-civico">Nr.civico*</x-forms.label>
        </div>

        <div class="relative w-[30%] ">
          <x-forms.inputformat name="cap" type="text" id="cap" required />
          <x-forms.label for="cap">CAP*</x-forms.label>
        </div>

        <div class="relative w-[30%] ">
          <x-forms.inputformat name="provinca" type="text" id="provinca" required />
          <x-forms.label for="provinca">Provinca*</x-forms.label>
        </div>

        <x-buttons.mainbutton>conferma</x-buttons.mainbutton>
      </div>

    </x-forms.form>
  </div>

</div>

<script type="text/javascript">
  $(function() {
    $("#datepicker").datepicker({
      dateFormat: 'yy-mm-dd'
    }).on("mousedown", function(e) {
      e.stopPropagation();
    });
  });
</script>