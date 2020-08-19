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
      $fit_types=["tight","fine","loose"];
      if (in_array($fit, $fit_types)){
      $this->fit = $fit;
    }else{
      echo "Please enter a correct type of fit (tight-fine-loose).\n";
    }
  }

  function setOwner($owner){
    $this->owner=$owner;
  }

  function gerOwner(){
    return $this->owner;
  }

  function setColor($color){
    $this->color=$color;
  }

  function getColor(){
    return $this->color;
  }
}

//TESTING Pajamas class

$chicken_PJs = new Pajamas("CHICKEN", "loose", "red");
echo $chicken_PJs->describe()."\n";

$chicken_PJs->setFit("lijl");
echo $chicken_PJs->describe()."\n";

//ButtonablePajamas class

class ButtonablePajamas extends Pajamas{
   
   private $button_state = "unbuttoned";

   public function describe(){
    return parent::describe(). "The pajama is $this->button_state.";
  }

  public function toggleButtons(){
    if ($this->button_state === "unbuttoned") {
    $this->button_state = "buttoned";
  } else {
    $this->button_state = "unbuttoned";
  }
  }
}

//TEST ButtonablePajamas class
$moose_PJs = new ButtonablePajamas ("moose", "fine", "blue");
echo $moose_PJs->describe()."\n";

$moose_PJs->toggleButtons();
echo $moose_PJs->describe()."\n";

//HoodiePajamas class

class HoodiePajamas extends Pajamas{
   
   private $hoddieOn = FALSE;

   public function describe(){
     if($this->hoddieOn === FALSE){
       return parent::describe(). " The hoddie is off.";
     }else{
       return parent::describe(). " The hoddie is on.";
     }
    
  }

  public function putHoddie(){
    $this->hoddieOn=TRUE;
}
}

//TEST HoodiePajamas class
$dog_PJs = new HoodiePajamas("Dog", "tight", "green");
echo $dog_PJs->describe()."\n";

$dog_PJs->putHoddie();
echo $dog_PJs->describe()."\n";

