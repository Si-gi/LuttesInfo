import Ajax from '../utils/ajax'
import Loader from './loader'

/**
 * Gère la recherche d'une adresse ou d'une ville avec l'API adresse.data.gouv.fr.
 */
export default class SearchLocation {

    constructor(place) {
            this.loader = new Loader()
            this.ajax = new Ajax(this.loader)
            this.results = null
            this.countdownID = null
            if (place.lat && place.lng) {
                this.lat = place.lat
                this.lng = place.lng
            }
    }

    init() {
       
    }

    apiRequest() {
       return this.ajax.send('GET', this.getUrl(), this.responseAjax.bind(this))
    }
    /**
     * Timer avant de lancer la requête Ajax.
     */
    timer() {
        clearInterval(this.countdownID)
        this.countdownID = setTimeout(this.count.bind(this), this.time)
    }

    /**
     * Donne l'url.
     * @returns {String}
     */
    getUrl() {
        const geo = `lat=${this.lat}&lon=${this.lng}` // Donne une priorité géographique
        let url = 'https://api-adresse.data.gouv.fr/reverse/?'
        return url + geo
    }

    /**
     * Donne la réponse Ajax.
     * @param {Object} data 
     */
    responseAjax(data) {    
        this.loader.off()
        return data;
    }


    /**
     * Donne le label de la recherche.
     * @param {Array} result 
     */
    getLabel(result) {
        if (this.codeDepartement) {
            return `${result.nom} (${result.codesPostaux[0]})`
        }

        if (this.locationType === 'city') {
            return `${result.properties.city} (${result.properties.postcode})`
        }

        return `${result.properties.label} (${result.properties.context})`
    }


}