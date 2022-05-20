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
        return str_replace(
            ['à','á','â','ã','ä','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ù','ú','û','ü','ý','ÿ','À','Á','Â','Ã','Ä','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý'],
            ['a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','u','y','y','A','A','A','A','A','C','E','E','E','E','I','I','I','I','N','O','O','O','O','O','U','U','U','U','Y'],
            $word
        );
    }

}
