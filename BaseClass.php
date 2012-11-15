<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Base Class
 * 
 * @author		Justin Kimbrell
 * @copyright	Copyright (c) 2012, Objective HTML
 * @link 		http://www.objectivehtml.com/
 * @version		1.0.2
 * @build		20121014
 */

if(!class_exists('BaseClass'))
{
	abstract class BaseClass {
			
	    /**
	     * Contructor
	     *
	     * @access	public
	     * @param	array 	Pass object properties as array keys to set default values
	     * @return	void
	     */
	   	    	
	    public function __construct($data = array())
	    {
		    foreach($data as $key => $value)
		    {
			    if(property_exists($this, $key))
			    {
				    $this->$key = $value;
			    }
		    }
		    
		    return;
	    }    
	   
	    
	    /**
	     * Dynamic create setter/getter methods
	     *
	     * @access	public
	     * @param	string 	method name to call
	     * @param	array 	arguments in the form of an array
	     * @return	mixed
	     */
		    
		public function __call($method, $args)
		{
			$magic_methods = array('get', 'set', 'append');
			
			// Add support for legacy code not supporting PSR-2. 
			// Setters/getters can look like get_method() & set_method()
			
			if(preg_match("/(get|set)_(\\w*)/us", $method))
			{			
				$method   = explode('_', $method);
				$property = $method[1];
				$method   = $method[0] . ucfirst($property);
				
				return call_user_func_array(array($this, $method), $args);
			}
			
			foreach($magic_methods as $replace)
			{
				$regex = "/^(".$replace.")([A-Z]\w*)/";
				
		    	if(preg_match($regex, $method))
		    	{		 
		    		$method   = preg_replace($regex, '$1 $2', $method);
		    		$method   = explode(' ', $method);
		    		$property = lcfirst($method[1]);
		    		$method   = $method[0];
			    }
		    }
		    
		    $args = array_merge(array($property), $args);	    	
		    	
		    return call_user_func_array(array($this, $method), $args);
		}
		
		
		/**
		 * Get the value of a defined property
		 *
		 * @access	public
		 * @param	string 	propery name
		 * @return	mixed
		 */
	       
	    public function get($prop)
	    {
		    if(isset($this->$prop))
		    {
			    return $this->$prop;
		    }
		    
		    return NULL;
	    }
	    
	    
		/**
		 * Set the value of a defined property
		 *
		 * @access	public
		 * @param	string 	propery name
		 * @param	string 	propery value
		 * @return	mixed
		 */
	       
	    public function set($prop, $value)
	    {
		    if(property_exists($this, $prop))
		    {
			    $this->$prop = $value;
		    }
	    }
	    
	    
		/**
		 * Append the value of a defined property
		 *
		 * @access	public
		 * @param	string 	propery name
		 * @param	string 	propery value
		 * @return	mixed
		 */
	       
		protected function append($prop = 'fields', $value)
		{
			if(isset($this->$prop))
			{
				$this->$prop = array_merge($this->{'get_'.$prop}(), $value);
			}
		}
		
	}
}


if(!class_exists('Base_Class'))
{
	abstract class Base_Class extends BaseClass {}
}