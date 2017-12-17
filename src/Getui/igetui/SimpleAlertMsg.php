<?php
namespace Getui\igetui;

use Getui\igetui\ApnMsg;

class SimpleAlertMsg implements ApnMsg{
    var $alertMsg;

    public function get_alertMsg() {
        return $this->alertMsg;
    }
}
