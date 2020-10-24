# PhpStorm IDE configuration

[![License](https://img.shields.io/github/license/nicwortel/phpstorm-ide-config.svg)](https://github.com/nicwortel/phpstorm-ide-config/blob/master/LICENSE.txt)

This is my global configuration for [PhpStorm](https://www.jetbrains.com/phpstorm/), my favorite IDE for PHP. I have some custom configuration for code styling, inspections and file templates, and I use
Git to track these configuration files and to synchronize them between workstations. The code style rules are based on PSR-1, PSR-2 and PSR-12 but I also added some things that are not specified in the PSR guidelines.

Feel free to use or fork this repository. Note that I normally stay up-to-date with the latest PhpStorm version, and I cannot guarantee that this works with older versions.

Some configuration is specifically for the [Php Inspections (EA Extended)](https://github.com/kalessil/phpinspectionsea) plugin. I guess this is ignored when you don't have the plugin.

## Code style settings overview

Language          | Standards
------------------|---------
PHP               | [PSR-2](http://www.php-fig.org/psr/psr-2/), [PSR-12](https://github.com/php-fig/fig-standards/blob/master/proposed/extended-coding-style-guide.md)
HTML / Twig       | 4 spaces
CSS / SCSS / LESS | 2 spaces
Yaml              | 2 spaces

## Installation

Before you do this, make sure PhpStorm is not running, or it will overwrite the changed files before shutting down.

Use the following commands to go to the config directory, remove some default directories, and pull the files from my repository:

```bash
# replace with the actual directory name, depending on OS and PhpStorm version (see below).
cd ~/.config/JetBrains/PhpStorm2020.2

# remove the files and folders that are in this repository
rm -r codestyles/
rm -r fileTemplates/
rm -r inspection/

git init
git remote add origin git@github.com:nicwortel/phpstorm-ide-config.git
git fetch
git checkout -t origin/master
```

### Location of the config folder

OS | Syntax | Example
---|---|---
Linux | `~/.config/JetBrains/<product><version>` | `~/.config/JetBrains/PhpStorm2020.2`
macOS | `~/Library/Application Support/JetBrains/<product><version>` | `~/Library/Application Support/JetBrains/PhpStorm2020.2`
Windows | `%APPDATA%\JetBrains\<product><version>` | `C:\Users\JohnS\AppData\Roaming\JetBrains\PhpStorm2020.2`

See [Default IDE directories](https://www.jetbrains.com/help/phpstorm/tuning-the-ide.html#default-dirs) for more information about the location of the configuration directory.

### Subdirectories of the config folder

Directory | Contents
----------|---------
codestyles | Code Style settings (Editor > Code Style)
colors | Colors & Fonts settings (Editor > Colors & Fonts)
fileTemplates | File and Code Templates (Editor > File and Code Templates)
filetypes | File Types (Editor > File Types)
inspection | Inspection profiles (Editor > Inspections)
keymaps | Keyboard shortcuts (Keymap)
templates | Live templates (Editor > Live Templates)
