<h2><?= $subtitle ?></h2>
<form class="show">
  <?php foreach ($params as $label => $value): ?>
    <fieldset>
      <label class="survey-label show" for=<?= $label ?>><?= ucwords($label) ?></label>
      <input class="survey-input show" type="text" name=<?= $label ?> readonly value=<?= $value ?>>
    </fieldset>
  <?php endforeach; ?>
</form>
