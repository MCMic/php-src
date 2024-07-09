--TEST--
Pretty printing for arrow functions
--INI--
zend.assertions=1
assert.exception=0
--FILE--
<?php

// TODO We're missing parentheses for the direct call
assert((fn() => false)());
assert((fn&(int... $args): ?bool => $args[0])(false));

?>
--EXPECTF--
Warning: assert(): assert(fn() => false()) failed in %s on line %d

Warning: assert(): assert(fn&(int ...$args): ?bool => $args[0](false)) failed in %s on line %d
