
<html>
<body>

Thank you for taking the Capital Quiz!<br>

<?php 
	$capitals = array("Washington D.C.", "Paris", "Ottowa", "Cape Town", "Beijing");
	$num_correct = 0;	

	$ans_usa = $_POST["usa_capital"];
	$ans_france = $_POST["france_capital"];
	$ans_canada = $_POST["canada_capital"];
	$ans_sa = $_POST["sa_capital"];
	$ans_china = $_POST["china_capital"];

	if($ans_usa == $capitals[0]) {
		$num_correct++;
	}
	if($ans_france == $capitals[1]) {
		$num_correct++;
	}
	if($ans_canada == $capitals[2]) {
                $num_correct++;
        }		
	if($ans_sa == $capitals[3]) {
                $num_correct++;
        }
	if($ans_china == $capitals[4]) {
                $num_correct++;
        }

	$temp = $num_correct / 5.0;
	$percentage = $temp * 100;
?>

<br>You got <?php echo "$num_correct"; ?> correct.
<br>You scored <?php echo "$percentage%"; ?> on this quiz.<br>
<br>Here are the results:<br>

<br>Question 1: The capital of the United States of America is ____?
<br>Your answer: <?php echo "$ans_usa"; ?>
<br>Correct answer: <?php echo "$capitals[0]"; ?>

<br>

<br>Question 2: The capital of France is ____?
<br>Your answer: <?php echo "$ans_france"; ?>
<br>Correct answer: <?php echo "$capitals[1]"; ?>

<br>

<br>Question 3: The capital of Canada is ____?
<br>Your answer: <?php echo "$ans_canada"; ?>
<br>Correct answer: <?php echo "$capitals[0]"; ?>

<br>

<br>Question 4: The capital of South Africa is ____?
<br>Your answer: <?php echo "$ans_sa"; ?>
<br>Correct answer: <?php echo "$capitals[3]"; ?>

<br>

<br>Question 5: The capital of China is ____?
<br>Your answer: <?php echo "$ans_china"; ?>
<br>Correct answer: <?php echo "$capitals[4]"; ?>

</body>
</html>
