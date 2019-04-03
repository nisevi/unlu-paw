<main>
    <h2>Appointment Request</h2>
    <form>
      <?php foreach ( $attributes as $label => $value ): ?>
        <fieldset>
          <label class="apt-form" for=<?= $label ?>><?= strtoupper($label) ?></label>
          <input type="text" name=<?= $label ?> readonly value=<?= $value ?>>
        </fieldset>
      <?php endforeach; ?>
    </form>
</main>
