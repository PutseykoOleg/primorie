import React from 'react'
import Img from '../elements/appearing-img'
import Handler from '../../data/dataHandler'
import PlacesList from '../elements/places-list'

/** Images */
import bird_1 from '../../assets/img/bird-1.svg'
import bird_2 from '../../assets/img/bird-2.svg'
import bird_3 from '../../assets/img/bird-3.svg'
import bird_4 from '../../assets/img/bird-4.svg'
import settings from '../../assets/img/settings.svg'

class SearchPage extends React.Component {
    constructor(props){
        super(props)
        this.state={foundPlaces:null,searchText:'',priceText:''}
        this.handleChange_Search = this.handleChange_Search.bind(this)
        this.handleChange_Settings = this.handleChange_Settings.bind(this)
        this.handleClick_Settings = this.handleClick_Settings.bind(this)
    }
    
    handleChange_Search(event) {
        let handler = new Handler()
        let places = handler.getPlaces(event.target.value)

        if(places !== null && this.state.priceText !== ''){
            places = handler.filtrByPrice(places, this.state.priceText)
        }

        this.setState({
            foundPlaces:    places,
            searchText:     event.target.value,
            priceText:      this.state.priceText
        })
    }

    handleChange_Settings(event) {
        let handler = new Handler()
        let places = handler.getPlaces(this.state.searchText)

        if(places !== null && event.target.value !== ''){
            places = handler.filtrByPrice(places, event.target.value)
        }

        this.setState({
            foundPlaces:    places,
            searchText:     this.state.searchText,
            priceText:      event.target.value
        })
    }

    handleClick_Settings(){
        document.getElementById('search-input').classList.toggle('action')
        document.getElementById('settings-img').classList.toggle('action')
        document.getElementById('settings-input').classList.toggle('action')
        document.getElementById('search-input').blur()
        document.getElementById('settings-input').focus()
    }

    render(){
        return  <main className="content-ha-center">
                    <Img src={bird_1} id="bird_1"/>
                    <Img src={bird_2} id="bird_2"/>
                    <Img src={bird_3} id="bird_3"/>
                    <div id="content" className="content content-ha-center">
                        <input type="text" id="search-input" className="input search" onChange={this.handleChange_Search} autoComplete="off"/>
                        <img src={settings} id="settings-img" className="settings-img" onClick={this.handleClick_Settings}></img>
                        <input type="text" placeholder="max price" id="settings-input" className="input settings" onChange={this.handleChange_Settings} maxLength="5" autoComplete="off"/>
                        <PlacesList places={this.state.foundPlaces}></PlacesList>
                    </div>
                    <Img src={bird_4} id="bird_4"/>
                </main>
    }
}

export default SearchPage;