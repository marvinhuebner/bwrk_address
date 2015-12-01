<?php

$tcaConfiguration = new \BERGWERK\BwrkUtility\Utility\Tca\Configuration();
$tcaConfiguration->setExt(\BERGWERK\BwrkAddress\Bootstrap::$_extKey);
$tcaConfiguration->setModel('tx_bwrkaddress_domain_model_address_entry');
$tcaConfiguration->setLabelField('entry_value');
$tcaConfiguration->setIconFile('EXT:bwrk_address/Resources/Public/Icons/AddressEntry.svg');
$tcaConfiguration->setHideTable(true);
$tcaConfiguration->setLabelUserFunc("BERGWERK\\BwrkAddress\\Utility\\BackendLabel->entityType");

$tca = new \BERGWERK\BwrkUtility\Utility\Tca\Tca();
$tca->init($tcaConfiguration);

$tca->addSelectFieldFunc('entry_miau', "BERGWERK\\BwrkAddress\\Utility\\BackendSelect->entityTypes");
$tca->addInputField('entry_value', 'Value');

return $tca->createTca();