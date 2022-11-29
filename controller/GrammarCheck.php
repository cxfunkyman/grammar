<?php

class GrammarCheck
{
    public function spellCheck($string)
    {

        $pspellLink = pspell_new("en");
        preg_match_all("/[A-Z\']{1,16}/i", $string, $words);

        for ($i = 0; $i < count($words[0]); $i++) {

            if (!pspell_check($pspellLink, $words[0][$i])) {

                $string = str_replace($words[0][$i], "<font color=\"#FF0000\">" . $words[0][$i] . "</font>", $string);
            }
        }

        return $string;
    }
    public function grammaryCheck($text)
    {
        //depends on fnSpell()
        // Extracts text from HTML code. In addition to normal word separators,  HTML tags
        // and HTML entities also function as word delimiters

        $pspellLink = pspell_new("en"); //0. Get the dictionary
        $strings = explode(">", $text);  //1. Split $text on '>' to give us $strings with 0 or 1 HTML tags at the end
        $nStrings = count($strings);

        for ($cStrings = 0; $cStrings < $nStrings; $cStrings++) {
            $string = $strings[$cStrings]; //2. For each string from 1

            if ($string == '') {
                continue; //2.1. If the string is empty, skip it
            }

            $temp  = explode('<', $string); //2.1.1   Split $string from $strings on '>' to give us a $tag and $cdata
            $tag = $temp[1];
            $cdata = $temp[0];

            $subCdatas = explode(";", $cdata);  //2.2 Split &cdata on ';' to give $subcdatas
            //with 0 or 1 HTML entities on the end
            $nSubCdatas = count($subCdatas);    //2.3   For each $subCdata from $subcdatas in 2.2

            for ($cSubCdatas = 0; $cSubCdatas < $nSubCdatas; $cSubCdatas++) {
                $subCdata = $subCdatas[$cSubCdatas];

                if ($subCdata == '') {
                    continue; //2.3.1. If the $subCdata is empty, skip it
                }

                $temp = explode('&', $subCdata); //2.3.2 Split the $subCdata on '&' to give us
                //a $subCdataEntity and a $subCdataNoEntities
                $subCdataEntity = $temp[1];
                $subCdataNoEntities = $temp[0];
                //2.3.3 Spellcheck the $cdataWithNoEntities
                $subCdataNoEntities = $this->fnSpell($pspellLink, $subCdataNoEntities);

                if (!$subCdataEntity) { //2.3.34 Put the $subCdataEntity, a '&' and
                    //the $cdataWithNoEntities back into the $subCdata from 2.2
                    $subCdata = $subCdataNoEntities;
                } else {
                    $subCdata = $subCdataNoEntities . '&' . $subCdataEntity . ';';
                }
                $subCdatas[$cSubCdatas] = $subCdata; //2.3.5 Put the $subCdata back into the array of $subCdatas
            }

            $cdata = implode("", $subCdatas); //2.4 Implode the array of $subCdatas back into the $cdata

            if ($tag) { //2.5    Put the $tag , '>' and $cdata back into $string
                $string = $cdata . '<' . $tag . '>';
            } else {
                $string = $cdata;
            }
            $strings[$cStrings] = $string; //2.6 Put $string back in its place in $strings
        }

        return implode('', $strings); //3  Implode the $strings back into $text

    }
    public function fnSpell($pspellLink, $string)
    {

        preg_match_all("/[A-Z\']{1,16}/i", $string, $words);

        for ($i = 0; $i < count($words[0]); $i++) {
            $currentword = $words[0][$i];

            if (!pspell_check($pspellLink, $currentword)) {
                $wordarray = pspell_suggest($pspellLink, $currentword);
                $words = implode(', ', $wordarray);
                $suggest = "<acronym class='spell' title='$words'>$currentword</acronym class='spell'>";
                $string = str_replace($currentword, $suggest, $string);
            }
        }
        return $string;
    }
    public function clearSpell($text)
    {
        $strings = explode(">", $text);
        $nStrings = count($strings);

        for ($cStrings = 0; $cStrings < $nStrings; $cStrings++) {
            $string = $strings[$cStrings];

            if ($string == '') {
                continue;
            }

            $temp  = explode('<', $string);
            $tag = $temp[1];
            $cdata = $temp[0];

            if (strstr($tag, 'acronym') && strstr($tag, "class='spell'")) {
                $string = $cdata;
            } else {
                $string = $cdata . '<' . $tag . '>';
            }
            $strings[$cStrings] = $string;
        }
        return implode('', $strings);
    }
}
