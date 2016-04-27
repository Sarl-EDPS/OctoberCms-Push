/*
 Onesignal, a JavaScript library for mobile-friendly pushs. http://onesignal.com
 (c)
*/
// Merge these settings with the notifyButton setting in your existing init()
notifyButton: {
    enable: true, // Required to use the notify button
    size: 'medium', // One of 'small', 'medium', or 'large'
    theme: 'default', // One of 'default' (red-white) or 'inverse" (white-red)
    position: 'bottom-right', // Either 'bottom-left' or 'bottom-right'
    offset: {
      bottom: '0px',
      left: '0px', // Only applied if bottom-left
      right: '0px' // Only applied if bottom-right
    },
    prenotify: true, // Show an icon with 1 unread message for first-time site visitors
    showCredit: false, // Hide the OneSignal logo
    text: {
      'tip.state.unsubscribed': 'Subscribe to notifications',
      'tip.state.subscribed': "You're subscribed to notifications",
      'tip.state.blocked': "You've blocked notifications",
      'message.prenotify': 'Click to subscribe to notifications',
      'message.action.subscribed': "Thanks for subscribing!",
      'message.action.resubscribed': "You're subscribed to notifications",
      'message.action.unsubscribed': "You won't receive notifications again",
      'dialog.main.title': 'Manage Site Notifications',
      'dialog.main.button.subscribe': 'SUBSCRIBE',
      'dialog.main.button.unsubscribe': 'UNSUBSCRIBE',
      'dialog.blocked.title': 'Unblock Notifications',
      'dialog.blocked.message': "Follow these instructions to allow notifications:"
}