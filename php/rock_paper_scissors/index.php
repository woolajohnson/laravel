<?php
session_start();

// Initialize session variables
if (!isset($_SESSION['computerScore'])) {
    $_SESSION['computerScore'] = 0;
    $_SESSION['playerScore'] = 0;
    $_SESSION['roundsPlayed'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    handleResult($_POST["choice"]);
}

function handleResult($player) {
    $computerChoices = ["Rock", "Paper", "Scissors"];
    $computer = $computerChoices[rand(0, 2)];
    
    $result = "";

    if ($computer == $player) {
        $result = "It's a Draw!";
    } elseif (($computer == "Rock" && $player == "Scissors") ||
              ($computer == "Paper" && $player == "Rock") ||
              ($computer == "Scissors" && $player == "Paper")) {
        $_SESSION['computerScore'] += 1;
        $result = "Computer Wins!";
    } else {
        $_SESSION['playerScore'] += 1;
        $result = "You Win!";
    }

    $_SESSION['roundsPlayed']+=1;

    echo "You choose $player<br>";
    echo "Computer choose $computer<br>";
    echo "$result<br>";

    // Check if best out of three rounds is reached
    if ($_SESSION['playerScore'] >= 2 || $_SESSION['computerScore'] >= 2) {
        if ($_SESSION['playerScore'] > $_SESSION['computerScore']) {
            echo "<script>alert('You are the match Winner!');</script>";
        } elseif ($_SESSION['computerScore'] > $_SESSION['playerScore']) {
            echo "<script>alert('Computer is the match Winner!');</script>";
        } else {
            echo "<script>alert('It's a Draw!');</script>";
        }

        // Reset scores and rounds played
        $_SESSION['computerScore'] = 0;
        $_SESSION['playerScore'] = 0;
        $_SESSION['roundsPlayed'] = 0;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors Game</title>
</head>
<body>
    <form action="" method="POST">
        <button type="submit" name="choice" value="Rock">Rock</button>
        <button type="submit" name="choice" value="Paper">Paper</button>
        <button type="submit" name="choice" value="Scissors">Scissors</button>
    </form>
</body>
</html>
