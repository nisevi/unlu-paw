<h2><?= $subtitle ?></h2>
<form class="show">
  <?php foreach ($params as $label => $value): ?>
    <fieldset>
      <label class="appointment-label show" for=<?= $label ?>><?= ucwords($label) ?></label>
      <input class="appointment-input show" type="text" name=<?= $label ?> readonly value=<?= $value ?>>
    </fieldset>
  <?php endforeach; ?>
  <?php if($image_encrypted_name != ""): ?>
    <fieldset>
      <label class="appointment-label fill-width show" for="diagnostic">Uploaded Image</label>
      <img class="uploaded-image show" src=<?= "../uploads/" . $image_encrypted_name ?>>
    </fieldset>
  <?php endif; ?>
</form>
