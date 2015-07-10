This is my global configuration for [PhpStorm](https://www.jetbrains.com/phpstorm/). PhpStorm is an IDE for PHP. I have some custom configuration for code styling, inspections and file templates, and I use
Git to track these configuration files and to synchronize them between workstations. The code style rules follow PSR-2 but I also added some things that are not specified in the PSR guidelines.

Feel free to use or fork this repository. Note that I use PhpStorm 9 (Early Access Program). I cannot guarantee compatibility with other versions of PhpStorm.

## Code style settings overview

Language          | Settings
------------------|---------
PHP               | [PSR-2](http://www.php-fig.org/psr/psr-2/), [Symfony Coding Standards](https://symfony.com/doc/current/contributing/code/standards.html)
HTML / Twig       | 4 spaces
CSS / SCSS / LESS | 2 spaces
Yaml              | 2 spaces

# Installation

Before you do this, make sure PhpStorm is not running, or it will overwrite the changed files before shutting down.

Use the following commands to go to the config directory, remove some default directories, and pull the files from my repository:

```bash
# replace with the actual directory name, depending on OS and PhpStorm version (see below).
cd ~/.WebIde80/config

# remove the files and folders that are in this repository
rm -r codestyles/
rm -r fileTemplates/
rm -r inspection/

git init
git remote add origin git@github.com:nicwortel/phpstorm-ide-config.git
git fetch
git checkout -t origin/master
```

## Location of the config folder

OS | Location
---|---------
Windows XP | `C:\Documents and Settings\<User name>\.WebIdeXX\config`
Windows Vista | `C:\Users\<User name>\.WebIdeXX\config`
Linux | `~/.WebIdeXX/config`
OS X | `~/Library/Preferences/WebIdeXX`

Replace 'XX' with the version number of PhpStorm: WebIde80 for PhpStorm 8, WebIde90 for PhpStorm 9, etc. See [Project and IDE settings](https://www.jetbrains.com/phpstorm/help/project-and-ide-settings.html#d739736e149) for more information about the configuration directory structure.

## Subdirectories of the config folder

Directory | Contents
----------|---------
codestyles | Code Style settings (Editor > Code Style)
colors | Colors & Fonts settings (Editor > Colors & Fonts)
fileTemplates | File and Code Templates (Editor > File and Code Templates)
filetypes | File Types (Editor > File Types)
inspection | Inspection profiles (Editor > Inspections)
keymaps | Keyboard shortcuts (Appearance & Behavior > Keymap)
templates | Live templates (Editor > Live Templates)
