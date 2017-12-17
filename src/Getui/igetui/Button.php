<?php
namespace Getui\igetui;

use Getui\protobuf\PBMessage;

class Button extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = 'Getui\protobuf\type\PBString';
    $this->values["1"] = '';
    $this->fields["2"] = 'Getui\protobuf\type\PBInt';
    $this->values["2"] = '';
  }
  function text()
  {
    return $this->_get_value("1");
  }
  function set_text($value)
  {
    return $this->_set_value("1", $value);
  }
  function next()
  {
    return $this->_get_value("2");
  }
  function set_next($value)
  {
    return $this->_set_value("2", $value);
  }
}
