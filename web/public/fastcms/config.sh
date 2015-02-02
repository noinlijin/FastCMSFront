#!/bin/bash
dir=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
cd $dir

cd "../../../bin/FastCMSFrontTool/"
targetPhp="../../tpl/FastCMS/Admin/Layout/Js.php"
namespace="fastcms.config"
distDir="fastcms/dist/"

sh fastCmsFrontBuildTool.sh $targetPhp $namespace $distDir