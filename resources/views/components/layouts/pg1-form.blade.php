<div {{ $attributes->merge(['class' => 'bg-white lg:w-[65%] w-[90%] rounded-3xl font  text-black'])}}>
    <h1 class="text-[#f34551] md:text-3xl text-xl font-bold text-center lg:mb-6 md:mb-4 mb-6">Entra nell'area Kidults</h1>
    <h5 class=" font-semibold  text-center leading-5">Inizia la richiesta inserendo la tua email, se non hai già la  Fidelity Card ti chiederemo qualche dato aggiuntivo.</h5>
    <x-forms.form action="/">

      <div class="flex flex-col lg:gap-16  gap-10 ">
        <x-forms.input name="email" type="email" placeholder="Email*" class="lg:h-11 h-10 " required />

        <x-buttons.mainbutton class="px-5 py-2 text-xl">richiedila subito</x-buttons.mainbutton>
      </div>

    </x-forms.form>

  </div>