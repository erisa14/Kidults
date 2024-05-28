<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<x-navbar />
<div class="bg-[#292f36] mx-auto p-5">
  <h1 class="text-white text-3xl text-center -translate-x-[238px] py-8 font-bold">Compila questi dati per effettuare la registrazione. </h1>

  <div class="bg-white w-[63%] rounded-xl mx-auto mt-5">
    <h4 class=" text-right mr-10 py-8 font-semibold">*Campo obbligatorio</h4>

    <x-forms.form action="/dati" class="p-16">

      <div class="flex flex-col lg:gap-10 md:gap-12 gap-10">


        <div class="relative w-[43%]">
          <x-forms.inputformat type="text" id="floating" class="h-16" required />
          <x-forms.label for="floating" class=" ">Scegli il negozio*</x-forms.label>
        </div>


        <div class="flex gap-6 ">

          <div class="relative w-[43%]">
            <x-forms.inputformat type="text" id="name" class="h-16" required />
            <x-forms.label for="name">Nome*</x-forms.label>
          </div>
          <div class="relative w-[43%]">
            <x-forms.inputformat name="lastname" type="text" id="lastname" class="h-16" required />
            <x-forms.label for="lastname">Cognome*</x-forms.label>
          </div>

        </div>

        <div class="flex gap-6 ">
          <div class="relative w-[43%]">
            <x-forms.inputformat name="email" type="email" id="email" class="h-16" required />
            <x-forms.label for="email">Email*</x-forms.label>
          </div>

          <div class="relative w-[43%]">
            <span class="border-r absolute z-20 border-gray-400 align-middle left-0 top-5 font-semibold h-7 px-4">+39</span>
            <x-forms.inputformat name="phone" type="text" id="phone" class="h-16 pl-20" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
            <x-forms.label for="phone" class="pl-20">Cellulare</x-forms.label>
            <div class="pt-5 pb-3 rounded-lg w-full px-5 -translate-y-2  border border-t-0">
              <h2 class="flex gap-1 font-bold text-sm "><svg xmlns="http://www.w3.org/2000/svg" fill="#f34551" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
                Perché é importante?
              </h2>
              <p class=" text-left tracking-tight text-[14px] leading-4 mt-2 font-semibold ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>

            
          </div>
        </div>

        <div class="flex gap-6 ">
          <div class="relative w-[43%]">
            <x-forms.inputformat name="date" type="text" id="datepicker" class="data" class="h-16" required></x-forms.inputformat>
            <x-forms.label for="date"> Data di nascita*</x-forms.label>
          </div>

          <div class="relative w-[43%] ">

            <x-forms.select class="h-16" placeholder="" id="gender" :options="[
        ''=>'',
        'Female' => 'Female',
        'Male' => 'Male'
    ]" />
            <x-forms.select-label for="gender">
              Genere
            </x-forms.select-label>
          </div>

        </div>

        <h3 class="text-left text-[#f34551] font-bold text-3xl">Dati aggiuntivi</h3>

        <div class="flex gap-6">
          <div class="relative w-[43%] ">
            <x-forms.inputformat name="indirizio" type="text" id="indirizio" class="h-16" />
            <x-forms.label for="indirizio">Indirizio</x-forms.label>
          </div>

          <div class="relative w-[15%] ">
            <x-forms.inputformat name="nr-civico" type="text" id="nr-civico" class="h-16" />
            <x-forms.label for="nr-civico">Nr.civico</x-forms.label>
          </div>

          <div class="relative w-[25%] ">
            <x-forms.inputformat name="cap" type="text" id="cap" class="h-16" />
            <x-forms.label for="cap">CAP</x-forms.label>
          </div>
        </div>


        <div class="relative w-[43%] ">
          <x-forms.inputformat name="provinca" type="text" id="provinca" class="h-16" />
          <x-forms.label for="provinca">Provinca</x-forms.label>
        </div>


        <div>
        <h1  class="text-left text-[#f34551] font-bold text-3xl">I tuoi interesi</h1>
        <h3 class=" font-semibold mt-4 text-lg text-left">Seleziona qui sotto le aree di tuo interesse per ricevere offerte in linea con le tue preferenze. </h3>
      </div>



      <div class="flex flex-col gap-5">
      <h1  class="text-left text-[#f34551] font-bold text-3xl">Informativa privacy</h1>


     
      <x-layouts.privacy-policy>
        <h1 heading="Dichiaro di aver letto ed accettato l'Informativa sul trattamento dei dati personali e di aver preso visione ed accettato il Regolamento della Card.*">Dichiaro di aver letto ed accettato l'Informativa sul trattamento dei dati personali e di aver preso visione ed accettato il Regolamento della Card.*</h1>
        <p paragraph=""></p>
      </x-layouts.privacy-policy>
      <x-layouts.privacy-policy  :font-size="'text-xl'" heading="VUOI RICEVERE LE NOSTRE COMUNICAZIONI?" paragraph="Acconsento a essere contattato/a dalla Società tramite posta ordinaria, email e/o notifiche push, SMS e/o MMS e/o applicazioni mobili di messaggistica per la promozione di prodotti, servizi, distribuzione di materiale a carattere informativo, pubblicitario e promozionale, eventi, invio di newsletter e pubblicazioni (Articolo 1, lettera d) dell'Informativa privacy)."/>
      <x-layouts.privacy-policy heading="VUOI RICEVERE OFFERTE PERSONALIZZATE?" paragraph="Acconsento affinché la Società possa svolgere analisi attraverso un processo automatizzato volte a determinare il profilo dell'interessato per adeguare le attività di marketing alle esigenze dell'Interessato (Articolo 1, lettera e) dell'Informativa privacy)."/>

      <x-layouts.privacy-policy heading="POSSIAMO CHIEDERE LA TUA OPINIONE CON I NOSTRI SONDAGGI?" paragraph="Acconsento a essere contattato dalla Società o da società da questa incaricate (anche tramite chiamata di un operatore) per lo svolgimento di analisi e ricerche di mercato, anche in relazione al grado di soddisfazione dell'interessato (Articolo 1, lettera f) dell'Informativa privacy)"/>

      <x-layouts.privacy-policy heading="POSSIAMO CONDIVIDERE I TUOI DATI CON ALTRE SOCIETÀ DEL NOSTRO GRUPPO?" paragraph="Acconsento alla comunicazione dei dati da parte della Società ad altre società appartenenti al medesimo gruppo a cui appartiene la Societă e/o a soggetti terzi per il perseguimento delle finalità per le quali ho prestato il mio consenso al Titolare."/>




      </div>

        <x-buttons.mainbutton class="py-2 px-8 text-3xl">conferma</x-buttons.mainbutton>
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


  function handleSelectChange(select) {
    var label = document.getElementById("myLabel");
    if (select.value !== "") {
      label.classList.add("selected");
    } else {
      label.classList.remove("selected");
    }
  }
</script>