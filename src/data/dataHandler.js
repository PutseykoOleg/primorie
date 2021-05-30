import places from './places.js'

class Handler{
    getPlaces = (input) => {
        let placesRes = new Set()

        let inputObj = new String(input)
        inputObj = inputObj.replace(/\s+/g, ' ').trim()

        if(inputObj === '')
            return null

        let inputs = inputObj.split(' ')

        inputs.forEach(input => {
            input = input.toLowerCase()
            places.forEach(place => {
                if( String(place.name).toLowerCase().includes(input) || 
                    String(place.object_name).toLowerCase().includes(input) ||
                    String(place.type).toLowerCase().includes(input)){
                    placesRes.add(place)
                    return
                }

                place.objects?.forEach(object => {
                    if( String(object.name).toLowerCase().includes(input) ||
                        String(object.type).toLowerCase().includes(input)){
                        placesRes.add(place)
                        return
                    }

                    object.tours?.forEach(tour => {
                        if( String(tour.name).toLowerCase().includes(input)) {
                            placesRes.add(place)
                            return
                        }
                    });
                });
            });
        });
        
        return placesRes
    }
    
    filtrByPrice = (places, inputStr) => {
        let placesRes = new Set()
        let inputObj = new String(inputStr)
        let placesArray = Array.from(places)

        if(inputObj === '')
            return null

        let input = parseInt(inputObj)

        placesArray.forEach(place => {
            if(place.cost !== null && place.cost <= input){
                placesRes.add(place)
                return
            }

            place.objects?.forEach(object => {
                object.tours?.forEach(tour => {
                    if(tour.cost !== null && tour.cost <= input){
                        placesRes.add(place)
                        return
                    }
                });
            });
        });
        
        return placesRes
    }
}

export default Handler;