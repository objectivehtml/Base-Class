# Base Class

#### Version 1.0.0 (2012-08-24)

---

### About the Class

This class is intended to be a base class in which all your other classes could inherit. The idea is provide a basic set of dynamic setters and getters available with class method or from within the construct.

---

### Setters & Getters

The setters and getters are dynamic, and included by default in the library using PHP magic method. Meaning, you can set or get any object property using a memorable and consistent syntax.

#### Setters

*Setters are used to override default property values.*

	$Obj = new Your_Class(array(
	    'your_param_1' => 'Your Value 1'
	    'your_param_2' => 'Your Value 2'
	    'your_param_3' => 'Your Value 3'
	));

	$Obj->set_your_param_1('Your Value 1');
	$Obj->set_your_param_2('Your Value 2');
	$Obj->set_your_param_3('Your Value 3'); 

#### Getters

*Getters are used to retrieve property values.*

	$Obj = new Your_Class(array(
	    'your_param_1' => 'Your Value 1'
	    'your_param_2' => 'Your Value 2'
	    'your_param_3' => 'Your Value 3'
	));

	$Obj->get_your_param_1(); // Return 'Your Value 1'
	$Obj->get_your_param_2(); // Return 'Your Value 2'
	$Obj->get_your_param_3(); // Return 'Your Value 3' 

---

### License

GNU GENERAL PUBLIC LICENSE - Refer to license.txt for details.