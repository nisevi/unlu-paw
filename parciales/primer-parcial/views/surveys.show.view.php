<?php if (isset($survey)): ?>
  <form class="show">
      <?php foreach ($survey as $key => $value): ?>
        <?php if($key != "diagnostic"): ?>
          <fieldset>
            <label class="survey-label show" for=<?= $key ?>><?= ucwords($key) ?></label>
            <input class="survey-input show" type="text" name=<?= $key ?> readonly value=<?= $value ?>>
          </fieldset>
        <?php endif; ?>
      <?php endforeach; ?>
      <?php if(isset($survey["diagnostic"]) && $survey["diagnostic"] != ""): ?>
        <fieldset>
          <label class="survey-label show" for="diagnostic">Uploaded Image</label>
          <img class="uploaded-image show" src=<?= "../uploads/" . $survey["diagnostic"] ?>>
        </fieldset>
      <?php endif; ?>
  </form>
  <p>Go back to <a href="/surveys">surveys</a></p>
<?php endif; ?>
