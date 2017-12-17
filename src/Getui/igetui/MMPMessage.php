<?php
namespace Getui\igetui;

use Getui\protobuf\PBMessage;
use Getui\protobuf\type\PBBool;

class MMPMessage extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["2"] = 'Getui\igetui\Transparent';
    $this->values["2"] = '';
    $this->fields["3"] = 'Getui\protobuf\type\PBString';
    $this->values["3"] = '';
    $this->fields["4"] = 'Getui\protobuf\type\PBInt';
    $this->values["4"] = '';
    $this->fields["5"] = 'Getui\protobuf\type\PBInt';
    $this->values["5"] = '';
    $this->fields["6"] = 'Getui\protobuf\type\PBInt';
    $this->values["6"] = '';
    $this->fields["7"] = 'Getui\protobuf\type\PBBool';
    $this->values["7"] = '';
    $this->values["7"] = new PBBool();
    $this->values["7"]->value = true;
    $this->fields["8"] = 'Getui\protobuf\type\PBInt';
    $this->values["8"] = '';
    $this->fields["9"] = 'Getui\protobuf\type\PBString';
    $this->values["9"] = '';
    $this->fields["10"] = 'Getui\protobuf\type\PBBool';
    $this->values["10"] = '';
    $this->values["10"] = new PBBool();
    $this->values["10"]->value = true;
  }
  function transparent()
  {
    return $this->_get_value("2");
  }
  function set_transparent($value)
  {
    return $this->_set_value("2", $value);
  }
  function extraData()
  {
    return $this->_get_value("3");
  }
  function set_extraData($value)
  {
    return $this->_set_value("3", $value);
  }
  function msgType()
  {
    return $this->_get_value("4");
  }
  function set_msgType($value)
  {
    return $this->_set_value("4", $value);
  }
  function msgTraceFlag()
  {
    return $this->_get_value("5");
  }
  function set_msgTraceFlag($value)
  {
    return $this->_set_value("5", $value);
  }
  function msgOfflineExpire()
  {
    return $this->_get_value("6");
  }
  function set_msgOfflineExpire($value)
  {
    return $this->_set_value("6", $value);
  }
  function isOffline()
  {
    return $this->_get_value("7");
  }
  function set_isOffline($value)
  {
    return $this->_set_value("7", $value);
  }
  function priority()
  {
    return $this->_get_value("8");
  }
  function set_priority($value)
  {
    return $this->_set_value("8", $value);
  }
  function cdnUrl()
  {
    return $this->_get_value("9");
  }
  function set_cdnUrl($value)
  {
    return $this->_set_value("9", $value);
  }
  function isSync()
  {
    return $this->_get_value("10");
  }
  function set_isSync($value)
  {
    return $this->_set_value("10", $value);
  }
}
