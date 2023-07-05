# DirectoryNavigator
[简体中文](https://github.com/Flen-Plnens/DirectoryNavigator/blob/main/README-CN.md)
|
[English](https://github.com/Flen-Plnens/DirectoryNavigator/blob/main/README.md)
<br>
DirectoryNavigator 是一个基于 PHP 的轻量级目录导航系统，允许你为目录创建一个简单直观的导航界面。

### 特点

- 列出并浏览目录；  
- 自动为每个目录生成链接；  
- 根据 index.txt 文件显示自定义目录标题。

### 要求

- PHP（版本 5.3.0 及以上，建议使用最新版本的 PHP）  
- Web 服务器（Apache、Nginx 等）

### 安装

1. 在 Releases 内下载最新的发布版本；  
2. 将文件上传到你的 Web 服务器；  
3. 设置正确的文件权限，确保 Web 服务器可以读取这些文件和目录。

### 使用方法

1. 将 DirectoryNavigator 文件放置在根目录或你想要浏览的目录中；  
2. 在浏览器中访问相应的链接，即可进入 DirectoryNavigator；  
3. 你将看到一个带有可点击链接的目录列表。如果目录中存在 index.txt 文件，则会使用该文件的内容作为链接的标题。

### 自定义

- 修改 config.php 文件以调整配置设置；  
- 在 style.css 文件中自定义CSS样式以匹配你所期望的设计。

### 许可证

该项目基于 [GPL v3.0 许可证](https://www.gnu.org/licenses/gpl-3.0.txt)。

### 贡献

欢迎贡献！如果你有任何想法、建议或错误报告，请提出问题或提交拉取请求。

### 致谢

DirectoryNavigator 的设计灵感来自于使用 PHP 编写的目录导航系统所需的简单而高效的方式。
