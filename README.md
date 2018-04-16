
# CentOS 安装PDFtk:
## 第1步:安装依赖:
    yum install gcc gcc-c++ libXrandr gtk2 libXtst libart_lgpl libgcj
    ###:(如果libgcj 安装失败,使用其他方式源码安装|rpm包安装)

##第2步:安装pdftk:
    wget https://www.pdflabs.com/tools/pdftk-the-pdf-toolkit/pdftk-2.02-1.el6.x86_64.rpm 
    yum install pdftk-2.02-1.el6.x86_64.rpm
    
## 第3步:查看是否安装成功:
    which pdftk


# 安装php-pdftk(*下载代码中已经安装,可忽略此步骤*)

## 第1步:使用composer安装
    composer.json
    {
        "require": {
            "mikehaertl/php-pdftk": "^0.4.3"
        }
    }
## 第2步需要在php-pdftk目录下安装phpunit
    {
        "require-dev": {
            "phpunit/phpunit": "4.5.*"
        }
    }

# 测试

## 执行test.php    
    
## 错误测试:
    输出最终的$pdf对象
    生成失败查看object(mikehaertl\pdftk\Pdf)对象的_error

<<<<<<< HEAD
#MAC安装PDFtk:
##经测试Mac安装pdftk后,pdftk-php无法操作pdf.
=======
# MAC安装PDFtk:
## 经测试Mac安装pdftk后,pdftk-php无法操作pdf.
>>>>>>> 228d7d7a042f58d65cfb3364f2bed946a165647d
    问题描述: 在Mac OS X中创建的PDF:https://github.com/andrewheiss/pdftk-php/wiki/Known-Issues)
