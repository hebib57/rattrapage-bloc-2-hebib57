<?php
function formatDateFr(string $date, bool $avecHeure = false): string
{
    try {
        $format = $avecHeure ? 'd/m/Y H:i' : 'd/m/Y';
        $dt = new DateTime($date);
        return $dt->format($format);
    } catch (Exception $e) {
        return 'Date invalide';
    }
}
