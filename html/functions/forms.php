<?php
$errors=[];

function old($field, $value = '') {
  return $_REQUEST[$field] ?? $value;
}

function selected($value, $option) {
  return $value == $option ? 'selected' : '';
}

function length($value, $min, $max = NULL) {
  if ($max) {
    return strlen($value) < $min || strlen($value) > $max;
  }
  return strlen($value) < $min;
}

function isEmail($value) {
  return filter_var($value, FILTER_VALIDATE_EMAIL);
}

function match($field1,$field2) {
  return $field1 == $field2;
}

function addError($field, $message) {
    global $errors;
    $errors[$field] = $message;
  }

  function hasError($field) {
    global $errors;
    return isset($errors[$field]);
  }

  function getError($field) {
    global $errors;
    return $errors[$field];
  }

  function isValid() {
    global $errors;
    return empty($errors);
  }

?>
