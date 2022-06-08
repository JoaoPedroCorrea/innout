<?php
// Temporary Controller 



?>

<div class="form-group col-md-6">
    <label for="start_date">Data de Admissão</label>
    <input type="date" name="start_date" timezone="[[America/Sao_Paulo]]" id="start_date" class="form-control <?= $errors['start_date'] ? 'is-invalid' : '' ?>" value="<?= $start_date ?>">
    <div class="invalid-feedback">
        <?= $errors['start_date'] ?>
    </div>
</div>