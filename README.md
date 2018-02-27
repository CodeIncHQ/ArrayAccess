# Code Inc.'s ArrayAccess library

## Usage

```php
<?php
use CodeInc\ArrayAccess\ArrayAccessTrait;
use CodeInc\ArrayAccess\AbstractArrayAccess;
use CodeInc\ArrayAccess\ArrayAccess;

/*
 * As a trait
 */
class MyArrayAccesssibleClass1 implements \ArrayAccess {
	use ArrayAccessTrait;
	
	protected function getAccessibleArray():array {
        // returns the accessible array
    }
}

/*
 * As a parent class
 */
class MyArrayAccesssibleClass2 extends AbstractArrayAccess {
	protected function getAccessibleArray():array {
        // returns the accessible array
    }
}

/*
 * As a autonomous object
 */
$arrayAccessible = new ArrayAccess([1 =>  "One", 2 => "Two", 3 => "Three"]);
echo $arrayAccessible[2]; // echoes "Two"
```