<meta name="viewport" content="width=device-width, initial-scale=1">
@if(Auth::check())
      <script>
          setTimeout(function() {
              window.location.href = "{{ url('/card') }}";
          },0);
      </script>
  @else
<div class="bg-white xl:w-[70%] lg:w-[80%] font rounded-xl mx-auto mt-5">
  @if(session('alert'))
      <div class="flex alert items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">{{ session('alert') }}
        </div>
      </div>
@endif
    <h4 class=" text-right mr-10 py-8 font-semibold lg:text-base text-sm">*Campo obbligatorio</h4>

    <x-forms.form action="{{ route('register') }}" class="md:p-16 p-5">
    @csrf
      <div class="flex flex-col lg:gap-10 md:gap-12 gap-10">


        <div class="relative md:w-[45%] ">
          <x-forms.inputformat type="text" id="negozio" name="negozio" class="md:h-16" required />
          <x-forms.label for="negozio" class=" ">Scegli il negozio*</x-forms.label>
        </div>


        <div class="flex md:flex-row flex-col gap-6 ">

          <div class="relative md:w-[45%]">
            <x-forms.inputformat type="text" id="name" name="name" class="md:h-16" required />
            <x-forms.label for="name">Nome*</x-forms.label>
          </div>
          <div class="relative md:w-[45%]">
            <x-forms.inputformat name="lastname" type="text" name="lastname" id="lastname" class="md:h-16" required />
            <x-forms.label for="lastname">Cognome*</x-forms.label>
          </div>

        </div>

        <div class="flex  md:flex-row flex-col gap-6 ">
          <div class="relative  md:w-[45%]">
            <x-forms.inputformat name="email" type="email" id="email" name="email" class="md:h-16" required />
            <x-forms.label for="email">Email*</x-forms.label>
            @if($errors->has('email'))
            <span class="text-red-500">{{$errors->first('email')}}</span>
            @endif
          </div>

          <div class="relative md:w-[45%]">
            <span class="border-r absolute z-20 border-gray-400  left-0 md:top-5 font-semibold md:h-7 h-5 top-4 px-3 md:text-base text-sm">+39</span>
            <x-forms.inputformat name="cellulare" type="text" id="cellulare" class="md:h-16 pl-20" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
            <x-forms.label for="cellulare" class="ml-10">Cellulare</x-forms.label>
            <div class="pt-5 pb-3 rounded-lg w-full lg:px-5 md:px-3 px-5 -translate-y-2  border border-t-0">
              <h2 class="flex gap-1 font-bold text-sm "><svg xmlns="http://www.w3.org/2000/svg" fill="#f34551" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
                Perché é importante?
              </h2>
              <p class=" text-left md:tracking-tight md:text-[14px] text-[14px] leading-4 mt-2 font-semibold md:w-full w-[96%] tracking-wider">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>


          </div>
        </div>

        <div class="flex  md:flex-row flex-col gap-6 ">
          <div class="relative md:w-[45%]">
            <x-forms.inputformat name="date" type="text" id="datepicker" class="data" class="md:h-16" required></x-forms.inputformat>
            <x-forms.label for="date"> Data di nascita*</x-forms.label>
          </div>

          <div class="relative md:w-[45%] ">

            <x-forms.select class="md:h-16 pt-5" placeholder="" id="gender" name="gender" :options="[
        ''=>'',
        'Female' => 'Female',
        'Male' => 'Male'
    ]" />
            <x-forms.select-label for="gender">
              Genere
            </x-forms.select-label>
          </div>

        </div>

        <h3 class="text-left text-[#f34551] font-bold lg:text-3xl md:text-xl">Dati aggiuntivi</h3>

        <div class="flex  md:flex-row flex-col gap-6">
          <div class="relative md:w-[45%] ">
            <x-forms.inputformat name="indirizzo" type="text" id="indirizzo" class="md:h-16" />
            <x-forms.label for="indirizzo">Indirizzo</x-forms.label>
          </div>

          <div class="relative lg:w-[16%] md:w-[18%] ">
            <x-forms.inputformat name="nr_civico" type="text" id="nr_civico" class="md:h-16" />
            <x-forms.label for="nr_civico" class="lg:ml-0 md:-ml-4">Nr.civico</x-forms.label>
          </div>

          <div class="relative lg:w-[27%] md:w-[22%]">
            <x-forms.inputformat name="cap" type="text" id="cap" class="md:h-16" />
            <x-forms.label for="cap" >CAP</x-forms.label>
          </div>
        </div>


        <div class="relative md:w-[45%] ">
          <x-forms.inputformat name="provinca" type="text" id="provinca" class="md:h-16" />
          <x-forms.label for="provinca">Provinca</x-forms.label>
        </div>


        <div>
          <h1 class="text-left text-[#f34551] font-bold lg:text-3xl md:text-xl">I tuoi interesi</h1>
          <h3 class=" font-semibold mt-4 md:text-lg text-sm text-left">Seleziona qui sotto le aree di tuo interesse per ricevere offerte in linea con le tue preferenze. </h3>

          <x-layouts.checkbox :interessi="$interessi" class="xl:w-[45%] lg:w-[100%] md:w-[80%] w-[105%]  mx-auto" id="interessi" name="interessi"/>
        </div>



        <div class="flex flex-col gap-5">
          <h1 class="text-left text-[#f34551] font-bold lg:text-3xl md:text-xl">Informativa privacy</h1>



       <x-layouts.privacy-policy/>

        </div>

        <x-buttons.mainbutton class="py-2 px-8 mt-5 lg:text-3xl text-xl">conferma</x-buttons.mainbutton>
      </div>




    </x-forms.form>
  </div>
  @endif

  <script type="text/javascript">
  $(function() {
    $("#datepicker").datepicker({
      dateFormat: 'yy-mm-dd'
    }).on("mousedown", function(e) {
      e.stopPropagation();
    });
  });
</script>