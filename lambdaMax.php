<?php
function MatriksPerbandingan() {
    $matriksPerbandingan = [
        [1.000, 7.000, 5.000],
        [0.143, 1.000, 0.333],
        [0.200, 3.000, 1.000]
    ];

    return $matriksPerbandingan;
}
function calculateSumPerColumn($matriksPerbandingan) {
    $transposedMatrix = array_map(null, ...$matriksPerbandingan);
    return array_map('array_sum', $transposedMatrix);
}

$bobotMatrix = [
    [0.7235060572],
    [0.08330788286],
    [0.1931860599],
];

$matriksPerbandingan= MatriksPerbandingan();
$sumPerColumn = calculateSumPerColumn($matriksPerbandingan);

// Get the dimensions of the matrices
$rowsJumlah = count($sumPerColumn);
$colsJumlah = 1;

$rowsBobot = count($bobotMatrix);
$colsBobot = count($bobotMatrix[0]);

// Perform matrix multiplication using array_map and array_sum
$lambdaMax = array_sum(array_map(function ($value, $col) {
    return $value * $col[0];
}, $sumPerColumn, $bobotMatrix));


?>
