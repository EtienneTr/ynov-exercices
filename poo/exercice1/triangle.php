<?php

Class Triangle {

    private $lg1;
    private $lg2;
    private $lg3;

    /**
     * Triangle constructor.
     * @param $lg1
     * @param $lg2
     * @param $lg3
     */
    public function __construct($lg1, $lg2, $lg3)
    {
        $this->lg1 = $lg1;
        $this->lg2 = $lg2;
        $this->lg3 = $lg3;
    }


    /* PROPERTY */

    private function numberOfEqualSides(){


        if($this->lg1 - $this->lg2 - $this->lg3 == 0) return 3;

        else if($this->lg1 - $this->lg2 == 0 || $this->lg1 - $this->lg2 == 0 || $this->lg2 - $this->lg3 == 0) return 2;

        else return 0;
    }

    /**
     *
     */
    public function isIsosceless(){

        return $this->numberOfEqualSides() >= 2;

    }

    public function isEquilateral(){
        return $this->numberOfEqualSides() == 3;
    }

    public function isRightAngled(){
        //ab² + ac² = bc²
        return ($this->lg1^ 2 + $this->lg2 ^2) ==  $this->lg3 ^ 2;
    }

    public function isScalene(){
        return $this->numberOfEqualSides() == 0;
    }


    /* SETTERS & GETTERS */

    /**
     * @return mixed
     */
    public function getLg1()
    {
        return $this->lg1;
    }

    /**
     * @param mixed $lg1
     */
    public function setLg1($lg1)
    {
        $this->lg1 = $lg1;
    }

    /**
     * @return mixed
     */
    public function getLg2()
    {
        return $this->lg2;
    }

    /**
     * @param mixed $lg2
     */
    public function setLg2($lg2)
    {
        $this->lg2 = $lg2;
    }

    /**
     * @return mixed
     */
    public function getLg3()
    {
        return $this->lg3;
    }

    /**
     * @param mixed $lg3
     */
    public function setLg3($lg3)
    {
        $this->lg3 = $lg3;
    }



}




?>