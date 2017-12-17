<?php
namespace Getui\igetui;

use Getui\protobuf\PBMessage;

class SingleBatchItem extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = 'Getui\protobuf\type\PBInt';
    $this->values["1"] = '';
    $this->fields["2"] = 'Getui\protobuf\type\PBString';
    $this->values["2"] = '';
  }
  function seqId()
  {
    return $this->_get_value("1");
  }
  function set_seqId($value)
  {
    return $this->_set_value("1", $value);
  }
  function data()
  {
    return $this->_get_value("2");
  }
  function set_data($value)
  {
    return $this->_set_value("2", $value);
  }
}
