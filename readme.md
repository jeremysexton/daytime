#Daytime

A Statamic modifier that returns a colloquial term for the given time.

##About

I needed this, so I made it.

Returns the following when used with a time field:

* **morning**: 12am to 11:59am
* **afternoon**: 12pm to 4:59pm
* **evening**: 5pm to 6:59pm
* **night**: 7pm to 11:59pm

##Support, etc

Troll me on the tweets at [@jeremysexton](http://twitter.com/jeremysexton) or shoot me an email jeremy(at)jeremysexton.net.

If this plugin changed your life and you insist on buying me a beer, [I'm not going to stop you](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LTC6XY9F7RTJ2).

##Example

```
{{ time|daytime }}
```