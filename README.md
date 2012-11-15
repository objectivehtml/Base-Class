# Base Class

#### Version 1.1.0 (2012-11-15)

---

### About the Class

This class is intended to be a base class in which all your other classes could inherit. The idea is provide a basic set of dynamic setters and getters available with class method or from within the construct.

---

### Setters & Getters

The setters and getters are dynamic, and included by default in the library using PHP magic method. Meaning, you can set or get any object property using a memorable and consistent syntax.

#### Setters

*Setters are used to override default property values.*

	$Obj = new YourClass(array(
	    'yourParam1' => 'Your Value 1'
	    'yourParam2' => 'Your Value 2'
	    'yourParam3' => 'Your Value 3'
	));

	$Obj->setYourParam1('Your Value 1');
	$Obj->setYourParam2('Your Value 2');
	$Obj->setYourParam3('Your Value 3'); 

#### Getters

*Getters are used to retrieve property values.*

	$Obj = new YourClass(array(
	    'yourParam1' => 'Your Value 1'
	    'yourParam2' => 'Your Value 2'
	    'yourParam3' => 'Your Value 3'
	));

	$Obj->getYourParam1(); // Return 'Your Value 1'
	$Obj->getYourParam2(); // Return 'Your Value 2'
	$Obj->getYourParam3(); // Return 'Your Value 3' 

#### PSR-2 compliance

*BaseClass adds support for all API calls that use snake_case. This is great for CodeIgniter libraries that aren't PSR-2 and people still wanting to adhere to their CodeIgniter styleguide.*

	$Obj->get_your_param() // Same as $Obj->getYourParam();
	$Obj->run_some_method() // Same as $Obj->runSomeMethod();
	$Obj->_runSomeMethod() // Same as $Obj->_runSomeMethod();
---

### License

GNU GENERAL PUBLIC LICENSE - Refer to license.txt for details.