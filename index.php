<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body style="background-color:#111; color:#eee">
    <pre>
<?php


//1
echo '===1===<br>';
require __DIR__. '/classes/Kibiras1.php';

$bucket1 = new Kibiras1();
echo $bucket1->getRockAmount();
echo '<br>';
$bucket1->add1Rock();
echo $bucket1->getRockAmount();
echo '<br>';
$bucket1->addManyRocks(5);
echo $bucket1->getRockAmount();

echo '<br><br>';


//2
echo '===2===<br>';
require __DIR__. '/classes/Pinigine.php';

$wallet = new Pinigine();
$wallet->add(1);
$wallet->count();
echo '<br>';
$wallet->add(2);
$wallet->count();
echo '<br>';
$wallet->add(5);
$wallet->count();
echo '<br><br>';


//3
echo '===3===<br>';
require __DIR__. '/classes/Kibiras2.php';

$bucketOne = new Kibiras2();
echo $bucketOne->getAllRocks();
echo '<br>';
$bucketOne->add1Rock();
$bucketOne->add1Rock();
echo $bucketOne->getAllRocks();
echo '<br>';
$bucketTwo = new Kibiras2();
echo $bucketTwo->getAllRocks();
echo '<br>';
$bucketTwo->add1Rock();
$bucketTwo->add1Rock();
echo $bucketTwo->getAllRocks();
echo '<br>';
$bucketThree = new Kibiras2();
echo $bucketThree->getAllStaticRocks();
echo '<br>';
$bucketThree->addManyRocks(5);
echo $bucketThree->getAllStaticRocks();
echo '<br><br>';


//4
echo '===4===<br>';
require __DIR__. '/classes/KibirasNePo1.php';

$multiAddBucket = new KibirasNePo1();
$multiAddBucket->add1Rock();
echo $multiAddBucket->getRockAmount();
echo '<br><br>';


//5
echo '===5===<br>';
echo 'Error: exercise missing.<br><br>';


//6
echo '===6===<br>';
require __DIR__. '/classes/Stikline.php';

$bigGlass = new Stikline(200);
$medGlass = new Stikline(150);
$smlGlass = new Stikline(100);
$bigGlass->pourIn(200);
echo '<br>';
$medGlass->pourIn($bigGlass->pourOut());
echo '<br>';
$smlGlass->pourIn($medGlass->pourOut());
echo '<br><br>';


//7
echo '===7===<br>';
require __DIR__. '/classes/Basket.php';

$pintine = new Basket();

/*while (!($pintine->isFull()))
{
    $pintine->addMushroom(new Mushroom);
}
$pintine->getMushrooms();*/
$shroom = new Mushroom();
echo $pintine->checkMushroom($shroom). "<br>";
$pintine->addMushroom($shroom);
$shroom = new Mushroom();
echo $pintine->checkMushroom($shroom). "<br>";
$pintine->addMushroom($shroom);
$shroom = new Mushroom();
echo $pintine->checkMushroom($shroom). "<br>";
$pintine->addMushroom($shroom);
$shroom = new Mushroom();
echo $pintine->checkMushroom($shroom). "<br>";
$pintine->addMushroom($shroom);
$shroom = new Mushroom();
echo $pintine->checkMushroom($shroom). "<br>";
$pintine->addMushroom($shroom);
$shroom = new Mushroom();
echo $pintine->checkMushroom($shroom). "<br>";
$pintine->addMushroom($shroom);
$pintine->getMushrooms();
echo '<br><br>';


//8
echo '===8===<br>';

$wallet->countCoins();
echo '<br><br>';
$wallet->countNotes();
echo '<br><br>';


//9
echo '===9===<br>';
require __DIR__. '/classes/Satellite.php';

$satOne = Satellite::create();
echo $satOne->getTitle();
echo '<br>';
print_r ($satOne);
echo '<br><br>';

$satTwo = Satellite::create();
echo $satTwo->getTitle();
echo '<br>';
print_r ($satTwo);
echo '<br><br>';

$satThree = Satellite::create();
echo $satThree->getTitle();
echo '<br>';
print_r ($satThree);
echo '<br><br>';

echo '<br><br>';


//10
echo '===10===<br>';
require __DIR__. '/classes/TennisPlayer.php';

$player1 = TennisPlayer::create('Blank 1');
$player2 = TennisPlayer::create('Blank 2');
TennisPlayer::gameStart();
$player1->passBall();
$player2->passBall();
$player1->passBall();

?>
    </pre>
</body>
</html>