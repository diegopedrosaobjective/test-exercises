<?php

namespace Exercises;

use Exception;

class ExerciseThree
{
    public function wordSum (string $word) : int {
        if (!is_string($word)) {
            throw new Exception("Por favor insira uma palavra !");
        }

        $sanitizedWord = $this->filterEspecialChars($word);

        $atozLower = array_combine(range("a", "z"), range(1,26));
        $atozUpper = array_combine(range("A", "Z"), range(27,52));
        $atozTotal = array_merge($atozLower, $atozUpper);

        $splittedWord = str_split($sanitizedWord);
        $total = 0;

        foreach($splittedWord as $letter) {
            $total += $atozTotal[$letter];
        }

        return $total;
    }

    private function filterEspecialChars (string $word) : string {
        return strtr($word,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ','aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }

}
