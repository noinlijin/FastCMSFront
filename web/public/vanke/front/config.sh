#!/bin/bash
dir=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
cd $dir

targetPhp="../../tpl/vk/Front/Layout/Js.php"
namespace="front.config"
distDir="vanke/front/dist/"

sh ../../../../bin/FastCMSFrontTool/fastCmsFrontBuildTool.sh $targetPhp $namespace $distDir