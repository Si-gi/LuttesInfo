import Location from "./Place";
import StruggleForm from "./StruggleForm";

// On initialise la latitude et la longitude de Paris (centre de la carte)
var lat = 48.852969;
var lon = 2.349903;

export default class OpenStreetMap {
    constructor(lat = 48.852969, lon = 2.349903 ) {
        this.lat = lat;
        this.lon = lon;
        this.struggleForm = new StruggleForm();
        this.map = null;
        this.popup = L.popup();
        this.initMap()
        this.init()
    }

    initMap() {
        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        this.map = L.map('map').setView([lat, lon], 11);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(this.map);
    }

    init(){
        this.map.addEventListener('click', e => {
            this.onMapClick(e)
        });

    }

    onMapClick(e) {
        this.struggleForm.setCoordo(e.latlng);
    }
}