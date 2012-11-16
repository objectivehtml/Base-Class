# Base Class

#### Version 1.2.0 (2012-11-16)

---

### About the Class

This class is intended to be a base in which all your other classes could extend. The idea is to provide a consistent architecture for all your classes with your application. With PSR-2 compliant code becoming the norm, BaseClass also takes care of routing method with "Snake Casing" as well as "Camel Casing". BaseClass also provides a default parameters in the each class' construct to set default parameters. The dynamic setters, getters, and count methods are made public, so you never have to create these things if you are adhering to the default logic.

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

	$Obj->getYourParam1(); // Return 'Your Value 1'
	$Obj->getYourParam2(); // Return 'Your Value 2'
	$Obj->getYourParam3(); // Return 'Your Value 3' 

#### Counts

*Counts are used to retrieve the count a property.*

	$Obj->getTotalParam(); // Returns count($this->param);

#### PSR-2 compliance

*BaseClass adds support for all API calls that use snake_case. This is great for CodeIgniter libraries that aren't PSR-2, and people still wanting to adhere to the CodeIgniter styleguide.*

	$Obj->get_your_param() // Same as $Obj->getYourParam();
	$Obj->set_your_param('test') // Same as $Obj->setYourParam('test');
	$Obj->run_some_method() // Same as $Obj->runSomeMethod();
	$Obj->get_total_param() // Same as $Obj->getTotalParam();
	$Obj->_runSomeMethod() // Same as $Obj->_runSomeMethod();
	
---

### License

GNU GENERAL PUBLIC LICENSE - Refer to license.txt for details.