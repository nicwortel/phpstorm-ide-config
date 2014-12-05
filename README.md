Note: I use PhpStorm 8. This might work with other versions as well, but I cannot guarantee.

# Installation

Before you do this, make sure PhpStorm is not running, or it will overwrite your changes.

Use the following commands to go to the config directory, remove some default directories, and pull the files from my repository:

```bash
# replace .WebIdeXX with the actual name of the folder: .WebIde70 for PhpStorm 7, .WebIde80 for PhpStorm 8.
cd ~/.WebIdeXX/config

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
Mac OS | `~/Library/Preferences/.WebIdeXX`

See [Project and IDE settings](http://www.jetbrains.com/phpstorm/webhelp/project-and-ide-settings.html#d610183e276) for more information.

## Subdirectories of the config folder

Directory | Contents
----------|---------
codestyles | Code Style settings (Project Settings > Code Style)
colors | Colors & Fonts settings (IDE Settings > Editor > Colors & Fonts)
fileTemplates | File and Code Templates (IDE Settings > File and Code Templates)
filetypes | File Types (IDE Settings > File Types)
inspection | Inspection profiles (Project Settings > Inspections)
keymaps | Keyboard shortcuts (IDE Settings > Keymap)
templates | Live templates (IDE Settings > Live Templates)
