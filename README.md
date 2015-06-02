# tweeps

> Display Tweeps you've met.

*You need to run Composer!*

## Set Up

In order to grab data from Twitter (eg avatar pictures), Twitter requires you to create an **application** at [apps.twitter.com](https://apps.twitter.com/). You'll have to do the following steps:

1. Create an app (name it whatever you want).
2. Change the __Access Level__ to "Read and write".
3. Create yourself an Access Token in the "*Keys and Access Tokens*"-tab. You will find that button on the bottom of the page.
4. Then open `data/Codebird.WakeUp.php` and change the following code:

```
"twitter" => [
	"app" => [
		"key" => "YOUR_APP_KEY",
		"secret" => "YOUR_APP_SECRET"
	],
	"user" => [
		"token" => "YOUR_USER_TOKEN",
		"secret" => "YOUR_USER_SECRET"
	]
]
```

## Used Libraries

* Straussn's JSON-Databaseclass