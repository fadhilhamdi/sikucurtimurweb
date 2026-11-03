// ===========================
// KOORDINAT SIKUCUR TIMUR
// Kabupaten Padang Pariaman
// ===========================
const sikucurTimur = [-0.4617, 100.1179];

// ===========================
// KOORDINAT KANTOR WALI NAGARI (AKURAT)
// sumber: https://maps.app.goo.gl/mpY6bQaLRBTENHR56
// ===========================
const waliNagariLatLng = [-0.4678116, 100.1850199]; 

// ===========================
// INIT MAP
// ===========================
const map = L.map('map', {
    center: sikucurTimur,
    zoom: 13,
    scrollWheelZoom: true
});

// ===========================
// BASE MAPS
// ===========================

// NORMAL
const normalMap = L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    {
        attribution: '&copy; OpenStreetMap contributors',
        maxZoom: 19
    }
);

// SATELIT
const satelliteMap = L.tileLayer(
    'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
    {
        attribution: '&copy; Esri'
    }
);

// Default map
normalMap.addTo(map);


// ===========================
// MARKER KANTOR WALI NAGARI
// ===========================
const waliMarker = L.marker(waliNagariLatLng)
    .addTo(map)
    .bindPopup(`
        <b>Kantor Wali Nagari Sikucur Timur</b><br>
        Sikucur, Kec. V Koto Kp. Dalam<br>
        Kab. Padang Pariaman<br><br>
        <a href="https://www.google.com/maps?q=${waliNagariLatLng[0]},${waliNagariLatLng[1]}" 
           target="_blank"
           style="color:#1f5f3b;font-weight:600;text-decoration:none;">
           📍 Buka di Google Maps
        </a>
    `);

// ===========================
// POLYGON BATAS SIKUCUR TIMUR (REALISTIS)
// ===========================
const batasNagari = [
    [-0.4468, 100.1602],
    [-0.4485, 100.1708],
    [-0.4542, 100.1835],
    [-0.4620, 100.1940],
    [-0.4725, 100.1972],
    [-0.4820, 100.1915],
    [-0.4880, 100.1800],
    [-0.4872, 100.1685],
    [-0.4805, 100.1560],
    [-0.4690, 100.1482],
    [-0.4575, 100.1490],
    [-0.4490, 100.1548]
];

const polygonNagari = L.polygon(batasNagari, {
    color: '#1f5f3b',
    weight: 3,
    fillColor: '#1f5f3b',
    fillOpacity: 0.25
}).addTo(map);

polygonNagari.bindTooltip(
    "Nagari Sikucur Timur<br>Klik untuk ke Kantor Wali Nagari",
    { sticky: true }
);

// ===========================
// EVENT KLIK POLYGON
// ===========================
polygonNagari.on('click', function () {
    map.setView(waliNagariLatLng, 17, {
        animate: true
    });
    waliMarker.openPopup();
});

// ===========================
// LAYER CONTROL
// ===========================
const baseMaps = {
    "Peta Normal": normalMap,
    "Peta Satelit": satelliteMap
};

L.control.layers(baseMaps, null, {
    position: 'topright'
}).addTo(map);

// ===========================
// TOMBOL PANAH HOME
// ===========================
const homeControl = L.control({ position: 'bottomright' });

homeControl.onAdd = function () {
    const div = L.DomUtil.create('div', 'leaflet-bar leaflet-control');
    div.innerHTML = '⤾';
    div.style.background = 'white';
    div.style.width = '34px';
    div.style.height = '34px';
    div.style.lineHeight = '34px';
    div.style.textAlign = 'center';
    div.style.cursor = 'pointer';
    div.title = "Kembali ke Sikucur Timur";

   div.onclick = function () {
    map.fitBounds(polygonNagari.getBounds(), {
        padding: [40, 40],
        animate: true
    });
};


    return div;
};

homeControl.addTo(map);