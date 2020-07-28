<?php

namespace RFCore\Entities;

use \Datetime;
use Exception;

class RF_Entity
{
    protected $nullableProperties = [];

    /**
     * Constructor
     * @param $params array
     * @throws Exception
     */
    public function __construct($params = null)
    {
        // apply update on building object
        if ($params != null) 
            $this->update($params);
    }

    /**
     * Update method
     * @param $params
     * @throws Exception
     */
    public function update($params){
        // manage param settings
        foreach ($params as $prop=>$value)
        { 
            switch(gettype($this->$prop))
            {
                case "integer":
                    // convert to int
                    $this->$prop = intval($value);
                break;
                case "boolean":
                    // convert to int
                    $this->$prop = ($value === TRUE);
                break;
                
                case "object":
                    // manage property as date
                    if(get_class($this->$prop)=="DateTime" && gettype($value)=="string")
                    {
                        $this->setDateProperty($prop,$value);
                    }else{
                        // all case of property
                        $this->$prop = $value;
                    }
                break;

                default:
                    // all case of property
                    $this->$prop = $value;
                break;
            }

        }

        foreach ($this as $prop=>$value) {
            if( ($prop != 'nullableProperties') && 
                !in_array($prop, $this->nullableProperties) && 
                ($value !== 0 && $value==null))
            { 
                throw new Exception("Property '" . $prop . "' of class '".static::class."' cannot be null.");
            }
        }
    }

    /**
     * get Values method
     * 
     * @return array  with all properties values
     */
    public function getProperties()
    {
        // extract Object as Array
        $ret=get_object_vars($this);
        // unset global properties
        unset($ret['__cloner__'],$ret['__initializer__'],$ret['__isInitialized__']);
        unset($ret['nullableProperties']);

        return $ret;
    }

    /** 
     * get Value method
     * @param string Property Name
     * @return mixed value of propertie or null
     */
    public function getProperty($propName,$asArray=FALSE)
    {
        $ret=$this->$propName??NULL;

        if( ($ret!=NULL) && (gettype($ret)=='object') && ($asArray==TRUE))
        {
            $ret=get_object_vars($ret);
        }

        return $ret;
    }



    /**
     * set date Propertie
     * @param string date
     * @return bool TRUE if set ok else False
	 * @throws Exception
     */
    public function setDateProperty($propName, $dateString)
    {
        if($dateString==""){
            // set propertie to NULL
            $this->$propName=NULL;
        }else{
            // set date to $propName propertie
            $date=new DateTime($dateString);
            if($date==FALSE){
                $date=NULL;
            }
            $this->$propName=$date;
        }
    }


}
