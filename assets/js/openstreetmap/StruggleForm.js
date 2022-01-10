import Place from "./place";
import SearchLocation from '../utils/searchLocation'

export default class StruggleForm {
    constructor(place = null) {
        this.place = place ? place : new Place();
        this.lat = document.getElementById("modal-lat");
        this.lng = document.getElementById("modal-lng")
    }

    setCoordoElt() {
        this.lat.textContent = this.place.lat
        this.lng.textContent = this.place.lng
        let search = new SearchLocation(this.place);
        let test = search.apiRequest()
        console.log()
        console.log(search)
        console.log(search.results)
        console.log(test)
    }
    /** @param {Object} object */
    setCoordo(object){
        this.place.setlatlgn(object);
        this.setCoordoElt();
    }
}