# solrphp playground
minimal symfony application to play around with the features provided by [``solrphp/solarium-bundle``](https://github.com/solrphp/solarium-bundle)

# requirements
the following components need to be available:
- php >=7.4
- git
- [symfony binary](https://symfony.com/download)
- a running [docker](https://www.docker.com/) daemon

# setup
```bash
git clone git@github.com:solrphp/playground.git
cd playground
composer install
composer update solrphp/solarium-bundle --prefer-source # make sure you've got the latest commit
docker-compose up -d
symfony serve -d 
```

### solr
your solr instance should now be available at http://127.0.0.1:8983

the instance is configured with solr's ``demo`` core 

### symfony
your web application should now be available at http://127.0.0.1:8000,
and you should be able to run the various console commands provided by the solarium bundle

# messing about
the solarium bundle's [documentation](https://solrphpsolariumbundle.readthedocs.io/) should provide you some insight into
available commands and services. questions and / or issues can be raised in either this, or the bundle's repo (whichever 
one you think is more applicable).