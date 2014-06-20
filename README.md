# Installation

Before you do this, make sure PHPStorm is not running, or it will overwrite your changes.

```bash
# replace .WebIdeXX with the actual name of the folder: .WebIde70 for PHPStorm 7, .WebIde80 for PHPStorm 8.
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
