<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div id="flash-message-error" class="col-lg-12 mb-2" onclick="hideById(this.id)">
    <div class="card bg-danger text-white shadow">
        <div class="card-body">
            <?= $message ?>
        </div>
    </div>
</div>
<script>
    function hideById(elemid) {
        let x = document.getElementById(elemid);
        x.style.display = "none";
    }
</script>
