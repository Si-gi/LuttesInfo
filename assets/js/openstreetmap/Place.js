export default class Place {
    constructor(name = "", latitude = null, longitude = null) {
        this.name = name;
        this.lat = latitude;
        this.lng = longitude;
        this.errors = []
    }

    setLatitude(latitude){
        this.lat = latitude;
    }
    setLontitude(lontitude) {
        this.lng = lontitude;
    }
    /** @param {Object} */
    setlatlgn(object) {
        if (object.lat == null ) {
            console.log("lat null");
            return;
        }
        if (object.lng === null ) {
            console.log("lng null")
            return;
        }
        this.setLatitude(object.lat)
        this.setLontitude(object.lng)
    }
    toString(){
        console.log(latitude + longitude)
    }
}