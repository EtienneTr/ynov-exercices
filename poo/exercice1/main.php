<?php

require_once __DIR__ . '/triangle.php';

$tri1 = new Triangle(5,4, 3);

$tri1->isEquilateral();
$tri1->isIsosceless();
$tri1->isRightAngled();
$tri1->isScalene();

?>

<table>
    <tbody>
        <tr>
            <td>
                Longueur 1
            </td>
            <td>
                Longueur 2
            </td>
            <td>
                Longueur 3
            </td>
            <td>
                equilateral
            </td>
            <td>
                isocèle
            </td>
            <td>
                rectangle
            </td>
            <td>
                scalène
            </td>
        </tr>

        <tr>
            <td>
                <?php echo $tri1->getLg1() ?>
            </td>
            <td>
                <?php echo $tri1->getLg2() ?>
            </td>
            <td>
                <?php echo $tri1->getLg3() ?>
            </td>
            <td>
                <?php echo $tri1->isEquilateral() ?>
            </td>
            <td>
                <?php echo $tri1->isIsosceless() ?>
            </td>
            <td>
                <?php echo $tri1->isRightAngled() ?>
            </td>
            <td>
                <?php echo $tri1->isScalene() ?>
            </td>
        </tr>
    </tbody>
</table>
