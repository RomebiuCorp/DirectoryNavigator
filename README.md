# DirectoryNavigator

DirectoryNavigator 是一个基于 PHP 的轻量级目录导航系统，允许你为目录创建一个简单直观的导航界面。

DirectoryNavigator is a lightweight PHP-based directory navigation system that allows you to create a simple and intuitive navigation interface for your directories.

### 特点<br>Features

- 列出并浏览目录和子目录；<br>List and navigate through directories and subdirectories.
- 自动为每个目录生成链接；<br>Automatically generate links to each directory.
- 根据 index.txt 文件显示自定义目录标题。<br>Display custom titles for directories based on an index.txt file.

### 要求

#### Requirements

- PHP（版本 5.3.0 及以上）<br>PHP (version 5.3.0 or higher)
- Web 服务器（Apache、Nginx 等）<br>Web server (Apache, Nginx, etc.)

### 安装

#### Installation

1. 克隆仓库或下载 ZIP 文件；<br>Clone the repository or download the ZIP file.
2. 将文件上传到你的 Web 服务器；<br>Upload the files to your web server.
3. 设置正确的文件权限，确保 Web 服务器可以读取这些文件和目录。<br>Set the appropriate file permissions for the directories and files (e.g., make sure they are readable by the web server).

### 使用方法

#### Usage

1. 将 DirectoryNavigator 文件放置在根目录或你想要浏览的目录中；<br>Place the DirectoryNavigator files in the root directory or the directory you want to navigate.
2. 在浏览器中访问相应的链接，即可进入 DirectoryNavigator；<br>Access the DirectoryNavigator in your web browser by visiting the appropriate URL.
3. 你将看到一个带有可点击链接的目录列表。如果目录中存在 index.txt 文件，则会使用该文件的内容作为链接的标题。<br>You will see a list of directories with clickable links. If an index.txt file exists in a directory, its content will be used as the title for the link.

### 自定义

#### Customization

- 修改 config.php 文件以调整配置设置；<br>Modify the `config.php` file to adjust the configuration settings.
- 在 style.css 文件中自定义CSS样式以匹配你所期望的设计。<br>Customize the CSS styles in the style.css file to match your desired design.

### 许可证

#### License

该项目基于 [GPL v3.0 许可证](https://www.gnu.org/licenses/gpl-3.0.txt)。

This project is licensed under the [GPL v3.0 License](https://www.gnu.org/licenses/gpl-3.0.txt).

### 贡献

#### Contributing

欢迎贡献！如果你有任何想法、建议或错误报告，请提出问题或提交拉取请求。

Contributions are welcome! If you have any ideas, suggestions, or bug reports, please open an issue or submit a pull request.

### 致谢

#### Acknowledgments

DirectoryNavigator 的灵感来自于在 PHP 中浏览目录和子目录的简单高效的需求。

DirectoryNavigator was inspired by the need for a simple and efficient way to navigate directories and subdirectories in PHP.
