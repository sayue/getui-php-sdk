<?php
namespace Getui\igetui;

use Getui\protobuf\type\PBEnum;

class ReqServListResult_ReqServHostResultCode extends PBEnum
{
  const successed  = 0;
  const failed  = 1;
  const busy  = 2;
}
