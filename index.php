<?php
// Helper class (string format)
class StringUtilities{
  
  public static function 
  secondCase($string){
    $string = strtolower($string);  
    if (strlen($string) >= 2) {
      $string[1] = strtoupper($string[1]);
      }    
    return $string;
    }
}

//TESTING Helper class
echo StringUtilities::secondCase("Pedro")."\n";
echo StringUtilities::secondCase("PEDRO")."\n";
echo StringUtilities::secondCase("pedro")."\n";
echo StringUtilities::secondCase("p")."\n";

//Pajamas class
class Pajamas{
  private $owner, $fit, $color;

  function __construct($owner,$fit, $color){
    $this ->owner= StringUtilities::secondCase($owner);
    $this ->fit = $fit;
    $this ->color = $color;
  }

  public function describe(){
    return "This $this->color pajama belongs to $this->owner and fit  $this->fit.";
  }

  function setFit($fit){
    $this->fit=$fit;
  }
}

//TESTING Pajamas class

$chicken_PJs = new Pajamas("CHICKEN", "lose", "red");
echo $chicken_PJs->describe()."\n";

$chicken_PJs->setFit("tight");
echo $chicken_PJs->describe()."\n";

//ButtonablePajamas class

class ButtonablePajamas extends Pajamas{
   
   private $button_state = "unbuttoned";
}
