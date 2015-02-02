#FastCMSFront 前端构建测试项目

- 目录结构

```
    - bin/FastCMSFrontTool #工具目录
        - compiler.jar #google closure 压缩工具
        - fastCmsFrontBuildTool.sh #构建脚本核心代码
    - tpl #项目输出模板目录
    - web/public #前端文件目录
        - fastcms #fastcms项目的目录
            - config.sh  #fastcms构建项目配置
        - image #图片依赖
        - plugin #js库文件依赖其中的closure是核心google closure工具和代码的存放地
        - vanke #研发项目，下面的目录为子项目每个子项目中都有config.sh 配置项目文件
```