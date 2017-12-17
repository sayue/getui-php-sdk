<?php
namespace Getui\igetui;

use Getui\protobuf\PBMessage;

class EndBatchTask extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = 'Getui\protobuf\type\PBString';
    $this->values["1"] = '';
    $this->fields["2"] = 'Getui\protobuf\type\PBString';
    $this->values["2"] = '';
  }
  function taskId()
  {
    return $this->_get_value("1");
  }
  function set_taskId($value)
  {
    return $this->_set_value("1", $value);
  }
  function seqId()
  {
    return $this->_get_value("2");
  }
  function set_seqId($value)
  {
    return $this->_set_value("2", $value);
  }
}
