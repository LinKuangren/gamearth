# Wordpress Starter

## Installation

Dans le dossier `/wp-content/themes/` :

```
git clone git_link nomdutheme
yarn
```

Il faut renommer toutes les occurences à gamearth par le nom du nouveau thème :

```sh
project_name=${PWD##*/}
project_namespace=$(echo $project_name | sed -r 's/(^|-)([a-z])/\U\2/g')

find . -type f -name "*.php" -print0 | xargs -0 sed -i -e "s/gamearth/${project_name}/g"
find . -type f -name "*.css" -print0 | xargs -0 sed -i -e "s/gamearth/${project_name}/g"
find . -type f -name "*.json" -print0 | xargs -0 sed -i -e "s/gamearth/${project_name}/g"
find . -type f -name "*.php" -print0 | xargs -0 sed -i -e "s/Wordpress\\\\Starter/${project_namespace}/g"
```

## Développement

### Commandes

| Commande                   |                                                                                                |
|----------------------------|------------------------------------------------------------------------------------------------|
| `npm run start`            | Compile les assets quand des changements sur les fichiers sont fait                            |
| `npm run build`            | Compile et optimize the fichiers                                                               |
| `npm run sprite`           | Génére le sprite svg avec le fichier sass associé                                              |
