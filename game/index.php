<?php
$board = isset($_GET['board']) ? explode(',', $_GET['board']) : array_fill(0, 9, '');
$turn = isset($_GET['turn']) ? (int)$_GET['turn'] : 0;
$squaresFilled = isset($_GET['squares_filled']) ? (int)$_GET['squares_filled'] : 0;

function checkWinner($board) {
    $winningCombinations = [
        [0,1,2],
        [3,4,5],
        [6,7,8], 
        [0,3,6],
        [1,4,7],
        [2,5,8],
        [0,4,8],
        [2,4,6]           
    ];

    foreach ($winningCombinations as $combo) {
        if ($board[$combo[0]] != '' && 
            $board[$combo[0]] == $board[$combo[1]] && 
            $board[$combo[0]] == $board[$combo[2]]) {
            return $board[$combo[0]];
        }
    }

    return null;
}

$newBoard = $board;
$newTurn = $turn;
$newSquaresFilled = $squaresFilled;

if (isset($_GET['move'])) {
    $move = (int)$_GET['move'];
    
    if ($newBoard[$move] == '') {
        $newBoard[$move] = ($newTurn % 2 == 0) ? 'X' : 'O';
        $newTurn++;
        $newSquaresFilled++;
    }
}

$winner = checkWinner($newBoard);
$boardParam = implode(',', $newBoard);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хрестики-нулики</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/9267/9267851.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="game-container">
        <h1>Крестики-нолики</h1>
        
        <div class="game-info">
            <?php if ($winner): ?>
                <h2>Переміг: <?= $winner ?></h2>
                <a href="index.php" class="btn">Грати ще</a>
            <?php elseif ($newSquaresFilled == 9): ?>
                <h2>Нічия!</h2>
                <a href="index.php" class="btn">Грати ще</a>
            <?php else: ?>
                <h2>Хід: <?= ($newTurn % 2 == 0) ? 'X' : 'O' ?></h2>
            <?php endif; ?>
        </div>
        <div class="game-board">
            <?php for ($i = 0; $i < 9; $i++): ?>
                <div class="cell">
                    <?php if (!$winner && $newBoard[$i] == ''): ?>
                        <a href="?move=<?= $i ?>&board=<?= $boardParam ?>&turn=<?= $newTurn ?>&squares_filled=<?= $newSquaresFilled ?>" 
                           style="display:block; width:100%; height:100%; text-decoration:none; color:inherit;">
                            &nbsp;
                        </a>
                    <?php else: ?>
                        <?= $newBoard[$i] ?>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</body>
</html>