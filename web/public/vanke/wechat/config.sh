#!/bin/bash
dir=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
cd $dir

targetPhp="../../tpl/vk/Wechat/Layout/Js.php"
namespace="wechat.config"
distDir="vanke/wechat/dist/"

sh ../../../../bin/FastCMSFrontTool/fastCmsFrontBuildTool.sh $targetPhp $namespace $distDir