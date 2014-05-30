Installation
------------

Before you do this, make sure PHPStorm is not running, or it will overwrite your changes.

```bash
# replace .WebIdeXX with the actual name of the folder - .WebIde70 for PHPStorm 7.
cd ~/.WebIdeXX/config

# remove the files and folder that are in this repository
rm -r codestyles/
rm -r fileTemplates/

git init
git remote add origin git@github.com:nicwortel/phpstorm-ide-config.git
git fetch
git checkout -t origin/master
```
