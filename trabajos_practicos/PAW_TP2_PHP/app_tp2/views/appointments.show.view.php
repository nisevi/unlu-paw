<?php if (isset($appointment)): ?>
  <form class="show">
      <?php foreach ($appointment as $key => $value): ?>
        <?php if($key != "diagnostic"): ?>
          <fieldset>
            <label class="appointment-label show" for=<?= $key ?>><?= ucwords($key) ?></label>
            <input class="appointment-input show" type="text" name=<?= $key ?> readonly value=<?= $value ?>>
          </fieldset>
        <?php endif; ?>
      <?php endforeach; ?>
      <?php if(isset($appointment["diagnostic"]) && $appointment["diagnostic"] != ""): ?>
        <fieldset>
          <label class="appointment-label show" for="diagnostic">Uploaded Image</label>
          <img class="uploaded-image show" src=<?= "../uploads/" . $appointment["diagnostic"] ?>>
        </fieldset>
      <?php endif; ?>
  </form>
  <p>Go back to <a href="/appointments">appointments</a></p>
<?php endif; ?>
