<script type="text/javascript" src="../../webroot/js/clearview_occupations.json"></script>
<script type="text/javascript" src="../../webroot/js/neos_occupations.json"></script>

<?php
$string = file_get_contents("../neos_occupations.json");
if ($string === false) {
    // deal with error...
}

$json_a = json_decode($string, true);
if ($json_a === null) {
    // deal with error...
}
?>

<select>
    <option selected="selected">Choose one</option>
<?php
foreach ($json_a as $occupation => $occupation_a) {
    echo $occupation = $occupation_a['Value'];
    echo "<option value='".$occupation_a."'>".$occupation_a["Value"]."</option>";
}
?>
</select>
