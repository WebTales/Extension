Extension
=========

A Rubedo Extension is structured as a ZF2 module.

This example extension shows how to :

- build a fresh new theme, coming with its css, js and images files
- build a new functionnal block, called myblock, with funny css3 effects
- override an existing block : Menu

You can install this extension using composer :

- copy composer.extension.json.dist to composer.extension.json
- add your extension repository in composer.extension.json

```json
	{
		"name": "rubedo/extensions",
		"require": {
			"webtales/myextension": "dev-v3-dev"
		},
		"require-dev": {},
		"repositories": [
			{
				"type": "vcs",
				"url": "git://github.com/WebTales/Extension.git"
			}
		],
		"minimum-stability": "stable",
		"config": {
			"process-timeout": 600,
			"vendor-dir": "extensions"
		}
	}
```

- run rubedo.bat or ./rubedo.sh depending on your OS

End the installation process by cleaning the Rubedo cache (from the back-office in the supervision module or by manually cleaning cache/config directory)

For more details about building blocks please read the following guide : http://docs.rubedo-project.org/en/homepage/develop/extensions 
