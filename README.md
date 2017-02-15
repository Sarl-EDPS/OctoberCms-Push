# OctoberCMS-Onesignal-Push

## This plugin isn't a OneSignal official plugin, but use their API.

### Getting starting with Push Notification

This plugin use OneSignal API for push notification.
OneSignal is a high volume and reliable push notification system for mobile and web applications. We support all major native and mobile platforms by providing dedicated SDKs for each platform, a RESTful server API, and an online dashboard to send push notifications.

### Why should I use OneSignal instead of sending messages directly through GCM (from Google).
- Implementing reliable interfaces to the GCM and APN protocols is difficult. 
- There are open source projects to do it, but even the best ones break when message quantity begins to exceed 500,000 at a time. - These protocols also change frequently, for instance, last week Apple released a new protocol and deprecated their old one.
- OneSignal provides marketing tools including A/B testing, segment targeting, localization, drip marketing, and conversion tracking.
- OneSignal provides a single UI and API to deliver messages across iOS, Android, Amazon Fire, Windows Phone, Chrome Apps, Safari, Chrome Web, Vivaldi, Opera, and Firefox.

### How do I get started? 
Goto [OneSignal](https://onsignal.com) create an account and add a new app.
OneSignal privide a fully-featured online dashboard

If you have any questions, or you can't find what you're looking for, check out OneSinal [Frequently Asked Questions (FAQ)](http://documentation.onesignal.com/docs/frequently-asked-questions)!

### Not implemented yet in this plugin
```
- 'Vivaldi support'
```

### ToDo
```
- 'Vivaldi Support'
- 'Both Button and link in the same website'
- 'More parameters for button theme personnalisation'
- 'Send Notifications from Backend'
```





### Add the plugin in your page at the top of the head section.
### Copy https://yoursite.com/manifest.json, https://yoursite.com/OneSignalSDKWorker.js, 
         https://yoursite.com/OneSignalSDKUpdaterWorker.js in the top level root of your website 
         (only for Https website).
### Choose Link or Button (not both at the same time for a website)
### Goto [OneSignal.com](http://onesignal.com) for sign in and Add a new App.
### Goto [Web Push Introduction](https://https://documentation.onesignal.com/docs/what-is-website-push) for set onesignal app parameters.


### Adapt properties

[![push link](http://img.ctrlv.in/img/17/02/15/58a4bc7a04c17.png)](http://ctrlv.in/925735)


|  Property  ........................................ | Description  ...................................................................................................................................................................... |
| --- | --- |
| **Choose your domain or subdomain** | Push notifications requires sites to be using HTTPS, non-HTTPS websites must use a subdomain of onesignal.com, choose a unique subdomain in OneSignal configuration API and fill this property with this name|
| **OneSignal App Id** | Your can get your OneSignal Project Id from "onesignal.com" |
| **OneSignal Safari Id** | Your can get your OneSignal Project Id from "onesignal.com" |
| **Enable notification** | Required to use the notify button. If false, no notification displaying |
| **Prenotify Notification** | Show an icon with 1 unread message for first-time site visitors |
| **Persist Notification** | If false, the notification will disappear roughly after 20 seconds. If true, the notification will be displayed indefinitely until the user interacts with notification (dismisses it or clicks it) |
| **Welcome Message** | Customise or Disable the automatic welcome notification |
| **Show Credit** | Hide OneSignal credit if false |


[![push button](http://img.ctrlv.in/img/17/02/15/58a4baa3ab223.png)](http://ctrlv.in/925730)

|  Property  ........................................ | Description  ...................................................................................................................................................................... |
| --- | --- |
| **Not Fully HTTPS** | If your site, does not support HTTPS, or Serves some pages over HTTP and other pages over HTTPS then enable this HTTP Fallback option. Otherwise leave this option unchecked! **Not actif yet**. |
| **Choose your domain or subdomain** | Push notifications requires sites to be using HTTPS, non-HTTPS websites must use a subdomain of onesignal.com, choose a unique subdomain in OneSignal configuration API and fill this property with this name|
| **OneSignal App Id** | Your can get your OneSignal Project Id from "onesignal.com" |
| **OneSignal Safari Id** | Your can get your OneSignal Project Id from "onesignal.com" |
| **Enable notification** | Required to use the notify button. If false, no notification displaying |
| **Icon size** | Size of the subscribe button ("Small", "Medium", or "Large") |
| **Theme** | Choos the theme of your button ("red-white" or "white-red") |
| **Position** | Button position in the page ("Bottom Left" or "Bottom Right") |
| **Offset Bottom** | Distance between page bottom and button |
| **Offset Left** | Distance between page    => 'Left',(only applied if bottom-left), |
| **Offset Right** | Distance between page right and button(only applied if bottom-right) |
| **Prenotify** | Show an icon with 1 unread message for first-time site visitors |
| **Show Credit** | Hide OneSignal credit if false |
| **Welcome Message** | Customise or Disable the automatic welcome notification |
| **Persist Notification** | If false, the notification will disappear roughly after 20 seconds. If true, the notification will be displayed indefinitely until the user interacts with notification (dismisses it or clicks it) |



### The plugin Push Link or Button on your page

[![push page](http://img.ctrlv.in/img/16/04/27/5720abb7dd59e.png)](http://ctrlv.in/744669)

### For Link Notification Add this in your page

```
<section id="onesignal-link">
    <a href="#" id="subscribe-link">Subscribe</a>
    <a href="#" id="unsubscribe-link">Unsubscribe</a>
    {% component 'pushLink' %}
</section>
```