import React from 'react'
import Place from '../elements/place'

const PlacesList = (props) => {
    let places = new Array()
        
    props.places?.forEach(function(place){
        places.push(<Place instance={place}></Place>)
    })

    return  <div className="places-list col content-ha-center">
                {places}
            </div>
}

export default PlacesList;