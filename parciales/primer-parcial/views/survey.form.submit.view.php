<form class="show" method="POST" id="survey" enctype="multipart/form-data" action="/survey">
  <fieldset class="width-350">
    <label class="survey-label show" for="name">Complete name *</label>
    <input class="survey-input show" type="text" name="name" required>
  </fieldset>
  <fieldset class="width-350">
    <label class="survey-label show" for="email">Email *</label>
    <input class="survey-input show" type="email" name="email" required>
  </fieldset>
  <fieldset class="width-350">
    <label class="survey-label show" for="email">Languajes *</label>
    <select name="languaje">
      <?php
         foreach($languajes as $l) {
           echo '<option value="' + $l + '">' + $l + '</option>';
         }
      ?>
    </select>
  </fieldset>
  <fieldset class="width-350">
    <button id="submit" class="black-button" type="submit" form="survey">Submit</button>
    <button id="clear" class="black-button" type="reset" form="survey">Clear</button>
  </fieldset>
</form>

