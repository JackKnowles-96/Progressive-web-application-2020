//check that the browser has support
if ('serviceWorker' in navigator) {
    console.log("Service Worker Supported")
    //serviceworker is registered
    window.addEventListener('load', () => {
        navigator.serviceWorker.register("serviceworker.js");
    });
}
else {
    console.log("Service Worker Not Supported");
}
//Checks IndexedDB support
if (!('indexedDB' in window)) {
    console.log('IndexedDB Not Supported');
}
else {
    console.log('IndexedDB Supported');
}
Notification.requestPermission().then(function (result) {
    console.log(result);
});
//Startup hide
document.getElementById('InternetIcon').style.display = 'none';
//Offline Event
window.addEventListener('offline', function (e) {
    document.getElementById('InternetIcon').style.display = 'inline';
    document.getElementById('LoginButton').style.display = 'none';
    if (document.getElementById("updatebutton1")) {
        document.getElementById('updatebutton1').style.display = 'none';
    }
    if (document.getElementById("updatebutton2")) {
        document.getElementById('updatebutton2').style.display = 'none';
    }
});
//Online Event
window.addEventListener('online', function (e) {
    document.getElementById('InternetIcon').style.display = 'none';
    document.getElementById('LoginButton').style.display = 'inline';
    if (document.getElementById("updatebutton1")) {
        document.getElementById('updatebutton1').style.display = 'inline';
    }
    if (document.getElementById("updatebutton2")) {
        document.getElementById('updatebutton2').style.display = 'inline';
    }
});

function Initpage() {
    if (navigator.onLine) {
        document.getElementById('InternetIcon').style.display = 'none';
        document.getElementById('LoginButton').style.display = 'inline';
    }
    else {
        document.getElementById('InternetIcon').style.display = 'inline';
        document.getElementById('LoginButton').style.display = 'none';
    }
}