<?php

require_once __DIR__ . '/triangle.php';

$tri1 = new Triangle(5,4, 3);

$triArr = array(
    new Triangle(3,4,5),
    new Triangle(5,5,10),
    new Triangle(10,10,10)
)


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

        <?php for ($i=0; $i <= sizeof($triArr) - 1; $i++): ?>
        <tr>
            <td>
                <?php echo $triArr[$i]->getLg1() ?>
            </td>
            <td>
                <?php echo $triArr[$i]->getLg2() ?>
            </td>
            <td>
                <?php echo $triArr[$i]->getLg3() ?>
            </td>
            <td>
                <?php echo $triArr[$i]->isEquilateral() ?>
            </td>
            <td>
                <?php echo $triArr[$i]->isIsosceless() ?>
            </td>
            <td>
                <?php echo $triArr[$i]->isRightAngled() ?>
            </td>
            <td>
                <?php echo $triArr[$i]->isScalene() ?>
            </td>
        </tr>
        <?php endfor ?>

    </tbody>
</table>
