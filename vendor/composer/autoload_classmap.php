<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'OAuth\\Common\\AutoLoader' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/AutoLoader.php',
    'OAuth\\Common\\Consumer\\Credentials' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Consumer/Credentials.php',
    'OAuth\\Common\\Consumer\\CredentialsInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Consumer/CredentialsInterface.php',
    'OAuth\\Common\\Exception\\Exception' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Exception/Exception.php',
    'OAuth\\Common\\Http\\Client\\AbstractClient' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Http/Client/AbstractClient.php',
    'OAuth\\Common\\Http\\Client\\ClientInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Http/Client/ClientInterface.php',
    'OAuth\\Common\\Http\\Client\\CurlClient' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Http/Client/CurlClient.php',
    'OAuth\\Common\\Http\\Client\\Stream2Client' => $vendorDir . '/varya/starbonus-widget-api/src/OAuth/Common/Http/Client/Stream2Client.php',
    'OAuth\\Common\\Http\\Client\\StreamClient' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Http/Client/StreamClient.php',
    'OAuth\\Common\\Http\\Exception\\TokenResponseException' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Http/Exception/TokenResponseException.php',
    'OAuth\\Common\\Http\\Uri\\Uri' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Http/Uri/Uri.php',
    'OAuth\\Common\\Http\\Uri\\UriFactory' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Http/Uri/UriFactory.php',
    'OAuth\\Common\\Http\\Uri\\UriFactoryInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Http/Uri/UriFactoryInterface.php',
    'OAuth\\Common\\Http\\Uri\\UriInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Http/Uri/UriInterface.php',
    'OAuth\\Common\\Service\\AbstractService' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Service/AbstractService.php',
    'OAuth\\Common\\Service\\ServiceInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Service/ServiceInterface.php',
    'OAuth\\Common\\Storage\\Exception\\AuthorizationStateNotFoundException' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Storage/Exception/AuthorizationStateNotFoundException.php',
    'OAuth\\Common\\Storage\\Exception\\StorageException' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Storage/Exception/StorageException.php',
    'OAuth\\Common\\Storage\\Exception\\TokenNotFoundException' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Storage/Exception/TokenNotFoundException.php',
    'OAuth\\Common\\Storage\\File' => $vendorDir . '/varya/starbonus-widget-api/src/OAuth/Common/Storage/File.php',
    'OAuth\\Common\\Storage\\Memory' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Storage/Memory.php',
    'OAuth\\Common\\Storage\\Redis' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Storage/Redis.php',
    'OAuth\\Common\\Storage\\Session' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Storage/Session.php',
    'OAuth\\Common\\Storage\\SymfonySession' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Storage/SymfonySession.php',
    'OAuth\\Common\\Storage\\TokenStorageInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Storage/TokenStorageInterface.php',
    'OAuth\\Common\\Token\\AbstractToken' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Token/AbstractToken.php',
    'OAuth\\Common\\Token\\Exception\\ExpiredTokenException' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Token/Exception/ExpiredTokenException.php',
    'OAuth\\Common\\Token\\TokenInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/Common/Token/TokenInterface.php',
    'OAuth\\OAuth1\\Service\\AbstractService' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/AbstractService.php',
    'OAuth\\OAuth1\\Service\\BitBucket' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/BitBucket.php',
    'OAuth\\OAuth1\\Service\\Etsy' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/Etsy.php',
    'OAuth\\OAuth1\\Service\\FitBit' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/FitBit.php',
    'OAuth\\OAuth1\\Service\\Flickr' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/Flickr.php',
    'OAuth\\OAuth1\\Service\\ScoopIt' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/ScoopIt.php',
    'OAuth\\OAuth1\\Service\\ServiceInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/ServiceInterface.php',
    'OAuth\\OAuth1\\Service\\Tumblr' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/Tumblr.php',
    'OAuth\\OAuth1\\Service\\Twitter' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/Twitter.php',
    'OAuth\\OAuth1\\Service\\Xing' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/Xing.php',
    'OAuth\\OAuth1\\Service\\Yahoo' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Service/Yahoo.php',
    'OAuth\\OAuth1\\Signature\\Exception\\UnsupportedHashAlgorithmException' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Signature/Exception/UnsupportedHashAlgorithmException.php',
    'OAuth\\OAuth1\\Signature\\Signature' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Signature/Signature.php',
    'OAuth\\OAuth1\\Signature\\SignatureInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Signature/SignatureInterface.php',
    'OAuth\\OAuth1\\Token\\StdOAuth1Token' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Token/StdOAuth1Token.php',
    'OAuth\\OAuth1\\Token\\TokenInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth1/Token/TokenInterface.php',
    'OAuth\\OAuth2\\Service\\AbstractService' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/AbstractService.php',
    'OAuth\\OAuth2\\Service\\Amazon' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Amazon.php',
    'OAuth\\OAuth2\\Service\\Bitly' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Bitly.php',
    'OAuth\\OAuth2\\Service\\Box' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Box.php',
    'OAuth\\OAuth2\\Service\\Buffer' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Buffer.php',
    'OAuth\\OAuth2\\Service\\Dailymotion' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Dailymotion.php',
    'OAuth\\OAuth2\\Service\\Dropbox' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Dropbox.php',
    'OAuth\\OAuth2\\Service\\Exception\\InvalidAccessTypeException' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Exception/InvalidAccessTypeException.php',
    'OAuth\\OAuth2\\Service\\Exception\\InvalidAuthorizationStateException' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Exception/InvalidAuthorizationStateException.php',
    'OAuth\\OAuth2\\Service\\Exception\\InvalidScopeException' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Exception/InvalidScopeException.php',
    'OAuth\\OAuth2\\Service\\Exception\\MissingRefreshTokenException' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Exception/MissingRefreshTokenException.php',
    'OAuth\\OAuth2\\Service\\Facebook' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Facebook.php',
    'OAuth\\OAuth2\\Service\\Foursquare' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Foursquare.php',
    'OAuth\\OAuth2\\Service\\GitHub' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/GitHub.php',
    'OAuth\\OAuth2\\Service\\Google' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Google.php',
    'OAuth\\OAuth2\\Service\\Harvest' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Harvest.php',
    'OAuth\\OAuth2\\Service\\Heroku' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Heroku.php',
    'OAuth\\OAuth2\\Service\\Instagram' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Instagram.php',
    'OAuth\\OAuth2\\Service\\Linkedin' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Linkedin.php',
    'OAuth\\OAuth2\\Service\\Mailchimp' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Mailchimp.php',
    'OAuth\\OAuth2\\Service\\Microsoft' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Microsoft.php',
    'OAuth\\OAuth2\\Service\\Paypal' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Paypal.php',
    'OAuth\\OAuth2\\Service\\Pocket' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Pocket.php',
    'OAuth\\OAuth2\\Service\\Reddit' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Reddit.php',
    'OAuth\\OAuth2\\Service\\RunKeeper' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/RunKeeper.php',
    'OAuth\\OAuth2\\Service\\SalesforceService' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Salesforce.php',
    'OAuth\\OAuth2\\Service\\ServiceInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/ServiceInterface.php',
    'OAuth\\OAuth2\\Service\\SoundCloud' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/SoundCloud.php',
    'OAuth\\OAuth2\\Service\\Starbonus' => $vendorDir . '/varya/starbonus-widget-api/src/OAuth/OAuth2/Service/Starbonus.php',
    'OAuth\\OAuth2\\Service\\Ustream' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Ustream.php',
    'OAuth\\OAuth2\\Service\\Vkontakte' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Vkontakte.php',
    'OAuth\\OAuth2\\Service\\Yammer' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Service/Yammer.php',
    'OAuth\\OAuth2\\Token\\StdOAuth2Token' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Token/StdOAuth2Token.php',
    'OAuth\\OAuth2\\Token\\TokenInterface' => $vendorDir . '/lusitanian/oauth/src/OAuth/OAuth2/Token/TokenInterface.php',
    'OAuth\\ServiceFactory' => $vendorDir . '/lusitanian/oauth/src/OAuth/ServiceFactory.php',
    'Starbonus\\Api\\Api' => $vendorDir . '/varya/starbonus-widget-api/src/Starbonus/Api/Api.php',
    'Starbonus\\Api\\Entity\\TransactionCashback' => $vendorDir . '/varya/starbonus-widget-api/src/Starbonus/Api/Entity/TransactionCashback.php',
    'Starbonus\\Api\\Hydrator\\TransactionCashbackMapper' => $vendorDir . '/varya/starbonus-widget-api/src/Starbonus/Api/Hydrator/TransactionCashbackMapper.php',
    'Starbonus\\Api\\Service\\AbstractService' => $vendorDir . '/varya/starbonus-widget-api/src/Starbonus/Api/Service/AbstractService.php',
    'Starbonus\\Api\\Service\\ServiceInterface' => $vendorDir . '/varya/starbonus-widget-api/src/Starbonus/Api/Service/ServiceInterface.php',
    'Starbonus\\Api\\Service\\TransactionCashback' => $vendorDir . '/varya/starbonus-widget-api/src/Starbonus/Api/Service/TransactionCashback.php',
    'Starbonus\\Api\\Type\\AbstractType' => $vendorDir . '/varya/starbonus-widget-api/src/Starbonus/Api/Type/AbstractType.php',
    'Starbonus\\Api\\Type\\TransactionCashbackState' => $vendorDir . '/varya/starbonus-widget-api/src/Starbonus/Api/Type/TransactionCashbackState.php',
    'Starbonus\\Api\\Type\\TypeInterface' => $vendorDir . '/varya/starbonus-widget-api/src/Starbonus/Api/Type/TypeInterface.php',
    'Zend\\Stdlib\\AbstractOptions' => $vendorDir . '/zendframework/zend-stdlib/src/AbstractOptions.php',
    'Zend\\Stdlib\\ArrayObject' => $vendorDir . '/zendframework/zend-stdlib/src/ArrayObject.php',
    'Zend\\Stdlib\\ArraySerializableInterface' => $vendorDir . '/zendframework/zend-stdlib/src/ArraySerializableInterface.php',
    'Zend\\Stdlib\\ArrayStack' => $vendorDir . '/zendframework/zend-stdlib/src/ArrayStack.php',
    'Zend\\Stdlib\\ArrayUtils' => $vendorDir . '/zendframework/zend-stdlib/src/ArrayUtils.php',
    'Zend\\Stdlib\\ArrayUtils\\MergeRemoveKey' => $vendorDir . '/zendframework/zend-stdlib/src/ArrayUtils/MergeRemoveKey.php',
    'Zend\\Stdlib\\ArrayUtils\\MergeReplaceKey' => $vendorDir . '/zendframework/zend-stdlib/src/ArrayUtils/MergeReplaceKey.php',
    'Zend\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface' => $vendorDir . '/zendframework/zend-stdlib/src/ArrayUtils/MergeReplaceKeyInterface.php',
    'Zend\\Stdlib\\CallbackHandler' => $vendorDir . '/zendframework/zend-stdlib/src/CallbackHandler.php',
    'Zend\\Stdlib\\DateTime' => $vendorDir . '/zendframework/zend-stdlib/src/DateTime.php',
    'Zend\\Stdlib\\DispatchableInterface' => $vendorDir . '/zendframework/zend-stdlib/src/DispatchableInterface.php',
    'Zend\\Stdlib\\ErrorHandler' => $vendorDir . '/zendframework/zend-stdlib/src/ErrorHandler.php',
    'Zend\\Stdlib\\Exception\\BadMethodCallException' => $vendorDir . '/zendframework/zend-stdlib/src/Exception/BadMethodCallException.php',
    'Zend\\Stdlib\\Exception\\DomainException' => $vendorDir . '/zendframework/zend-stdlib/src/Exception/DomainException.php',
    'Zend\\Stdlib\\Exception\\ExceptionInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Exception/ExceptionInterface.php',
    'Zend\\Stdlib\\Exception\\ExtensionNotLoadedException' => $vendorDir . '/zendframework/zend-stdlib/src/Exception/ExtensionNotLoadedException.php',
    'Zend\\Stdlib\\Exception\\InvalidArgumentException' => $vendorDir . '/zendframework/zend-stdlib/src/Exception/InvalidArgumentException.php',
    'Zend\\Stdlib\\Exception\\InvalidCallbackException' => $vendorDir . '/zendframework/zend-stdlib/src/Exception/InvalidCallbackException.php',
    'Zend\\Stdlib\\Exception\\LogicException' => $vendorDir . '/zendframework/zend-stdlib/src/Exception/LogicException.php',
    'Zend\\Stdlib\\Exception\\RuntimeException' => $vendorDir . '/zendframework/zend-stdlib/src/Exception/RuntimeException.php',
    'Zend\\Stdlib\\Extractor\\ExtractionInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Extractor/ExtractionInterface.php',
    'Zend\\Stdlib\\Glob' => $vendorDir . '/zendframework/zend-stdlib/src/Glob.php',
    'Zend\\Stdlib\\Guard\\AllGuardsTrait' => $vendorDir . '/zendframework/zend-stdlib/src/Guard/AllGuardsTrait.php',
    'Zend\\Stdlib\\Guard\\ArrayOrTraversableGuardTrait' => $vendorDir . '/zendframework/zend-stdlib/src/Guard/ArrayOrTraversableGuardTrait.php',
    'Zend\\Stdlib\\Guard\\EmptyGuardTrait' => $vendorDir . '/zendframework/zend-stdlib/src/Guard/EmptyGuardTrait.php',
    'Zend\\Stdlib\\Guard\\GuardUtils' => $vendorDir . '/zendframework/zend-stdlib/src/Guard/GuardUtils.php',
    'Zend\\Stdlib\\Guard\\NullGuardTrait' => $vendorDir . '/zendframework/zend-stdlib/src/Guard/NullGuardTrait.php',
    'Zend\\Stdlib\\Hydrator\\AbstractHydrator' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/AbstractHydrator.php',
    'Zend\\Stdlib\\Hydrator\\Aggregate\\AggregateHydrator' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Aggregate/AggregateHydrator.php',
    'Zend\\Stdlib\\Hydrator\\Aggregate\\ExtractEvent' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Aggregate/ExtractEvent.php',
    'Zend\\Stdlib\\Hydrator\\Aggregate\\HydrateEvent' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Aggregate/HydrateEvent.php',
    'Zend\\Stdlib\\Hydrator\\Aggregate\\HydratorListener' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Aggregate/HydratorListener.php',
    'Zend\\Stdlib\\Hydrator\\ArraySerializable' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/ArraySerializable.php',
    'Zend\\Stdlib\\Hydrator\\ClassMethods' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/ClassMethods.php',
    'Zend\\Stdlib\\Hydrator\\DelegatingHydrator' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/DelegatingHydrator.php',
    'Zend\\Stdlib\\Hydrator\\DelegatingHydratorFactory' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/DelegatingHydratorFactory.php',
    'Zend\\Stdlib\\Hydrator\\FilterEnabledInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/FilterEnabledInterface.php',
    'Zend\\Stdlib\\Hydrator\\Filter\\FilterComposite' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Filter/FilterComposite.php',
    'Zend\\Stdlib\\Hydrator\\Filter\\FilterInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Filter/FilterInterface.php',
    'Zend\\Stdlib\\Hydrator\\Filter\\FilterProviderInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Filter/FilterProviderInterface.php',
    'Zend\\Stdlib\\Hydrator\\Filter\\GetFilter' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Filter/GetFilter.php',
    'Zend\\Stdlib\\Hydrator\\Filter\\HasFilter' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Filter/HasFilter.php',
    'Zend\\Stdlib\\Hydrator\\Filter\\IsFilter' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Filter/IsFilter.php',
    'Zend\\Stdlib\\Hydrator\\Filter\\MethodMatchFilter' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Filter/MethodMatchFilter.php',
    'Zend\\Stdlib\\Hydrator\\Filter\\NumberOfParameterFilter' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Filter/NumberOfParameterFilter.php',
    'Zend\\Stdlib\\Hydrator\\Filter\\OptionalParametersFilter' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Filter/OptionalParametersFilter.php',
    'Zend\\Stdlib\\Hydrator\\HydrationInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/HydrationInterface.php',
    'Zend\\Stdlib\\Hydrator\\HydratorAwareInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/HydratorAwareInterface.php',
    'Zend\\Stdlib\\Hydrator\\HydratorAwareTrait' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/HydratorAwareTrait.php',
    'Zend\\Stdlib\\Hydrator\\HydratorInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/HydratorInterface.php',
    'Zend\\Stdlib\\Hydrator\\HydratorOptionsInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/HydratorOptionsInterface.php',
    'Zend\\Stdlib\\Hydrator\\HydratorPluginManager' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/HydratorPluginManager.php',
    'Zend\\Stdlib\\Hydrator\\NamingStrategyEnabledInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/NamingStrategyEnabledInterface.php',
    'Zend\\Stdlib\\Hydrator\\NamingStrategy\\ArrayMapNamingStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/NamingStrategy/ArrayMapNamingStrategy.php',
    'Zend\\Stdlib\\Hydrator\\NamingStrategy\\CompositeNamingStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/NamingStrategy/CompositeNamingStrategy.php',
    'Zend\\Stdlib\\Hydrator\\NamingStrategy\\IdentityNamingStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/NamingStrategy/IdentityNamingStrategy.php',
    'Zend\\Stdlib\\Hydrator\\NamingStrategy\\MapNamingStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/NamingStrategy/MapNamingStrategy.php',
    'Zend\\Stdlib\\Hydrator\\NamingStrategy\\NamingStrategyInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/NamingStrategy/NamingStrategyInterface.php',
    'Zend\\Stdlib\\Hydrator\\NamingStrategy\\UnderscoreNamingStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/NamingStrategy/UnderscoreNamingStrategy.php',
    'Zend\\Stdlib\\Hydrator\\ObjectProperty' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/ObjectProperty.php',
    'Zend\\Stdlib\\Hydrator\\Reflection' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Reflection.php',
    'Zend\\Stdlib\\Hydrator\\StrategyEnabledInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/StrategyEnabledInterface.php',
    'Zend\\Stdlib\\Hydrator\\Strategy\\BooleanStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Strategy/BooleanStrategy.php',
    'Zend\\Stdlib\\Hydrator\\Strategy\\ClosureStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Strategy/ClosureStrategy.php',
    'Zend\\Stdlib\\Hydrator\\Strategy\\DateTimeFormatterStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Strategy/DateTimeFormatterStrategy.php',
    'Zend\\Stdlib\\Hydrator\\Strategy\\DefaultStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Strategy/DefaultStrategy.php',
    'Zend\\Stdlib\\Hydrator\\Strategy\\Exception\\ExceptionInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Strategy/Exception/ExceptionInterface.php',
    'Zend\\Stdlib\\Hydrator\\Strategy\\Exception\\InvalidArgumentException' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Strategy/Exception/InvalidArgumentException.php',
    'Zend\\Stdlib\\Hydrator\\Strategy\\ExplodeStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Strategy/ExplodeStrategy.php',
    'Zend\\Stdlib\\Hydrator\\Strategy\\SerializableStrategy' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Strategy/SerializableStrategy.php',
    'Zend\\Stdlib\\Hydrator\\Strategy\\StrategyChain' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Strategy/StrategyChain.php',
    'Zend\\Stdlib\\Hydrator\\Strategy\\StrategyInterface' => $vendorDir . '/zendframework/zend-stdlib/src/Hydrator/Strategy/StrategyInterface.php',
    'Zend\\Stdlib\\InitializableInterface' => $vendorDir . '/zendframework/zend-stdlib/src/InitializableInterface.php',
    'Zend\\Stdlib\\JsonSerializable' => $vendorDir . '/zendframework/zend-stdlib/src/JsonSerializable.php',
    'Zend\\Stdlib\\JsonSerializable\\PhpLegacyCompatibility' => $vendorDir . '/zendframework/zend-stdlib/src/JsonSerializable/PhpLegacyCompatibility.php',
    'Zend\\Stdlib\\Message' => $vendorDir . '/zendframework/zend-stdlib/src/Message.php',
    'Zend\\Stdlib\\MessageInterface' => $vendorDir . '/zendframework/zend-stdlib/src/MessageInterface.php',
    'Zend\\Stdlib\\ParameterObjectInterface' => $vendorDir . '/zendframework/zend-stdlib/src/ParameterObjectInterface.php',
    'Zend\\Stdlib\\Parameters' => $vendorDir . '/zendframework/zend-stdlib/src/Parameters.php',
    'Zend\\Stdlib\\ParametersInterface' => $vendorDir . '/zendframework/zend-stdlib/src/ParametersInterface.php',
    'Zend\\Stdlib\\PriorityList' => $vendorDir . '/zendframework/zend-stdlib/src/PriorityList.php',
    'Zend\\Stdlib\\PriorityQueue' => $vendorDir . '/zendframework/zend-stdlib/src/PriorityQueue.php',
    'Zend\\Stdlib\\Request' => $vendorDir . '/zendframework/zend-stdlib/src/Request.php',
    'Zend\\Stdlib\\RequestInterface' => $vendorDir . '/zendframework/zend-stdlib/src/RequestInterface.php',
    'Zend\\Stdlib\\Response' => $vendorDir . '/zendframework/zend-stdlib/src/Response.php',
    'Zend\\Stdlib\\ResponseInterface' => $vendorDir . '/zendframework/zend-stdlib/src/ResponseInterface.php',
    'Zend\\Stdlib\\SplPriorityQueue' => $vendorDir . '/zendframework/zend-stdlib/src/SplPriorityQueue.php',
    'Zend\\Stdlib\\SplQueue' => $vendorDir . '/zendframework/zend-stdlib/src/SplQueue.php',
    'Zend\\Stdlib\\SplStack' => $vendorDir . '/zendframework/zend-stdlib/src/SplStack.php',
    'Zend\\Stdlib\\StringUtils' => $vendorDir . '/zendframework/zend-stdlib/src/StringUtils.php',
    'Zend\\Stdlib\\StringWrapper\\AbstractStringWrapper' => $vendorDir . '/zendframework/zend-stdlib/src/StringWrapper/AbstractStringWrapper.php',
    'Zend\\Stdlib\\StringWrapper\\Iconv' => $vendorDir . '/zendframework/zend-stdlib/src/StringWrapper/Iconv.php',
    'Zend\\Stdlib\\StringWrapper\\Intl' => $vendorDir . '/zendframework/zend-stdlib/src/StringWrapper/Intl.php',
    'Zend\\Stdlib\\StringWrapper\\MbString' => $vendorDir . '/zendframework/zend-stdlib/src/StringWrapper/MbString.php',
    'Zend\\Stdlib\\StringWrapper\\Native' => $vendorDir . '/zendframework/zend-stdlib/src/StringWrapper/Native.php',
    'Zend\\Stdlib\\StringWrapper\\StringWrapperInterface' => $vendorDir . '/zendframework/zend-stdlib/src/StringWrapper/StringWrapperInterface.php',
);