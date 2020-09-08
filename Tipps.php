<script>
    var x = document.createElement("SECTION");
    x.setAttribute("id", "mySection");
    document.body.appendChild(x);

    var heading = document.createElement("H1");
    var txt1 = document.createTextNode("Section Heading");
    heading.appendChild(txt1);
    document.getElementById("mySection").appendChild(heading);

    var para = document.createElement("P");
    var txt2 = document.createTextNode("Some text in section..");
    para.appendChild(txt2);
    document.getElementById("mySection").appendChild(para);
</script>

<!-------------CSS Grid------------------>
<!--
grid-template-colums: repeat(auto-fit, minmax(100px, 1fr));
https://medium.com/@elad/becoming-a-css-grid-ninja-f4c6db018cc1#:~:text=The%20fit%2Dcontent%20function%20accepts,a%20minimum%20value%20of%200.
align-items & justify-items = place-items.
align-self & justify-self = place-self.
align-content & justify-content = place-content.
place-items: center; 
/* = align-items: center; + justify-items: center; */

Fit-Content() Function
The fit-content function accepts one param, the maximum value. A grid column/row with this property set will still take up as little space as necessary, according to its content, but no more than the maximum value.
The fit-content() function is similar to using the minmax() function, with a minimum value of 0. One key difference: The minmax() is more likely to occupy the max space allowed, while the fit-content does not occupy any more space than necessary.
Example:
.container{
    display: grid;  
    grid-template-columns: auto fit-content(800px) auto;
}
---->

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


// -------------Classen--------------- 

class Connection

{
    // static function means u cann acces the function everywhere using Connection::make();
    public static function make()
    {
    }
}
