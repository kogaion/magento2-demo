./bin/cli chmod u+x bin/magento

docker-compose exec php /usr/local/bin/php ./bin/magento setup:install `
  --db-host=db `
  --db-name=magento `
  --db-user=magento `
  --db-password=magento `
  --base-url=http://magento2.localhost/ `
  --admin-firstname=Admin `
  --admin-lastname=User `
  --admin-email=lucian.toza@gmail.com `
  --admin-user=magento2user `
  --admin-password=magento2 `
  --language=en_US `
  --currency=USD `
  --timezone=Europe/Bucharest `
  --use-rewrites=1

./bin/fixperms

echo "Turning on developer mode.."
./bin/magento deploy:mode:set developer

./bin/magento indexer:reindex

./bin/magento cache:enable
