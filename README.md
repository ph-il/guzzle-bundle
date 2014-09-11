Phil GuzzleBundle
======================

Add a Symfony and PHP QueryAggregator to Guzzle

[![Latest Stable Version](https://poser.pugx.org/phil/guzzle-bundle/v/stable.png)](https://packagist.org/packages/phil/guzzle-bundle)
[![Total Downloads](https://poser.pugx.org/phil/guzzle-bundle/downloads.png)](https://packagist.org/packages/phil/guzzle-bundle)
[![License](https://poser.pugx.org/phil/guzzle-bundle/license.png)](https://packagist.org/packages/phil/guzzle-bundle)

# 1 Installation #

## 1.1 Composer ##


    ```
	"require": {
		....
		"phil/guzzle-bundle": "~0.1"
	},
    ```

or

    ```
    php composer.phar require phil/guzzle-bundle
    ```


## 1.2 Enable the bundle ##

    ```php
	// app/AppKernel.php
	public function registerBundles()
	{
        $bundles = array(
	        // ...
	        new Phil\GuzzleBundle\PhilGeolocationBundle(),
	    );
	}
    ```

# 2 Usage #


# 3 TODO #
There is a lot to do :
* Finish all testing
* More documentations
* Clean Up Code
* Make it a full Guzzle 4 bundle

Fill free to send some corrections and suggestions.


