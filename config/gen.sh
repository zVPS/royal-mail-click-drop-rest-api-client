# Clone and build swagger-codegen standalone jar

git clone https://github.com/swagger-api/swagger-codegen.git
cd swagger-codegen
JAVA_HOME=/usr/lib/jvm/java-8-openjdk mvn clean package
cp modules/swagger-codegen-cli/target/swagger-codegen-cli.jar ~/Software/

# Regenerate to new folder

/usr/lib/jvm/java-8-openjdk/bin/java -jar ~/Software/swagger-codegen-cli.jar generate \ 
-i royal-mail-click-drop-rest-api-client/config/click-and-drop-api-v1.yaml \ 
-l php -c royal-mail-click-drop-rest-api-client/config/config.json \ 
--type-mappings BigDecimal=float \ 
-o royal-mail-click-drop-rest-api-client-regen

# Copy results in and fix up any manual changes to namespaces/urls etc

cp -r royal-mail-click-drop-rest-api-client-regen/SwaggerClient-php/. royal-mail-click-drop-rest-api-client/


models to Models
RoyalMail\ClickAndDrop\Rest\Api\RoyalMail\ClickAndDrop\Rest\Api to RoyalMail\ClickAndDrop\Rest\Api
All URIs are relative to *https://localhost/api/v1* to https://api.parcel.royalmail.com/api/v1
Revert changes in composer.json as needed