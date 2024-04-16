<!-- alert -->
<?php if (isset($message)) : ?>
    <div class="alert alert-<?= $response ? 'success' : 'danger'; ?> alert-dismissible fade show position-absolute w-100" role="alert">
        <?= $message; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>