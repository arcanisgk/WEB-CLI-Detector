# WEB-CLI-Detector

Detection of execution by command (Terminal) or web environment.

Acronym: [WEB-CLI-Detector].

Name: WEB-CLI-Detector.

Dependencies: Stand Alone / PHP v7.4.

## What does *[WEB-CLI-Detector]* do?

is a very simple PHP [WEB-CLI-Detector] implementation that allows you to easily validate if the PHP execution is taking place from a web environment or from the execution of commands (terminal)

## Why use *[WEB-CLI-Detector]*?

Developers need the ability to validate in which environment their libraries or applications are running, this helps decision making depending on the needs or requirements, making it easier for all
developers on the same team to use the same validation.

## Help to improve *[WEB-CLI-Detector]*?

if you want to collaborate with the development of the library; You can express your ideas or report any situation related to this in:
https://github.com/arcanisgk/WEB-CLI-Detector/issues

## *[WEB-CLI-Detector]* Configuration:

None necessary.

## *[WEB-CLI-Detector]* Installation:

```cmd
composer require arcanisgk/web-cli-detector
or 
composer require arcanisgk/web-cli-detector --dev
```

## *[WEB-CLI-Detector]* Usage:

### Instance of Class:

```php

use IcarosNet\WebCLIDetector\WebCLIDetector;
require __DIR__.'\..\vendor\autoload.php';
$wc_detector = new WebCLIDetector();

```

### Implementation of Class:

```php

if ($wc_detector->isCLI()) {
    echo 'Running from CLI'.PHP_EOL;
}

if ($wc_detector->isWEB()) {
    echo 'Running from WEB<br>';
}

echo 'Get Raw Environment: '.$wc_detector->getEnvironment();

```

### Example Output:

CLI Test

![Image of Example Output1](https://i.imgur.com/XrP19M7.png)

Web Test

![Image of Example Output2](https://i.imgur.com/gQwYlmO.png)

### Contributors

- (c) 2020 - 2022 Walter Francisco Núñez Cruz
  icarosnet@gmail.com [![Donate](https://img.shields.io/static/v1?label=Donate&message=PayPal.me/wnunez86&color=brightgreen)](https://www.paypal.me/wnunez86/4.99USD)

