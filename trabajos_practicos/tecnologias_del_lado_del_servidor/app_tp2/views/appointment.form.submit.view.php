<form class="show" method="POST" id="appointment" enctype="multipart/form-data" action="/appointment">
  <fieldset class="width-350">
    <label class="appointment-label show" for="name">Name *</label>
    <input class="appointment-input show" type="text" name="name" required>
  </fieldset>
  <fieldset class="width-350">
    <label class="appointment-label show" for="email">Email *</label>
    <input class="appointment-input show" type="email" name="email" required>
  </fieldset>
  <fieldset class="width-350">
    <label class="appointment-label show" for="phone">Phone *</label>
    <input class="appointment-input show" type="tel" name="phone" required>
  </fieldset>
  <fieldset class="width-350">
    <label class="appointment-label show" for="age">Age</label>
    <input class="appointment-input show" type="number" name="age">
  </fieldset>
  <fieldset class="width-350">
    <label class="appointment-label show" for="shoes_size">Shoes Size</label>
    <input class="appointment-input show" type="number" min="20" max="45" step="1" name="shoes_size" />
  </fieldset>
  <fieldset class="width-350">
    <label class="appointment-label show" for="hight">Height in centimeters</label>
    <input type="range" value="180" min="30" max="250" step="1" name="height" onchange="rangevalue.value=value" />
    <output id="rangevalue">180</output>
  </fieldset>
  <fieldset class="width-350">
      <label class="appointment-label show" for="birth_date">Birth Date *</label>
      <input class="appointment-input show" type="date" name="birth_date" required>
  </fieldset>
  <fieldset class="width-350">
    <label class="appointment-label show" for="hair_color">Hair color</label>
    <input class="appointment-input show" type="color" name="hair_color">
  </fieldset>
  <fieldset class="width-350">
    <label class="appointment-label show" for="date">Date *</label>
    <input class="appointment-input show" type="date" name="date" required>
  </fieldset>
  <fieldset class="width-350">
    <label class="appointment-label show" for="time">Time</label>
    <input class="appointment-input show" type="time" min="8:00" max="17:00" step="900" name="time">
  </fieldset>
  <fieldset class="width-350">
    <label class="appointment-label show" for="diagnostic">Attach image</label>
    <input class="appointment-input show" type="file" name="diagnostic" id="diagnostic" accept="image/png, image/jpg">
  </fieldset>
  <fieldset class="width-350">
    <button id="submit" class="black-button" type="submit" form="appointment">Submit</button>
    <button id="clear" class="black-button" type="reset" form="appointment">Clear</button>
  </fieldset>
</form>
