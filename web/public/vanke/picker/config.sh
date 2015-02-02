#!/bin/bash
dir=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
cd $dir

targetPhp="../../tpl/vk/Picker/Layout/Js.php"
namespace="picker.config"
distDir="vanke/picker/dist/"

sh ../../../../bin/FastCMSFrontTool/fastCmsFrontBuildTool.sh $targetPhp $namespace $distDir