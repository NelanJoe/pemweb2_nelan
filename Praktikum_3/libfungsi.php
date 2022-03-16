<?php
function kelulusan($_nilai)
{
    if ($_nilai > 55) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

function grade($totalNilai)
{
    if ($totalNilai >= 85 && $totalNilai <= 100) {
        $grade = "A";
    } elseif ($totalNilai >= 70 && $totalNilai < 85) {
        $grade = "B";
    } elseif ($totalNilai >= 56 && $totalNilai < 69) {
        $grade = "C";
    } elseif ($totalNilai >= 36 && $totalNilai < 55) {
        $grade = "D";
    } elseif ($totalNilai >= 0 && $totalNilai < 36) {
        $grade = "E";
    } else {
        $grade = "I";
    }
    return $grade;
}

function predikat($_grade)
{
    switch ($_grade) {
        case 'A':
            $predikat = "Sangat Memuaskan";
            break;
        case 'B':
            $predikat = "Memuaskan";
            break;
        case 'C':
            $predikat = "Cukup";
            break;
        case 'D':
            $predikat = "Kurang";
            break;
        case 'E':
            $predikat = "Sangat Kurang";
            break;
        default:
            break;
    }
    return $predikat;
}