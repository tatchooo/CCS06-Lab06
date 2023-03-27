<?php

// HTML Chess Symbols Unicode
// URL: https://en.wikipedia.org/wiki/Chess_symbols_in_Unicode
// Verify if these Unicodes are correct, make the adjustments if necessary

$pieces = [
    'black' => [
        'king' => '&#9818;',
        'queen' => '&#9819;',
        'rook' => '&#9820;',
        'bishop' => '&#9821;',
        'knight' => '&#9822;',
        'pawn' => '&#9823;'
    ],
    'white' => [
        'king' => '&#9812;',
        'queen' => '&#9813;',
        'rook' => '&#9814;',
        'bishop' => '&#9815;',
        'knight' => '&#9816;',
        'pawn' => '&#9817;'
    ]
];

// Chessboard HTML
// Sample Code: https://gist.github.com/itsromack/d8a62ae2311fcc6d6a13212e2cd72728
echo '<table style="border-collapse: collapse;">';
for ($row = 8; $row >= 1; $row--) {
    echo '<tr>';
    for ($col = 1; $col <= 8; $col++) {
        $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
        if ($row == 2 || $row == 7) {
            echo '<td style="text-align: center; border: 1px solid black; font-size: 40px;">'.$pieces[$row == 2 ? 'black' : 'white']['pawn'].'</td>';
        } else if ($row == 1 || $row == 8) {
            if ($col == 1 || $col == 8) {
                echo '<td style="text-align: center; border: 1px solid black; font-size: 40px;">'.$pieces[$row == 1 ? 'black' : 'white']['rook'].'</td>';
            } else if ($col == 2 || $col == 7) {
                echo '<td style="text-align: center; border: 1px solid black; font-size: 40px;">'.$pieces[$row == 1 ? 'black' : 'white']['knight'].'</td>';
            } else if ($col == 3 || $col == 6) {
                echo '<td style="text-align: center; border: 1px solid black; font-size: 40px;">'.$pieces[$row == 1 ? 'black' : 'white']['bishop'].'</td>';
            } else if ($col == 4) {
                echo '<td style="text-align: center; border: 1px solid black; font-size: 40px;">'.$pieces[$row == 1 ? 'black' : 'white']['queen'].'</td>';
            } else if ($col == 5) {
                echo '<td style="text-align: center; border: 1px solid black; font-size: 40px;">'.$pieces[$row == 1 ? 'black' : 'white']['king'].'</td>';
            }
        } else {
            echo '<td style="border: 1px solid black;"></td>';
        }
    }
    echo '</tr>';
}
echo '</table>';

?>