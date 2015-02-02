#!/bin/bash

dir=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
echo $dir
cd $dir

#tool
tool="../../web/public/plugin/closure/closure/bin/build/closurebuilder.py"
root="../../web/public/"

#phpfile
#targetPhp="../../tpl/vk/Front/Layout/Js.php"
#namespace="front.config"
#distDir=$root"vanke/front/dist/"
targetPhp=$1
namespace=$2
distDir=$root$3

echo '请选择是设置为上线模式还是开发模式:'
options=("上线模式" "开发模式")
select opt in "${options[@]}"
do
    echo > $targetPhp
    case $opt in
        "上线模式")
          minjsfile=$distDir"all.min.js"
          find $distDir -name '*.js' -delete
          python $tool --root=$root --namespace=$namespace --output_mode=compiled --compiler_jar=compiler.jar > $minjsfile
          if [ "$(uname)" == "Darwin" ]; then
            md5=$(md5 ${minjsfile} | awk '{ print $4 }')".js"
          elif [ "$(expr substr $(uname -s) 1 5)" == "Linux" ]; then
            md5=$(md5sum ${minjsfile} | awk '{ print $1 }')".js"
          else
            echo "不支持的平台"
          fi
          echo $md5
          mv ${minjsfile} $distDir$md5
          echo '<script src="'${distDir#*/web}''$md5'"></script>' > $targetPhp
          break
          ;;
        "开发模式")
            #输出依赖文件到临时文件
            python $tool --root=$root --namespace=$namespace > log

            log="log"
            for line in `cat $log`
            do
                echo $line
                echo '<script src="'${line#*/web}'"></script>' >> $targetPhp  #向jsphp文件写入依赖文件标签
            done
            rm $log #删除临时文件
          break
          ;;
        *) echo invalid option;;
    esac

done

echo "设置完成"