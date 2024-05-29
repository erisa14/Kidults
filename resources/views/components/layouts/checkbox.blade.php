<div {{ $attributes->merge(['class' => 'text-center md:space-y-3 space-y-5 leading-4 font-medium']) }}>
<x-forms.checkbox class="toggle-btn" name="Costruzioni" type="checkbox" id="id1"></x-forms.checkbox>
<x-forms.checkbox-label name="Costruzioni" for="id1"></x-forms.checkbox-label>
<x-forms.checkbox class="toggle-btn" name="Giochi in scatola" type="checkbox" id="id2"></x-forms.checkbox>
<x-forms.checkbox-label name="Giochi in scatola" for="id2"></x-forms.checkbox-label>
<x-forms.checkbox class="toggle-btn" name="Puzzle" type="checkbox" id="id3"></x-forms.checkbox>
<x-forms.checkbox-label name="Puzzle" for="id3"></x-forms.checkbox-label>
<x-forms.checkbox class="toggle-btn" name="Collezionabili" type="checkbox" id="id4"></x-forms.checkbox>
<x-forms.checkbox-label name="Collezionabili" for="id4"></x-forms.checkbox-label>
<x-forms.checkbox class="toggle-btn" name="Action figures" type="checkbox" id="id5"></x-forms.checkbox>
<x-forms.checkbox-label name="Action figures" for="id5"></x-forms.checkbox-label>
<x-forms.checkbox class="toggle-btn" name="Gadget e idee regalo" type="checkbox" id="id6"></x-forms.checkbox>
<x-forms.checkbox-label name="Gadget e idee regalo" for="id6"></x-forms.checkbox-label>
<x-forms.checkbox class="toggle-btn" name="Giochi in scatola" type="checkbox" id="id7"></x-forms.checkbox>
<x-forms.checkbox-label name="Giochi in scatola" for="id7"></x-forms.checkbox-label>
<x-forms.checkbox class="toggle-btn" name="Bambole da collezione" type="checkbox" id="id8"></x-forms.checkbox>
<x-forms.checkbox-label name="Bambole da collezione" for="id8"></x-forms.checkbox-label>
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