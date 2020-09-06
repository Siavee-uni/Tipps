<?php echo '<pre>' . print_r($test, true) . '</pre>'; ?>

<!-------------CSS Grid------------------>
<style>
  test {
    display:grid;
    grid-template-colums: repeat(auto-fit, minmax(100px, 1fr));
  }
</style>

<!-------------php echo alernative------------------>
<?php echo "test" ?>
<!-- gleiche wie -->
<?= "test" ?>


<ul>
    <!------------ alternative  php/html syntax---------------->
    <?php
    foreach ($tests as $test) {
        echo "<li>$test</li>";
    }
    ?>
    <!-- gleiche wie -->
    <?php foreach ($tests as $test) : ?>
        <li><?= $test ?></li>
    <?php endforeach; ?>
    <!---->
</ul>

<!--Oder mit IF Statements-->
<?php if ($true) {
    echo "<p>yes</p>";
}
?>
<!----------oder----------------->
<?php if ($true) : ?>
    <p>test</p>
<?php endif; ?>

<!-- --------------------arrays------------->
<?php
$testArray = [
    "test1",
    "test2"
];
// add value to a array
$testArray[] = "test3";
// remove value to a array $key = index in eindimesionalem array
unset($testArray[$key]);



// -------------ternary operator--------------- 

echo $trueOrFalse ? "true" : "false";

