<?php

//
// This is only a SKELETON file for the "Hello World" exercise.
// It's been provided as a convenience to get you started writing code faster.
//

function HelloWorld($name = "")
{
  if($name == "") {
    return "Hello, World!";
  }
  else {
    return "Hello, " . $name . "!";
  }
}
//HelloWorld("Alice!");
