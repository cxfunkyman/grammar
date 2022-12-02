<?php
// this path must lead to you PHP Spell Check Install folder
require "/Innovatank/grammar/phpspellcheck/include.php";

class GrammarCheck
{
    public function __construct()
    {
        //For a spell-check button that opens in a pop-up dialog.
        $mySpell = new SpellCheckButton();
        $mySpell->InstallationPath = "/Innovatank/grammar/phpspellcheck/";
        $mySpell->Fields = "ALL";
        echo $mySpell->SpellImageButton();

        //For inline "spell-as-you-type" on right click
        $mySpell = new SpellAsYouType();
        $mySpell->InstallationPath = "/Innovatank/grammar/phpspellcheck/";
        $mySpell->Fields = "ALL";
        echo $mySpell->Activate();
    }
}

//For a spell-check button that opens in a pop-up dialog.
// $mySpell = new SpellCheckButton();
// $mySpell->InstallationPath = "/phpspellcheck/";
// $mySpell->Fields = "ALL";
// echo $mySpell->SpellImageButton();

//For inline "spell-as-you-type" on right click
// $mySpell = new SpellAsYouType();
// $mySpell->InstallationPath = "/phpspellcheck/";
// $mySpell->Fields = "ALL";
// echo $mySpell->Activate();
