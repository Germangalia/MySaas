/**
 * Created by ggalia84 on 25/05/16.
 */
var notifyUser = function (data) {
    if (!('Notification' in window)) {
        alert('Web Notification is not supported');
        return;
    }
    window.console.log(data);
    Notification.requestPermission(function(permission){
        var notification = new Notification(data.shotout.user.email +' said:', {
            body: data.shotout.message,
            icon: data.shotout.user.avatar
        });
    });
};
Pusher.log = function(message) {
    if (window.console && window.console.log) {
        window.console.log(message);
    }
};
var pusher = new Pusher('ba0fa7b0552a521ea021', {
    encrypted: true
});

var channel = pusher.subscribe('shotout-added');
channel.bind("App\\Events\\ShotoutAdded", notifyUser);