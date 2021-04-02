importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js');

//Precaching JS and Font
workbox.precaching.precacheAndRoute([
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
    'https://fonts.googleapis.com/css?family=Staatliches&display=swap',
    'https://fonts.gstatic.com/s/staatliches/v3/HI_OiY8KO6hCsQSoAPmtMYebvpA.woff2',
    'https://unpkg.com/dexie@latest/dist/dexie.js',
]);

//Always tries network first and then tries cache for JS and PHP.
workbox.routing.registerRoute(
    /\.(?:js|php)$/,
    new workbox.strategies.NetworkFirst()
);

//Load from cache then update if needed 
//causes an error read up on it //example https://csbun.github.io/workbox-examples/workbox-get-started/index.html
workbox.routing.registerRoute(
    /\.css$/,
    new workbox.strategies.StaleWhileRevalidate({
        cacheName: 'css-store',
    })
);

workbox.routing.registerRoute(
    //caches image files
    /\.(?:png|jpg|jpeg|svg|gif)$/,
    //checks if the image is in the cache before network
    new workbox.strategies.CacheFirst({
        cacheName: 'image-store',
        plugins: [
            new workbox.expiration.Plugin({
                //Stores the image for a set amount of time (1 week)
                maxAgeSeconds: 7 * 24 * 60 * 60,
            })
        ],
    })
);