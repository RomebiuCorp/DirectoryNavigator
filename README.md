# DirectoryNavigator
[简体中文](https://github.com/Flen-Plnens/DirectoryNavigator/blob/main/README-CN.md)
|
[English](https://github.com/Flen-Plnens/DirectoryNavigator/blob/main/README.md)
<br>
<br>
![Version](https://img.shields.io/github/v/release/Romebiu-WebDev/DirectoryNavigator?label=Version&style=flat-square&color=#18D518)
<br>
*© 2022 - 2024 Romebiu Corporation All Rights Reserved.*
<br>
*Written by Flen Plnens.*
<br>
<br>
DirectoryNavigator is a lightweight PHP-based directory navigation system that allows you to create a simple and intuitive navigation interface for your directories.

### Features

- List and navigate through directories.
- Automatically generate links to each directory.
- Display custom titles for directories based on an index.txt file.

### Requirements

- PHP (version 5.3.0 or higher, it is recommended to use the latest version of PHP)
- Web server (Apache, Nginx, etc.)

### Installation

1. Download the latest release from the Releases section.
2. Upload the files to your web server.
3. Set the appropriate file permissions for the directories and files (e.g., make sure they are readable by the web server).

### Usage

1. Place the DirectoryNavigator files in the root directory or the directory you want to navigate.
2. Access the DirectoryNavigator in your web browser by visiting the appropriate URL.
3. You will see a list of directories with clickable links. If an index.txt file exists in a directory, its content will be used as the title for the link.

### Customization

- Modify the `config.php` file to adjust the configuration settings.
- Customize the CSS styles in the `style.css` file to match your desired design.

### License

This project is licensed under the [GPL v3.0 License](https://www.gnu.org/licenses/gpl-3.0.txt).

### Contributing

Contributions are welcome! If you have any ideas, suggestions, or bug reports, please open an issue or submit a pull request.

### Acknowledgments

The design inspiration for DirectoryNavigator came from a simple and efficient approach required for a directory navigation system written in PHP.
