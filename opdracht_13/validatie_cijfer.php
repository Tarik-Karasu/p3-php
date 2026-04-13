<?php



function controleerAantal(mixed $aantal): void
{
    if (is_numeric($aantal)) {
        echo "Waarde: {$aantal} -> Correct ingevoerd." . PHP_EOL;
    } else {
        echo "Waarde: {$aantal} -> Voer een geldig getal in." . PHP_EOL;
    }
}

$aantal = 12;
controleerAantal($aantal);







