<?php
/**
 * Monster Battle Academy - student starter
 * Sprint 1: ALLEEN procedurele PHP (arrays + functies).
 * Sprint 2: jullie zetten deze bestaande game om naar OOP.
 * Sprint 3: voeg inheritance en verschillende monstertypes toe.
 */

function startGame(): void
{
    // TODO SPRINT 1: bepaal zelf welke gegevens ieder monster nodig heeft.
    // Deze voorbeeldgegevens zijn alleen bedoeld om het scherm direct te kunnen tonen.
    $_SESSION['game'] = [
        'player' => ['name' => 'Jouw monster', 'hp' => 100, 'max_hp' => 100, 'attack' => 15],
        'opponent' => ['name' => 'Wild monster', 'hp' => 100, 'max_hp' => 100, 'attack' => 12],
        'message' => 'Een wild monster verschijnt!'
    ];
}

function handleAction(array $formData): void
{
    // TODO SPRINT 1: kijk welke knop is aangeklikt.
    // TODO SPRINT 1: verwerk de beurt en controleer de winnaar.
    // EXTRA SPRINT 1 / SPRINT 3: voeg wisselen tussen monsters toe.
}

function calculateDamage(array $attacker, array $defender): int
{
    // TODO SPRINT 1: bereken de hoeveelheid schade.
    return 0;
}

function isDefeated(array $monster): bool
{
    // TODO SPRINT 1: controleer of dit monster verslagen is.
    return false;
}

function resetGame(): void
{
    // TODO SPRINT 1: maak een nieuwe battle mogelijk.
}
