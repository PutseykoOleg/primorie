import React from 'react'

class AdvButton extends React.Component {
    constructor(props){
        super(props)
        this.ref = React.createRef()
        this.handleClick = this.handleClick.bind(this)
    }

    handleClick() {
        this.props.placeRef.current.classList.toggle('expand')
    }

    render(){
        if(this.props.hasTours === false) 
            return null
        
        return <div ref={this.ref} class="btn adv-btn content-ha-center" onClick={this.handleClick}><p>туры и экскурсии</p></div>
    }
}

class Place extends React.Component {
    constructor(props){
        super(props)
        this.ref = React.createRef()
        this.tours = new Array()
        this.location = {lat:null,lng:null}
    }

    setTours(){
        this.tours = new Array()
        this.props.instance.tours?.map(tour => {
            if(tour !== null)
                this.tours.push(tour)
        })

        this.props.instance.objects?.map(object => {
            object.tours?.map(tour => {
                if(tour !== null)
                    this.tours.push(tour)
            })
        })
    }

    getDuration(tour){
        let durationUnit
        if(tour.duration_unit === 'часы'){
            switch (tour.duration % 10) {
                case 0: durationUnit = 'часов' 
                break;
                case 1: durationUnit = 'час' 
                break;
                case 2: durationUnit = 'часа' 
                break;
                case 3: durationUnit = 'часа' 
                break;
                case 4: durationUnit = 'часа' 
                break;
                case 5: durationUnit = 'часов' 
                break;
                case 6: durationUnit = 'часов' 
                break;
                case 7: durationUnit = 'часов' 
                break;
                case 8: durationUnit = 'часов' 
                break;
                case 9: durationUnit = 'часов' 
                break;
            
                default:
                    break;
            }
        }
        if(tour.duration % 1 !== 0){
            durationUnit = 'часа'
        }
        return tour.duration + ' ' + durationUnit
    }

    render(){
        this.setTours()

        return  <div ref={this.ref} className="place content-ha-left">
                    <div className="content">
                        <p className="title">{this.props.instance.object_name} <b>{this.props.instance.name}</b></p>
                        <div className="objects-list scrollable">
                            {this.props.instance.objects?.map(object =>
                                <h4>{object.name}</h4>
                            )}
                        </div>
                        <div className="actions content-ha-right">
                            {/* <div class="btn map-btn content-ha-center"><p>на карте</p></div> */}
                            <AdvButton placeRef={this.ref} hasTours={this.tours.length === 0 ? false : true}></AdvButton>
                            <div id="tours-list" class="tours-list content-ha-left scrollable">
                                {this.tours.map(tour =>
                                    <div className="tour">
                                        <b>{tour.name}</b>
                                        <div className="cost">{tour.cost}₽ / {this.getDuration(tour)}</div>
                                    </div>
                                )}
                            </div>
                        </div>
                    </div>
                </div>
    }
}

export default Place;