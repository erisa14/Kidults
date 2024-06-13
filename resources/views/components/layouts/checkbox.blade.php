

<meta name="viewport" content="width=device-width, initial-scale=1">


<div {{ $attributes->merge(['class'=> 'text-center font md:space-y-3 space-y-5 leading-4 font-medium']) }}>

    @foreach($interessi as $interesse)
    <x-forms.checkbox class="toggle-btn" name="interessi[]" type="checkbox" id="interesse{{ $interesse->id }}" value="{{ $interesse->id }}"></x-forms.checkbox>
    <x-forms.checkbox-label name="{{ $interesse->interessi }}" for="interesse{{ $interesse->id }}" class="lg:px-7 px-4 py-4 lg:text-base text-sm"></x-forms.checkbox-label>
@endforeach
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleLabels = document.querySelectorAll('.toggle-label');
        toggleLabels.forEach(function(toggleLabel) {
            const toggleBtn = toggleLabel.previousElementSibling;
            toggleLabel.addEventListener('click', function() {
                if (toggleBtn.checked) {
                    toggleLabel.classList.remove('selected');
                    toggleBtn.checked = true;
                } else {
                    toggleLabel.classList.add('selected');
                    toggleBtn.checked = false;
                }
            });
        });
    });
</script>
