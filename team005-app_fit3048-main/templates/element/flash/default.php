<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div id="flash-message" class="col-lg-12 mb-2" onclick="hideById(this.id)">
    <div class="card bg-secondary text-white shadow">
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
